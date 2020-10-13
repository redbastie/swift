<?php

namespace Redbastie\Swift\Components;

class NavbarComponent extends BaseComponent
{
    protected $content;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }

    public function expand()
    {
        return $this->class('navbar-expand');
    }

    public function expandSm()
    {
        return $this->class('navbar-expand-sm');
    }

    public function expandMd()
    {
        return $this->class('navbar-expand-md');
    }

    public function expandLg()
    {
        return $this->class('navbar-expand-lg');
    }

    public function expandXl()
    {
        return $this->class('navbar-expand-xl');
    }

    public function light()
    {
        return $this->class('navbar-light');
    }

    public function dark()
    {
        return $this->class('navbar-dark');
    }
}
