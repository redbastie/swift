<?php

namespace Redbastie\Swift\Commands;

use Illuminate\Console\Command;

class MakePageCommand extends Command
{
    use CreatesFiles;

    protected $signature = 'make:page {component}';

    public function handle()
    {
        $this->argument = $this->argument('component');
        $this->stubDir = __DIR__ . '/../../resources/stubs/page';
        $this->targetDir = 'app/Http/Livewire';

        $this->createFiles();
        $this->info($this->argument . ' page component generated!');
    }
}
