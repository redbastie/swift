<?php

namespace App\Http\Livewire\Auth;

use Redbastie\Swift\Components\SwiftComponent as S;
use Redbastie\Swift\Livewire\SwiftComponent;

class Logout extends SwiftComponent
{
    public function view()
    {
        return S::button('Logout')->dropdownItem()->click('logout');
    }

    public function logout()
    {
        auth()->logout();

        $this->redirect('/');
    }
}
