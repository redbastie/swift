<?php

namespace Redbastie\Swift\Components;

use Redbastie\Swift\Traits\ModelUtilities;

class CheckboxComponent extends BaseComponent
{
    use ModelUtilities;

    protected $name;
    protected $label;
    protected $checkboxLabel;
    protected $help;
    protected $type = 'checkbox';
    protected $inline;

    public function __construct($name)
    {
        parent::__construct();

        $this->name = $name;
    }

    public function label(...$content)
    {
        $this->label = implode(PHP_EOL, func_get_args());

        return $this;
    }

    public function checkboxLabel(...$content)
    {
        $this->checkboxLabel = implode(PHP_EOL, func_get_args());

        return $this;
    }

    public function help(...$content)
    {
        $this->help = implode(PHP_EOL, func_get_args());

        return $this;
    }

    public function switch()
    {
        $this->type = 'switch';

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
