<?php

namespace Redbastie\Swift\Components;

class ListComponent extends BaseComponent
{
    protected $type = 'ul';
    protected $content;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }

    public function ordered()
    {
        $this->type = 'ol';

        return $this;
    }

    public function unstyled()
    {
        return $this->class('list-unstyled');
    }

    public function inline()
    {
        return $this->class('list-inline');
    }
}
