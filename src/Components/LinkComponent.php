<?php

namespace Redbastie\Swift\Components;

class LinkComponent extends BaseComponent
{
    protected $content;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
        $this->attr('href', '#');
    }

    public function href($href)
    {
        return $this->attr('href', $href);
    }

    public function target($target)
    {
        return $this->attr('target', $target);
    }

    public function active($active = true)
    {
        return $active ? $this->class('active') : $this;
    }

    public function disabled($disabled = true)
    {
        return $disabled ? $this->class('disabled') : $this;
    }

    public function collapseToggle($class)
    {
        $this->attr('href', '.' . $class);
        $this->attr('data-toggle', 'collapse');

        return $this;
    }

    public function stretched()
    {
        return $this->class('stretched-link');
    }
}
