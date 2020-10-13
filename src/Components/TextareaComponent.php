<?php

namespace Redbastie\Swift\Components;

class TextareaComponent extends InputComponent
{
    public function rows($rows)
    {
        return $this->attr('rows', $rows);
    }
}
