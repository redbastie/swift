<?php

namespace Redbastie\Swift\Commands;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

trait CreatesFiles
{
    protected $filesystem;
    protected $argument;
    protected $stubDir;
    protected $targetDir;
    private $replaces;

    public function createFiles()
    {
        $this->filesystem = new Filesystem;
        $title = Str::title(str_replace('_', ' ', Str::snake($this->argument)));
        $titles = Str::plural($title);
        $this->replaces = [
            'DummyComponent' => Str::studly($title),
            'DummyModels' => Str::studly($titles),
            'DummyModel' => Str::studly($title),
            'DummyFactory' => Str::studly($title) . 'Factory',
            'DummyTitles' => $titles,
            'DummyTitle' => $title,
            'dummyVariables' => Str::camel($titles),
            'dummyVariable' => Str::camel($title),
            'dummy-routes' => Str::snake($titles, '-'),
            'dummy-route' => Str::snake($title, '-'),
            'Dummy quote.' => Arr::random(require __DIR__ . '/../../../../../vendor/livewire/livewire/src/Commands/the-tao.php'),
        ];

        foreach ($this->filesystem->allFiles($this->stubDir) as $file) {
            $dir = $this->targetDir ? $this->targetDir . '/' : null;
            $fileDir = $dir . $this->replace($file->getRelativePath());
            $filePath = $dir . $this->replace(Str::replaceLast('.stub', '', $file->getRelativePathname()));

            if ($fileDir) {
                $this->filesystem->ensureDirectoryExists($fileDir);
            }

            $this->filesystem->put($filePath, $this->replace($file->getContents()));

            $this->info('Created file: ' . $filePath);
        }
    }

    private function replace($content)
    {
        foreach ($this->replaces as $search => $replace) {
            $content = str_replace($search, $replace, $content);
        }

        return $content;
    }
}
