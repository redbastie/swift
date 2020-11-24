<?php

namespace Redbastie\Swift\Commands;

use Illuminate\Console\Command;

class InstallPasswordForgot extends Command
{
    use CreatesFiles;

    protected $signature = 'install:password-forgot';

    public function handle()
    {
        $this->stubDir = __DIR__ . '/../../resources/stubs/password-forgot';

        if ($this->confirm('This will replace your login component. Continue?')) {
            $this->createFiles();
            $this->info('Password forgot components installed!');
        }
    }
}
