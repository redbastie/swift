<?php

namespace Redbastie\Swift\Components;

class EachComponent
{
    public $items;
    public $callback;
    public $empty;

    public function __construct($items, $callback)
    {
        $this->items = $items;
        $this->callback = $callback;
    }

    public function empty(...$content)
    {
        $this->empty = implode(PHP_EOL, func_get_args());

        return $this;
    }

    public function __toString()
    {
        if (count($this->items) == 0) {
            return (string)$this->empty;
        }

        $string = '';
        $callback = $this->callback;

        foreach ($this->items as $key => $item) {
            $string .= $callback($item, $key);
        }

        return $string;
    }
}
