<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Redbastie\Swift\Components\SwiftComponent as S;
use Redbastie\Swift\Livewire\SwiftComponent;

class Index extends SwiftComponent
{
    public $routeUri = '/users';
    public $routeName = 'users';
    public $routeMiddleware = 'auth';
    public $pageTitle = 'Users';
    protected $listeners = ['$refresh'];

    public function query()
    {
        $query = User::query();

        if (!empty($this->model['search'])) {
            $query->where('name', 'like', '%' . $this->model['search'] . '%');
            $query->orWhere('email', 'like', '%' . $this->model['search'] . '%');
        }

        return $query->orderBy('name');
    }

    public function view()
    {
        $users = $this->query()->paginate();

        return S::div(
            S::livewire('layouts.navbar'),

            S::container(
                S::heading($this->pageTitle),

                S::row(
                    S::col(S::input('search')->type('search')->placeholder('Search')->modelDebounce())->mdAuto()->mb(3),
                    S::col(S::button('Create User')->primary()->click('$emit', 'showCreateModal'))->mdAuto()->mb(3)
                )->justifyContentBetween(),

                S::listGroup(
                    S::each($users, function ($user) {
                        return S::listGroupItem(
                            S::row(
                                S::col(
                                    S::div(e($user->name)),
                                    S::div(e($user->email))->small()->textMuted(),
                                )->md(),
                                S::col(
                                    S::button(S::icon('eye'))->title('Read')->link()->p(1)->click('$emit', 'showReadModal', $user->id),
                                    S::button(S::icon('edit'))->title('Update')->link()->p(1)->click('$emit', 'showUpdateModal', $user->id),
                                    S::button(S::icon('trash-alt'))->title('Delete')->link()->p(1)->click('delete', $user->id)->confirm(),
                                )->mdAuto()
                            )->alignItemsCenter()
                        )->action();
                    })->empty(
                        S::listGroupItem('No users to display.')
                    )
                )->mb(3),

                S::pagination($users)
            )->py(4),

            S::livewire('users.create'),
            S::livewire('users.read'),
            S::livewire('users.update')
        );
    }

    public function delete(User $user)
    {
        $user->delete();
        $this->emit('toastSuccess', 'User deleted!');
    }
}
