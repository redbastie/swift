<?php

namespace Redbastie\Swift\Components;

class TableHeadComponent extends BaseComponent
{
    protected $content;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }

    public function light()
    {
        return $this->class('thead-light');
    }

    public function dark()
    {
        return $this->class('thead-dark');
    }
}
