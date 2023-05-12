<?php

namespace App\Factory;

use Contextionary\ContextionaryClient;
use Grpc\ChannelCredentials;

class ContextionaryClientFactory
{
    public static function create(string $host): ContextionaryClient
    {
        return new ContextionaryClient($host, [
            'credentials' => ChannelCredentials::createInsecure(),
        ]);
    }
}
