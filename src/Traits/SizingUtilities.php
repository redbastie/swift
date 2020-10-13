<?php

namespace Redbastie\Swift\Traits;

trait SizingUtilities
{
    public function w($w)
    {
        return $this->class('w-' . $w);
    }

    public function wAuto()
    {
        return $this->class('w-auto');
    }

    public function h($h)
    {
        return $this->class('h-' . $h);
    }

    public function hAuto()
    {
        return $this->class('h-auto');
    }

    public function mwFull()
    {
        return $this->class('mw-100');
    }

    public function mhFull()
    {
        return $this->class('mh-100');
    }

    public function minVwFull()
    {
        return $this->class('min-vw-100');
    }

    public function minVhFull()
    {
        return $this->class('min-vh-100');
    }

    public function vwFull()
    {
        return $this->class('vw-100');
    }

    public function vhFull()
    {
        return $this->class('vh-100');
    }
}
