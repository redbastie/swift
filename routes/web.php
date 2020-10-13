<?php

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function () {
    $filesystem = new Filesystem;
    $dir = app_path('Http/Livewire');

    if ($filesystem->exists($dir)) {
        foreach ($filesystem->allFiles($dir) as $file) {
            $className = 'App\\Http\\Livewire\\' . str_replace(['/', '.php'], ['\\', ''], $file->getRelativePathname());
            $class = app($className);

            if ($class->routeUri) {
                $route = Route::get($class->routeUri, $className);
                if ($class->routeName) $route->name($class->routeName);
                if ($class->routeMiddleware) $route->middleware($class->routeMiddleware);
            }
        }
    }
});
