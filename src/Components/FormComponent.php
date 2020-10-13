<?php

namespace Redbastie\Swift\Components;

class FormComponent extends BaseComponent
{
    protected $content;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }

    public function inline()
    {
        return $this->class('form-inline');
    }

    public function submit($submit)
    {
        return $this->attr('wire:submit', $submit);
    }

    public function submitPrevent($submitPrevent)
    {
        return $this->attr('wire:submit.prevent', $submitPrevent);
    }

    public function submitSelf($submitSelf)
    {
        return $this->attr('wire:submit.self', $submitSelf);
    }

    public function submitStop($submitStop)
    {
        return $this->attr('wire:submit.stop', $submitStop);
    }
}
