<?php

namespace Redbastie\Swift\Components;

class NavComponent extends BaseComponent
{
    protected $content;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }

    public function tabs()
    {
        return $this->class('nav-tabs');
    }

    public function pills()
    {
        return $this->class('nav-pills');
    }

    public function fill()
    {
        return $this->class('nav-fill');
    }

    public function justified()
    {
        return $this->class('nav-justified');
    }
}
