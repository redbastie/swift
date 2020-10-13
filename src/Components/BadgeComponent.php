<?php

namespace Redbastie\Swift\Components;

class BadgeComponent extends BaseComponent
{
    protected $content;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }

    public function primary()
    {
        return $this->class('badge-primary');
    }

    public function secondary()
    {
        return $this->class('badge-secondary');
    }

    public function success()
    {
        return $this->class('badge-success');
    }

    public function info()
    {
        return $this->class('badge-info');
    }

    public function danger()
    {
        return $this->class('badge-danger');
    }

    public function warning()
    {
        return $this->class('badge-warning');
    }

    public function light()
    {
        return $this->class('badge-light');
    }

    public function dark()
    {
        return $this->class('badge-dark');
    }

    public function pill()
    {
        return $this->class('badge-pill');
    }
}
