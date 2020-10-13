<?php

namespace Redbastie\Swift\Components;

class CodeComponent extends BaseComponent
{
    protected $content;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }
}
