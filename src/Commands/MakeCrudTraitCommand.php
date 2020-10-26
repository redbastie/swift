<?php

namespace Redbastie\Swift\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class MakeCrudTraitCommand extends Command
{
    use CreatesFiles;

    protected $signature = 'make:crudtrait {model}';

    public function handle()
    {
        $this->argument = $this->argument('model');
        $this->stubDir = __DIR__ . '/../../resources/stubs/crudtrait';

        $this->createFiles();

        $navbar = 'app/Http/Livewire/Layouts/Navbar.php';

        if ($this->filesystem->exists($navbar)) {
            $navbarContents = $this->filesystem->get($navbar);
            $navItem = "S::navItem(S::navLink('" . $this->replaces['DummyTitles'] . "')->href(route('" . $this->replaces['dummy-routes'] . "'))),";

            if (!Str::contains($navbarContents, $navItem)) {
                $hook = '// crud command hook';
                preg_match('/(.*)' . str_replace('/', '\/', $hook) . '/', $navbarContents, $indent);

                $this->filesystem->put($navbar, str_replace($hook, $navItem . PHP_EOL . $indent[1] . $hook, $this->filesystem->get($navbar)));
                $this->info('Nav item inserted: ' . $navbar);
            }
        }

        $this->info($this->argument . ' CRUD + Trait generated!');
        $this->warn("Don't forget to update the new model migration and run the <info>migrate:auto</info> command.");
    }
}
