<?php

namespace Redbastie\Swift\Components;

class LivewireComponent extends BaseComponent
{
    protected $name;
    protected $data;

    public function __construct($name, $data)
    {
        parent::__construct();

        $this->name = $name;
        $this->data = $data;
    }
}
