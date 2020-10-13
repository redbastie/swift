<?php

namespace Redbastie\Swift\Components;

class PreComponent extends BaseComponent
{
    protected $content;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }
}
