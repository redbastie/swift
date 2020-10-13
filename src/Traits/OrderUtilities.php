<?php

namespace Redbastie\Swift\Traits;

trait OrderUtilities
{
    public function order($order)
    {
        return $this->class('order-' . $order);
    }

    public function orderSm($orderSm)
    {
        return $this->class('order-sm-' . $orderSm);
    }

    public function orderMd($orderMd)
    {
        return $this->class('order-md-' . $orderMd);
    }

    public function orderLg($orderLg)
    {
        return $this->class('order-lg-' . $orderLg);
    }

    public function orderXl($orderXl)
    {
        return $this->class('order-xl-' . $orderXl);
    }
}
