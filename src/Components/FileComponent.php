<?php

namespace Redbastie\Swift\Components;

use Redbastie\Swift\Traits\ModelUtilities;

class FileComponent extends BaseComponent
{
    use ModelUtilities;

    protected $name;
    protected $label;
    protected $placeholder;
    protected $help;

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

    public function placeholder(...$content)
    {
        $this->placeholder = implode(PHP_EOL, func_get_args());

        return $this;
    }

    public function help(...$content)
    {
        $this->help = implode(PHP_EOL, func_get_args());

        return $this;
    }

    public function multiple()
    {
        return $this->attr('multiple', '');
    }
}
