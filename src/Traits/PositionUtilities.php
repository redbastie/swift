<?php

namespace Redbastie\Swift\Traits;

trait PositionUtilities
{
    public function positionStatic()
    {
        return $this->class('position-static');
    }

    public function positionRelative()
    {
        return $this->class('position-relative');
    }

    public function positionAbsolute()
    {
        return $this->class('position-absolute');
    }

    public function positionFixed()
    {
        return $this->class('position-fixed');
    }

    public function positionSticky()
    {
        return $this->class('position-sticky');
    }

    public function fixedTop()
    {
        return $this->class('fixed-top');
    }

    public function fixedBottom()
    {
        return $this->class('fixed-bottom');
    }

    public function stickyTop()
    {
        return $this->class('sticky-top');
    }
}
