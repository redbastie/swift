<?php

namespace Redbastie\Swift\Components;

class NavbarCollapseComponent extends BaseComponent
{
    protected $content;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }
}
