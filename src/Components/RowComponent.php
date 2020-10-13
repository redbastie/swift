<?php

namespace Redbastie\Swift\Components;

class RowComponent extends BaseComponent
{
    protected $content;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }

    public function noGutters()
    {
        return $this->class('no-gutters');
    }
}
