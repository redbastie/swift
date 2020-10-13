<?php

namespace Redbastie\Swift\Components;

class CardComponent extends BaseComponent
{
    protected $header;
    protected $image;
    protected $body;
    protected $footer;

    public function header(...$content)
    {
        $this->header = implode(PHP_EOL, func_get_args());

        return $this;
    }

    public function image($image)
    {
        $this->image = $image;

        return $this;
    }

    public function body(...$content)
    {
        $this->body = implode(PHP_EOL, func_get_args());

        return $this;
    }

    public function footer(...$content)
    {
        $this->footer = implode(PHP_EOL, func_get_args());

        return $this;
    }
}
