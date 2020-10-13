<?php

namespace Redbastie\Swift\Traits;

trait BackgroundUtilities
{
    public function bgPrimary()
    {
        return $this->class('bg-primary');
    }

    public function bgSecondary()
    {
        return $this->class('bg-secondary');
    }

    public function bgSuccess()
    {
        return $this->class('bg-success');
    }

    public function bgInfo()
    {
        return $this->class('bg-info');
    }

    public function bgDanger()
    {
        return $this->class('bg-danger');
    }

    public function bgWarning()
    {
        return $this->class('bg-warning');
    }

    public function bgLight()
    {
        return $this->class('bg-light');
    }

    public function bgDark()
    {
        return $this->class('bg-dark');
    }

    public function bgWhite()
    {
        return $this->class('bg-white');
    }

    public function bgTransparent()
    {
        return $this->class('bg-transparent');
    }
}
