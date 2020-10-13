<?php

namespace Redbastie\Swift\Components;

class LabelComponent extends BaseComponent
{
    protected $content;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }

    public function for($for)
    {
        return $this->attr('for', $for);
    }
}
