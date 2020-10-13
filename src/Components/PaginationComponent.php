<?php

namespace Redbastie\Swift\Components;

class PaginationComponent extends BaseComponent
{
    protected $models;

    public function __construct($models)
    {
        parent::__construct();

        $this->models = $models;
    }
}
