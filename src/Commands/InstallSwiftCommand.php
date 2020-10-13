<?php

namespace Redbastie\Swift\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InstallSwiftCommand extends Command
{
    use CreatesFiles;

    protected $signature = 'install:swift';

    public function handle()
    {
        $this->stubDir = __DIR__ . '/../../resources/stubs/install';

        $this->createFiles();

        $userMigration = 'database/migrations/2014_10_12_000000_create_users_table.php';

        if ($this->filesystem->exists($userMigration)) {
            $this->filesystem->delete($userMigration);
            $this->info('Deleted file: ' . $userMigration);
        }

        Artisan::call('migrate:auto --fresh --seed', [], $this->getOutput());

        exec('npm install && npm run dev');

        $this->info('Swift installed: <href=' . config('app.url') . '>' . config('app.url') . '</>');
        $this->warn('Login using <info>user@example.com:password</info>');
    }
}
