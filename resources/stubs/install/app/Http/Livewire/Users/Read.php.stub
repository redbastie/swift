<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Str;
use Redbastie\Swift\Components\SwiftComponent as S;
use Redbastie\Swift\Livewire\SwiftComponent;

class Read extends SwiftComponent
{
    public $user;
    protected $listeners = ['showReadModal'];

    public function view()
    {
        return S::modal('read-modal')->fade()->heading('User')
            ->body(
                S::each($this->user ? $this->user->toArray() : [], function ($value, $key) {
                    return S::div(
                        S::label(Str::title(str_replace('_', ' ', Str::snake($key))))->textMuted(),

                        is_array($value) ?
                            S::pre(json_encode($value, JSON_PRETTY_PRINT)) :
                            S::paragraph($value ?? 'N/A')
                    );
                })
            )
            ->footer(
                S::button('Close')->secondary()->click('$emit', 'hideModal', 'read-modal')
            );
    }

    public function showReadModal(User $user)
    {
        $this->user = $user;
        $this->emit('showModal', 'read-modal');
    }
}
