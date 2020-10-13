<?php

namespace Redbastie\Swift\Components;

class ColComponent extends BaseComponent
{
    protected $content;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }

    public function xs($xs = null)
    {
        return $this->class('col' . ($xs ? '-' . $xs : null));
    }

    public function auto()
    {
        return $this->class('col-auto');
    }

    public function sm($sm = null)
    {
        return $this->class('col-sm' . ($sm ? '-' . $sm : null));
    }

    public function smAuto()
    {
        return $this->class('col-sm-auto');
    }

    public function md($md = null)
    {
        return $this->class('col-md' . ($md ? '-' . $md : null));
    }

    public function mdAuto()
    {
        return $this->class('col-md-auto');
    }

    public function lg($lg = null)
    {
        return $this->class('col-lg' . ($lg ? '-' . $lg : null));
    }

    public function lgAuto()
    {
        return $this->class('col-lg-auto');
    }

    public function xl($xl = null)
    {
        return $this->class('col-xl' . ($xl ? '-' . $xl : null));
    }

    public function xlAuto()
    {
        return $this->class('col-xl-auto');
    }

    public function offset($offset)
    {
        return $this->class('offset-' . $offset);
    }

    public function offsetSm($offsetSm)
    {
        return $this->class('offset-sm-' . $offsetSm);
    }

    public function offsetMd($offsetMd)
    {
        return $this->class('offset-md-' . $offsetMd);
    }

    public function offsetLg($offsetLg)
    {
        return $this->class('offset-lg-' . $offsetLg);
    }

    public function offsetXl($offsetXl)
    {
        return $this->class('offset-xl-' . $offsetXl);
    }
}
