<?php

namespace Redbastie\Swift\Commands;

use Illuminate\Console\Command;

class MakeSwiftModelCommand extends Command
{
    use CreatesFiles;

    protected $signature = 'make:swiftmodel {model}';

    public function handle()
    {
        $this->argument = $this->argument('model');
        $this->stubDir = __DIR__ . '/../../resources/stubs/swiftmodel';

        $this->createFiles();

        $this->info($this->argument . ' swift model generated!');
    }
}
