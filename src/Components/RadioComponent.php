<?php

namespace Redbastie\Swift\Components;

use Illuminate\Support\Arr;
use Redbastie\Swift\Traits\ModelUtilities;

class RadioComponent extends BaseComponent
{
    use ModelUtilities;

    protected $name;
    protected $options = [];
    protected $label;
    protected $help;
    protected $inline;

    public function __construct($name)
    {
        parent::__construct();

        $this->name = $name;
    }

    public function options($options)
    {
        $this->options = Arr::isAssoc($options) ? $options : array_combine($options, $options);

        return $this;
    }

    public function label(...$content)
    {
        $this->label = implode(PHP_EOL, func_get_args());

        return $this;
    }

    public function help(...$content)
    {
        $this->help = implode(PHP_EOL, func_get_args());

        return $this;
    }

    public function inline()
    {
        $this->inline = true;

        return $this;
    }

    public function disabled($disabled = true)
    {
        return $disabled ? $this->attr('disabled', '') : $this;
    }
}
