<?php

namespace Redbastie\Swift\Components;

use Illuminate\Support\Str;
use Illuminate\View\ComponentAttributeBag;
use Redbastie\Swift\Traits\AlignUtilities;
use Redbastie\Swift\Traits\BackgroundUtilities;
use Redbastie\Swift\Traits\BorderUtilities;
use Redbastie\Swift\Traits\ClickUtilities;
use Redbastie\Swift\Traits\CollapseUtilities;
use Redbastie\Swift\Traits\DisplayUtilities;
use Redbastie\Swift\Traits\DropdownUtilities;
use Redbastie\Swift\Traits\FlexUtilities;
use Redbastie\Swift\Traits\FloatUtilities;
use Redbastie\Swift\Traits\JustifyUtilities;
use Redbastie\Swift\Traits\LoadingUtilities;
use Redbastie\Swift\Traits\MarginUtilities;
use Redbastie\Swift\Traits\OrderUtilities;
use Redbastie\Swift\Traits\PaddingUtilities;
use Redbastie\Swift\Traits\PollingUtilities;
use Redbastie\Swift\Traits\PositionUtilities;
use Redbastie\Swift\Traits\ShadowUtilities;
use Redbastie\Swift\Traits\SizingUtilities;
use Redbastie\Swift\Traits\TextUtilities;

class BaseComponent
{
    use AlignUtilities, BackgroundUtilities, BorderUtilities, ClickUtilities, CollapseUtilities,
        DisplayUtilities, DropdownUtilities, FlexUtilities, FloatUtilities, JustifyUtilities,
        LoadingUtilities, MarginUtilities, OrderUtilities, PaddingUtilities, PollingUtilities,
        PositionUtilities, ShadowUtilities, SizingUtilities, TextUtilities;

    protected $attributes;

    public function __construct()
    {
        $this->attributes = new ComponentAttributeBag;
    }

    public function attr($name, $value)
    {
        $this->attributes[$name] = $value;

        return $this;
    }

    public function class($class)
    {
        $this->attributes['class'] .= ' ' . $class;

        return $this;
    }

    public function id($id)
    {
        return $this->attr('id', $id);
    }

    public function title($title)
    {
        return $this->attr('title', $title);
    }

    public function __toString()
    {
        $view = Str::snake(Str::replaceLast('Component', '', class_basename($this)), '-');

        return view('swift::components.' . $view, get_object_vars($this))->render();
    }
}
