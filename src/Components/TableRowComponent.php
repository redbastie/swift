<?php

namespace Redbastie\Swift\Components;

use Redbastie\Swift\Traits\TableUtilities;

class TableRowComponent extends BaseComponent
{
    use TableUtilities;

    protected $content;

    public function __construct($content)
    {
        parent::__construct();

        $this->content = $content;
    }
}
