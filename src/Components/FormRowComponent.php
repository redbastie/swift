<?php

namespace Redbastie\Swift\Components;

class FormRowComponent extends BaseComponent
{
    protected $content;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }
}
