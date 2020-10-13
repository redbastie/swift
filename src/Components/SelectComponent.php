<?php

namespace Redbastie\Swift\Components;

use Illuminate\Support\Arr;
use Redbastie\Swift\Traits\ModelUtilities;

class SelectComponent extends BaseComponent
{
    use ModelUtilities;

    protected $name;
    protected $options = [];
    protected $label;
    protected $placeholder;
    protected $help;

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

    public function placeholder($placeholder)
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    public function help(...$content)
    {
        $this->help = implode(PHP_EOL, func_get_args());

        return $this;
    }

    public function sm()
    {
        return $this->class('custom-select-sm');
    }

    public function lg()
    {
        return $this->class('custom-select-lg');
    }

    public function disabled($disabled = true)
    {
        return $disabled ? $this->attr('disabled', '') : $this;
    }
}
