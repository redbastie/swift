<?php

namespace Redbastie\Swift\Components;

class AlertComponent extends BaseComponent
{
    protected $content;
    protected $dismissable;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }

    public function dismissable()
    {
        $this->dismissable = true;

        return $this;
    }

    public function fade()
    {
        return $this->class('fade show');
    }

    public function primary()
    {
        return $this->class('alert-primary');
    }

    public function secondary()
    {
        return $this->class('alert-secondary');
    }

    public function success()
    {
        return $this->class('alert-success');
    }

    public function info()
    {
        return $this->class('alert-info');
    }

    public function danger()
    {
        return $this->class('alert-danger');
    }

    public function warning()
    {
        return $this->class('alert-warning');
    }

    public function light()
    {
        return $this->class('alert-light');
    }

    public function dark()
    {
        return $this->class('alert-dark');
    }
}
