<?php

namespace Redbastie\Swift\Components;

class FormGroupComponent extends BaseComponent
{
    protected $content;
    protected $label;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }

    public function label(...$content)
    {
        $this->label = implode(PHP_EOL, func_get_args());

        return $this;
    }
}
