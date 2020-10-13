<?php

namespace Redbastie\Swift\Components;

class ButtonGroupComponent extends BaseComponent
{
    protected $content;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }
}
