<?php

namespace Redbastie\Swift\Components;

class IframeComponent extends BaseComponent
{
    protected $src;

    public function __construct($src)
    {
        parent::__construct();

        $this->src = $src;
    }

    public function width($width)
    {
        return $this->attr('width', $width);
    }

    public function height($height)
    {
        return $this->attr('height', $height);
    }
}
