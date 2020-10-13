<?php

namespace Redbastie\Swift\Components;

class HeadingComponent extends BaseComponent
{
    protected $content;
    protected $size = 1;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }

    public function size($size)
    {
        $this->size = $size;

        return $this;
    }
}
