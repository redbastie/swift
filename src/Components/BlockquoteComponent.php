<?php

namespace Redbastie\Swift\Components;

class BlockquoteComponent extends BaseComponent
{
    protected $content;
    protected $footer;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }

    public function footer(...$content)
    {
        $this->footer = implode(PHP_EOL, func_get_args());

        return $this;
    }
}
