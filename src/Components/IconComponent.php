<?php

namespace Redbastie\Swift\Components;

class IconComponent extends BaseComponent
{
    protected $name;
    protected $style;

    public function __construct($name)
    {
        parent::__construct();

        $this->name = $name;
        $this->{config('swift.default_icon_style')}();
    }

    public function solid()
    {
        $this->style = 's';

        return $this;
    }

    public function regular()
    {
        $this->style = 'r';

        return $this;
    }

    public function light()
    {
        $this->style = 'l';

        return $this;
    }

    public function duotone()
    {
        $this->style = 'd';

        return $this;
    }

    public function brand()
    {
        $this->style = 'b';

        return $this;
    }

    public function fw()
    {
        return $this->class('fa-fw');
    }

    public function xs()
    {
        return $this->class('fa-xs');
    }

    public function sm()
    {
        return $this->class('fa-sm');
    }

    public function lg()
    {
        return $this->class('fa-lg');
    }

    public function x($x)
    {
        return $this->class('fa-' . $x . 'x');
    }

    public function spin()
    {
        return $this->class('fa-spin');
    }

    public function pulse()
    {
        return $this->class('fa-pulse');
    }
}
