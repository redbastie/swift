<?php

namespace Redbastie\Swift\Components;

class ListGroupItemComponent extends BaseComponent
{
    protected $content;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }

    public function primary()
    {
        return $this->class('list-group-item-primary');
    }

    public function secondary()
    {
        return $this->class('list-group-item-secondary');
    }

    public function success()
    {
        return $this->class('list-group-item-success');
    }

    public function info()
    {
        return $this->class('list-group-item-info');
    }

    public function danger()
    {
        return $this->class('list-group-item-danger');
    }

    public function warning()
    {
        return $this->class('list-group-item-warning');
    }

    public function light()
    {
        return $this->class('list-group-item-light');
    }

    public function dark()
    {
        return $this->class('list-group-item-dark');
    }

    public function action()
    {
        return $this->class('list-group-item-action');
    }

    public function active($active = true)
    {
        return $active ? $this->class('active') : $this;
    }

    public function disabled($disabled = true)
    {
        return $disabled ? $this->class('disabled') : $this;
    }
}
