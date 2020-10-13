<?php

namespace Redbastie\Swift\Traits;

trait DropdownUtilities
{
    public function dropdownToggle()
    {
        $this->class('dropdown-toggle');
        $this->attr('data-toggle', 'dropdown');

        return $this;
    }

    public function dropdownItem()
    {
        return $this->class('dropdown-item');
    }
}
