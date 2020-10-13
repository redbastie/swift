<?php

namespace Redbastie\Swift\Components;

class ListGroupComponent extends BaseComponent
{
    protected $content;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }

    public function flush()
    {
        return $this->class('list-group-flush');
    }

    public function horizontal()
    {
        return $this->class('list-group-horizontal');
    }
}
