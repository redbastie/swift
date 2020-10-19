<?php

namespace Redbastie\Swift\Components;

class ButtonComponent extends BaseComponent
{
    protected $content;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }

    public function submit()
    {
        return $this->attr('type', 'submit');
    }

    public function primary()
    {
        return $this->class('btn btn-primary');
    }

    public function secondary()
    {
        return $this->class('btn btn-secondary');
    }

    public function success()
    {
        return $this->class('btn btn-success');
    }

    public function info()
    {
        return $this->class('btn btn-info');
    }

    public function danger()
    {
        return $this->class('btn btn-danger');
    }

    public function warning()
    {
        return $this->class('btn btn-warning');
    }

    public function light()
    {
        return $this->class('btn btn-light');
    }

    public function dark()
    {
        return $this->class('btn btn-dark');
    }

    public function outlinePrimary()
    {
        return $this->class('btn btn-outline-primary');
    }

    public function outlineSecondary()
    {
        return $this->class('btn btn-outline-secondary');
    }

    public function outlineSuccess()
    {
        return $this->class('btn btn-outline-success');
    }

    public function outlineInfo()
    {
        return $this->class('btn btn-outline-info');
    }

    public function outlineDanger()
    {
        return $this->class('btn btn-outline-danger');
    }

    public function outlineWarning()
    {
        return $this->class('btn btn-outline-warning');
    }

    public function outlineLight()
    {
        return $this->class('btn btn-outline-light');
    }

    public function outlineDark()
    {
        return $this->class('btn btn-outline-dark');
    }

    public function link()
    {
        return $this->class('btn btn-link');
    }

    public function active($active = true)
    {
        return $active ? $this->class('active') : $this;
    }

    public function sm()
    {
        return $this->class('btn-sm');
    }

    public function lg()
    {
        return $this->class('btn-lg');
    }

    public function block()
    {
        return $this->class('btn-block');
    }

    public function disabled($disabled = true)
    {
        return $disabled ? $this->attr('disabled', '') : $this;
    }
}
