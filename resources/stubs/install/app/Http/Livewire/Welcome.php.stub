<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Route;
use Redbastie\Swift\Components\SwiftComponent as S;
use Redbastie\Swift\Livewire\SwiftComponent;

class Welcome extends SwiftComponent
{
    public $routeUri = '/';
    public $routeName = 'welcome';
    public $pageTitle = 'Welcome';

    public function view()
    {
        return S::container(S::row(S::col(
            S::heading(S::livewire('layouts.logo'))->mb(3),
            S::paragraph('Welcome to your Swift app!')->lead(),

            S::if(auth()->guest(), function () {
                return S::list(
                    S::listItem(S::link('Login')->href(route('login')))->inline(),
                    S::if(Route::has('register'), function () {
                        return S::listItem(S::link('Register')->href(route('register')))->inline();
                    })
                )->inline();
            })->else(function () {
                return S::list(
                    S::listItem(S::link('Home')->href(route('home')))->inline(),
                )->inline();
            })
        )->auto())->alignItemsCenter()->justifyContentCenter()->textCenter()->minVhFull());
    }
}
