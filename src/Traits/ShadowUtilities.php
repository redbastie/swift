<?php

namespace Redbastie\Swift\Traits;

trait ShadowUtilities
{
    public function shadow()
    {
        return $this->class('shadow');
    }

    public function shadowSm()
    {
        return $this->class('shadow-sm');
    }

    public function shadowLg()
    {
        return $this->class('shadow-lg');
    }

    public function shadowNone()
    {
        return $this->class('shadow-none');
    }
}
