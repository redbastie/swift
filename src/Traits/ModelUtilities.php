<?php

namespace Redbastie\Swift\Traits;

trait ModelUtilities
{
    public function model()
    {
        return $this->attr('wire:model', 'model.' . $this->name);
    }

    public function modelDebounce($ms = 500)
    {
        return $this->attr('wire:model.debounce.' . $ms . 'ms', 'model.' . $this->name);
    }

    public function modelDefer()
    {
        return $this->attr('wire:model.defer', 'model.' . $this->name);
    }

    public function modelLazy()
    {
        return $this->attr('wire:model.lazy', 'model.' . $this->name);
    }
}
