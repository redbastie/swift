<?php

namespace Redbastie\Swift\Components;

class ImageComponent extends BaseComponent
{
    public function __construct($src)
    {
        parent::__construct();

        $this->attr('src', $src);
    }

    public function alt($alt)
    {
        return $this->attr('alt', $alt);
    }

    public function fluid()
    {
        return $this->class('img-fluid');
    }

    public function thumbnail()
    {
        return $this->class('img-thumbnail');
    }
}
