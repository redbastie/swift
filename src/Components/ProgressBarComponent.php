<?php

namespace Redbastie\Swift\Components;

class ProgressBarComponent extends BaseComponent
{
    protected $percent;
    protected $label;

    public function __construct($percent)
    {
        parent::__construct();

        $this->percent = $percent;
    }

    public function label($label)
    {
        $this->label = $label;

        return $this;
    }

    public function striped()
    {
        return $this->class('progress-bar-striped');
    }

    public function animated()
    {
        return $this->class('progress-bar-animated');
    }
}
