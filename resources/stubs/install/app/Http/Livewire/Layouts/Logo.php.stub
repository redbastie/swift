<?php

namespace App\Http\Livewire\Layouts;

use Redbastie\Swift\Components\SwiftComponent as S;
use Redbastie\Swift\Livewire\SwiftComponent;

class Logo extends SwiftComponent
{
    public function view()
    {
        return S::span(
            S::icon('laravel')->brand()->textPrimary(),
            config('app.name')
        );
    }
}
