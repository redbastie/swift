<?php

namespace Redbastie\Swift\Traits;

trait PollingUtilities
{
    public function poll($ms = null)
    {
        return $this->attr('wire:poll' . ($ms ? '.' . $ms . 'ms' : null), '');
    }

    public function pollAction($action, $ms = null)
    {
        return $this->attr('wire:poll' . ($ms ? '.' . $ms . 'ms' : null), $action);
    }
}
