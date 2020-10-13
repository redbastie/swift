<?php

namespace Redbastie\Swift\Components;

class InputGroupComponent extends BaseComponent
{
    protected $content;
    protected $label;
    protected $prepend;
    protected $append;

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

    public function prepend(...$content)
    {
        $this->prepend = implode(PHP_EOL, func_get_args());

        return $this;
    }

    public function append(...$content)
    {
        $this->append = implode(PHP_EOL, func_get_args());

        return $this;
    }

    public function sm()
    {
        return $this->class('input-group-sm');
    }

    public function lg()
    {
        return $this->class('input-group-lg');
    }
}
