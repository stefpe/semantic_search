<?php

namespace App\Command;

use App\Components\Vectorizer;
use Contextionary\ContextionaryClient;
use OpenSearch\Client;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

#[AsCommand(
    name: 'vectorize',
    description: 'Add a short description for your command',
)]
class VectorizeCommand extends Command
{
    private const INDEX = 'movies';

    public function __construct(
        private Client $searchClient,
        private ContextionaryClient $contextionaryClient,
        #[Autowire('%kernel.project_dir%/data/')] private string $dataDir)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->createSearchKnnIndex();
        $movieFile = new \SplFileObject($this->dataDir . 'final_data.csv');
        $movieFile->setFlags(\SplFileObject::READ_CSV);
        $movieFile->fgetcsv(); // skip header
        while ($row = $movieFile->fgetcsv()) {
            $doc = [
                'index' => self::INDEX,
                'id' => $row[0],
                'body' => [
                    'title' => $row[2] ?? null,
                    'description' => $row[7] ?? null,
                    'description_vector' => Vectorizer::strToVec( $this->contextionaryClient, $row[7] ?? ""),
                    'review' => $row[16] ?? null,
                    'review_vector' => Vectorizer::strToVec($this->contextionaryClient,$row[16] ?? ""),
                    'genre' => explode(",", $row[4] ?? ""),
                    'keywords' => explode(",", $row[9] ?? "")
                ]
            ];

            $this->searchClient->index($doc);
        }
        return Command::SUCCESS;
    }

    private function createSearchKnnIndex(): void
    {
        try {
            $this->searchClient->indices()->delete(['index' => self::INDEX]);
        } catch (\Exception $e) {

        }

        $this->searchClient->indices()->create([
            'index' => self::INDEX,
            'body' => [
                'settings' => [
                    'index' => [
                        'knn' => true,
                        'knn.space_type' => 'cosinesimil', #measure the orientation between two vectors, perfect for semantic search applications
                        'number_of_shards' => 1
                    ]
                ],
                'mappings' => [
                    'properties' => [
                        'title' => [
                            'type' => 'text',
                        ],
                        'description' => [
                            'type' => 'text',
                        ],
                        'description_vector' =>
                            [
                                'type' => 'knn_vector',
                                'dimension' => 300,
                            ],
                        'review' => [
                            'type' => 'text',
                        ],
                        'review_vector' =>
                            [
                                'type' => 'knn_vector',
                                'dimension' => 300,
                            ],
                        'genre' => [
                            'type' => 'keyword',
                        ],
                        'keywords' => [
                            'type' => 'keyword',
                        ]
                    ],
                ],
            ],
        ]);
    }
}
