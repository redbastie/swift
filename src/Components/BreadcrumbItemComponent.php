<?php

namespace Redbastie\Swift\Components;

class BreadcrumbItemComponent extends BaseComponent
{
    protected $content;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }

    public function active($active = true)
    {
        return $active ? $this->class('active') : $this;
    }
}
