<?php

namespace Redbastie\Swift\Commands;

use Illuminate\Console\Command;

class MakeSwiftCommand extends Command
{
    use CreatesFiles;

    protected $signature = 'make:swift {component}';

    public function handle()
    {
        $this->argument = $this->argument('component');
        $this->stubDir = __DIR__ . '/../../resources/stubs/swift';
        $this->targetDir = 'app/Http/Livewire';

        $this->createFiles();
        $this->info($this->argument . ' component generated!');
    }
}
