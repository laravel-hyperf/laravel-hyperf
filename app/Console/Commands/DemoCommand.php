<?php

declare(strict_types=1);

namespace App\Console\Commands;

use LaravelHyperf\Foundation\Console\Command;

class DemoCommand extends Command
{
    protected ?string $signature = 'demo:hi {--name=}';

    protected string $description = 'Hyperf Demo Command';

    public function handle()
    {
        $this->info('Hello ' . ($this->option('name') ?: 'Laravel Hyperf'));
    }
}
