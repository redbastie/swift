<?php

namespace Redbastie\Swift\Traits;

trait BorderUtilities
{
    public function border($border = null)
    {
        return $this->class('border' . (!is_null($border) ? '-' . $border : null));
    }

    public function borderTop($borderTop = null)
    {
        return $this->class('border-top' . (!is_null($borderTop) ? '-' . $borderTop : null));
    }

    public function borderRight($borderRight = null)
    {
        return $this->class('border-right' . (!is_null($borderRight) ? '-' . $borderRight : null));
    }

    public function borderBottom($borderBottom = null)
    {
        return $this->class('border-bottom' . (!is_null($borderBottom) ? '-' . $borderBottom : null));
    }

    public function borderLeft($borderLeft = null)
    {
        return $this->class('border-left' . (!is_null($borderLeft) ? '-' . $borderLeft : null));
    }

    public function borderPrimary()
    {
        return $this->class('border-primary');
    }

    public function borderSecondary()
    {
        return $this->class('border-secondary');
    }

    public function borderSuccess()
    {
        return $this->class('border-success');
    }

    public function borderInfo()
    {
        return $this->class('border-info');
    }

    public function borderDanger()
    {
        return $this->class('border-danger');
    }

    public function borderWarning()
    {
        return $this->class('border-warning');
    }

    public function borderLight()
    {
        return $this->class('border-light');
    }

    public function borderDark()
    {
        return $this->class('border-dark');
    }

    public function borderWhite()
    {
        return $this->class('border-white');
    }

    public function rounded($rounded = null)
    {
        return $this->class('rounded' . ($rounded ? '-' . $rounded : null));
    }

    public function roundedTop()
    {
        return $this->class('rounded-top');
    }

    public function roundedRight()
    {
        return $this->class('rounded-right');
    }

    public function roundedBottom()
    {
        return $this->class('rounded-bottom');
    }

    public function roundedLeft()
    {
        return $this->class('rounded-left');
    }

    public function roundedCircle()
    {
        return $this->class('rounded-circle');
    }

    public function roundedPill()
    {
        return $this->class('rounded-pill');
    }

    public function roundedLg()
    {
        return $this->class('rounded-lg');
    }

    public function roundedSm()
    {
        return $this->class('rounded-sm');
    }
}
