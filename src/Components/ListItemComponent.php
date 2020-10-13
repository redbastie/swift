<?php

namespace Redbastie\Swift\Components;

class ListItemComponent extends BaseComponent
{
    protected $content;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }

    public function inline()
    {
        return $this->class('list-inline-item');
    }
}
