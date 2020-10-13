<?php

namespace Redbastie\Swift\Traits;

trait TableUtilities
{
    public function active()
    {
        return $this->class('table-active');
    }

    public function primary()
    {
        return $this->class('table-primary');
    }

    public function secondary()
    {
        return $this->class('table-secondary');
    }

    public function success()
    {
        return $this->class('table-success');
    }

    public function info()
    {
        return $this->class('table-info');
    }

    public function danger()
    {
        return $this->class('table-danger');
    }

    public function warning()
    {
        return $this->class('table-warning');
    }

    public function light()
    {
        return $this->class('table-light');
    }

    public function dark()
    {
        return $this->class('table-dark');
    }
}
