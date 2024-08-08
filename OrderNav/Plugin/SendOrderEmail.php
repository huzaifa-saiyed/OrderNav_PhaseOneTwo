<?php

namespace Kitchen365\OrderNav\Plugin;

use Magento\Sales\Model\Order\Email\Sender\OrderSender;

class SendOrderEmail
{
    public function aroundSend(
        OrderSender $subject,
        \Closure $proceed,
        $order,
        $forceSyncMode = false
    ) {

        // if (!$order->getNavOrderId()) {
        //     return false;
        // }
        if (!$order->getIsFromApi()) {
            return false;
        }

        return $proceed($order, $forceSyncMode);
    }
}
