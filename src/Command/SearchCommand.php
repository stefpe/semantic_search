<?php

namespace App\Command;

use Contextionary\ContextionaryClient;
use Contextionary\Corpi;
use OpenSearch\Client;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use App\Components\Vectorizer;

#[AsCommand(
    name: 'search',
    description: 'Semantic search for movies',
)]
class SearchCommand extends Command
{


    public function __construct(
        private ContextionaryClient $contextionaryClient,
        private Client              $searchClient,
    )
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('q', InputArgument::OPTIONAL, 'Argument description');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $q = $input->getArgument('q');

        $vector = Vectorizer::strToVec($this->contextionaryClient, $q);

        $results = $this->searchClient->search($this->getSearchQuery($vector));

        $table = new Table($output);
        $table->setHeaders(['ID', 'Title', 'Score']);
        foreach ($results['hits']['hits'] as $hit) {
            $table->addRow([$hit['_id'], $hit['_source']['title'], $hit['_score']]);
        }
        $table->render();
        return Command::SUCCESS;
    }

    private function getSearchQuery(array $vector): array
    {
        return [
            'index' => 'movies',
            'body' => [
                'query' => [
                    'bool' => [
                        'should' => [
                            [
                                'knn' => [
                                    'description_vector' => [
                                        'vector' => $vector,
                                        'k' => 1
                                    ]
                                ]
                            ],
                            [
                                'knn' => [
                                    'review_vector' => [
                                        'vector' => $vector,
                                        'k' => 1
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }
}
