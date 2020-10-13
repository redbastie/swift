<?php

namespace Redbastie\Swift\Components;

class DivComponent extends BaseComponent
{
    protected $content;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }
}
