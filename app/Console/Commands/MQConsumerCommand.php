<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\RabbitMQService;

class MQConsumerCommand extends Command
{
    protected $signature = 'mq:consume';
    protected $description = 'Consume the mq queue';
    public function handle(): void
    {
        $mqService = new RabbitMQService();
        $mqService->consume();
    }
}
