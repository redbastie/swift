<?php

namespace Redbastie\Swift\Components;

class ModalComponent extends BaseComponent
{
    protected $id;
    protected $heading;
    protected $body;
    protected $footer;
    protected $fade;

    public function __construct($id)
    {
        parent::__construct();

        $this->id = $id;
    }

    public function heading(...$content)
    {
        $this->heading = implode(PHP_EOL, func_get_args());

        return $this;
    }

    public function body(...$content)
    {
        $this->body = implode(PHP_EOL, func_get_args());

        return $this;
    }

    public function footer(...$content)
    {
        $this->footer = implode(PHP_EOL, func_get_args());

        return $this;
    }

    public function fade()
    {
        $this->fade = true;

        return $this;
    }

    public function sm()
    {
        return $this->class('modal-sm');
    }

    public function lg()
    {
        return $this->class('modal-lg');
    }

    public function xl()
    {
        return $this->class('modal-xl');
    }
}
