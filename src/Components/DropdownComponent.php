<?php

namespace Redbastie\Swift\Components;

class DropdownComponent extends BaseComponent
{
    protected $toggle;
    protected $items;

    public function __construct()
    {
        parent::__construct();
    }

    public function toggle(...$content)
    {
        $this->toggle = implode(PHP_EOL, func_get_args());

        return $this;
    }

    public function items(...$content)
    {
        $this->items = implode(PHP_EOL, func_get_args());

        return $this;
    }

    public function right()
    {
        return $this->class('dropdown-menu-right');
    }

    public function smRight()
    {
        return $this->class('dropdown-menu-sm-right');
    }

    public function mdRight()
    {
        return $this->class('dropdown-menu-md-right');
    }

    public function lgRight()
    {
        return $this->class('dropdown-menu-lg-right');
    }

    public function xlRight()
    {
        return $this->class('dropdown-menu-xl-right');
    }

    public function left()
    {
        return $this->class('dropdown-menu-left');
    }

    public function smLeft()
    {
        return $this->class('dropdown-menu-sm-left');
    }

    public function mdLeft()
    {
        return $this->class('dropdown-menu-md-left');
    }

    public function lgLeft()
    {
        return $this->class('dropdown-menu-lg-left');
    }

    public function xlLeft()
    {
        return $this->class('dropdown-menu-xl-left');
    }
}
