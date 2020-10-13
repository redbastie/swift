<?php

namespace Redbastie\Swift\Traits;

trait CollapseUtilities
{
    public function collapseToggle($class)
    {
        $this->attr('data-target', '.' . $class);
        $this->attr('data-toggle', 'collapse');

        return $this;
    }

    public function collapse($class)
    {
        return $this->class('collapse ' . $class);
    }
}
