<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Redbastie\Swift\Components\SwiftComponent as S;
use Redbastie\Swift\Livewire\SwiftComponent;

class Register extends SwiftComponent
{
    public $routeUri = '/register';
    public $routeName = 'register';
    public $routeMiddleware = 'guest';
    public $pageTitle = 'Register';

    public function view()
    {
        return S::div(
            S::livewire('layouts.navbar'),

            S::container(S::row(S::col(
                S::card()->header($this->pageTitle)->body(
                    S::form(
                        S::input('name')->label('Name')->modelDefer(),
                        S::input('email')->type('email')->label('Email')->modelDefer(),
                        S::input('password')->type('password')->label('Password')->modelDefer(),
                        S::input('password_confirmation')->type('password')->label('Confirm Password')->modelDefer(),
                        S::button('Register')->submit()->primary()->block()
                    )->submitPrevent('register')
                )
            )->md(5))->justifyContentCenter())->py(4)
        );
    }

    public function register()
    {
        $validatedData = $this->validate([
            'name' => ['required'],
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'confirmed'],
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        $user = User::create($validatedData);

        auth()->login($user);

        $this->redirect(RouteServiceProvider::HOME);
    }
}
