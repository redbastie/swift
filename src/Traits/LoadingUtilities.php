<?php

namespace Redbastie\Swift\Traits;

trait LoadingUtilities
{
    public function loading()
    {
        return $this->attr('wire:loading', '');
    }

    public function loadingRemove()
    {
        return $this->attr('wire:loading.remove', '');
    }

    public function loadingClass($class)
    {
        return $this->attr('wire:loading.class', $class);
    }

    public function loadingClassRemove($class)
    {
        return $this->attr('wire:loading.class.remove', $class);
    }

    public function loadingAttr($attr)
    {
        return $this->attr('wire:loading.attr', $attr);
    }

    public function loadingAttrRemove($attr)
    {
        return $this->attr('wire:loading.attr.remove', $attr);
    }

    public function loadingTarget($loadingTarget)
    {
        return $this->attr('wire:target', $loadingTarget);
    }
}
