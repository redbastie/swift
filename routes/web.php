<?php

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function () {
    foreach ((new Filesystem)->allFiles(app_path('Http/Livewire')) as $file) {
        $className = 'App\\Http\\Livewire\\' . str_replace(['/', '.php'], ['\\', ''], $file->getRelativePathname());
        $class = app($className);

        if ($class->routeUri) {
            $route = Route::get($class->routeUri, $className);
            if ($class->routeName) $route->name($class->routeName);
            if ($class->routeMiddleware) $route->middleware($class->routeMiddleware);
        }
    }
});
