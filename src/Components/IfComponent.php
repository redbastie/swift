<?php

namespace Redbastie\Swift\Components;

use Closure;

class IfComponent
{
    public $conditions = [];

    public function __construct($condition, $callback)
    {
        $this->conditions[] = [$condition, $callback];
    }

    public function elseif($condition, $callback)
    {
        $this->conditions[] = [$condition, $callback];

        return $this;
    }

    public function else($callback)
    {
        $this->conditions[] = [true, $callback];

        return $this;
    }

    public function __toString()
    {
        foreach ($this->conditions as $condition) {
            if ($condition[0]) {
                $callback = $condition[1];

                return (string)$callback();
            }
        }

        return '';
    }
}
