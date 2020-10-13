<?php

namespace Redbastie\Swift\Components;

use Redbastie\Swift\Traits\ModelUtilities;

class InputComponent extends BaseComponent
{
    use ModelUtilities;

    protected $name;
    protected $label;
    protected $help;

    public function __construct($name)
    {
        parent::__construct();

        $this->name = $name;
        $this->attr('type', 'text');
    }

    public function type($type)
    {
        return $this->attr('type', $type);
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

    public function placeholder($placeholder)
    {
        return $this->attr('placeholder', $placeholder);
    }

    public function sm()
    {
        return $this->class('form-control-sm');
    }

    public function lg()
    {
        return $this->class('form-control-lg');
    }

    public function disabled($disabled = true)
    {
        return $disabled ? $this->attr('disabled', '') : $this;
    }

    public function readonly($readonly = true)
    {
        return $readonly ? $this->attr('readonly', '') : $this;
    }

    public function keydown($key, $action)
    {
        $this->class('cursor-pointer');
        $this->attr('wire:keydown.' . $key, $action);

        return $this;
    }
}
