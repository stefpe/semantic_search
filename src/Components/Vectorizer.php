<?php

namespace App\Components;

use Contextionary\ContextionaryClient;
use Contextionary\Corpi;

class Vectorizer
{
    public static function strToVec(ContextionaryClient $client, string $value): ?array
    {
        $corpi = new Corpi();
        $corpi->setCorpi([strtolower($value)]);
        $result = $client->VectorForCorpi($corpi)->wait();
        if (empty($result[0])){
            return null;
        }
        $values = array_map(fn($item) => $item->getEntry(), iterator_to_array($result[0]->getEntries()));
        return empty($values) ? null : $values;
    }
}
