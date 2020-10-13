<?php

namespace Redbastie\Swift\Traits;

trait ClickUtilities
{
    private function clickHandler($attr, $action, ...$params)
    {
        $args = array_slice(func_get_args(), 2);
        $value = $action;

        if ($args) {
            $wireParams = array_map(function ($arg) {
                return "'$arg'";
            }, $args);

            $value .= '(' . implode(', ', $wireParams) . ')';
        }

        $this->attr($attr, $value);
        $this->class('cursor-pointer');

        return $this;
    }

    public function click($action, ...$params)
    {
        return $this->clickHandler('wire:click', $action, ...$params);
    }

    public function clickPrevent($action, ...$params)
    {
        return $this->clickHandler('wire:click.prevent', $action, ...$params);
    }

    public function clickStop($action, ...$params)
    {
        return $this->clickHandler('wire:click.stop', $action, ...$params);
    }

    public function clickSelf($action, ...$params)
    {
        return $this->clickHandler('wire:click.self', $action, ...$params);
    }

    public function confirm($message = null)
    {
        $message = $message ?? trans('swift::swift.default_confirm_message');

        return $this->attr('onclick', "confirm('$message') || event.stopImmediatePropagation()");
    }
}
