<?php

namespace Redbastie\Swift\Components;

class TableComponent extends BaseComponent
{
    protected $content;
    protected $responsive;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }

    public function responsive()
    {
        $this->responsive = true;

        return $this;
    }

    public function dark()
    {
        return $this->class('table-dark');
    }

    public function striped()
    {
        return $this->class('table-striped');
    }

    public function bordered()
    {
        return $this->class('table-bordered');
    }

    public function borderless()
    {
        return $this->class('table-borderless');
    }

    public function hover()
    {
        return $this->class('table-hover');
    }

    public function sm()
    {
        return $this->class('table-sm');
    }
}
