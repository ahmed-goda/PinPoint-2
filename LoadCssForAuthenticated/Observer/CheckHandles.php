<?php

namespace Bytology\LoadCssForAuthenticated\Observer;

use Magento\Framework\Event\{Observer, ObserverInterface};

/**
 * Class CheckHandles
 * @package Bytology\LoadCssForAuthenticated\Observer
 * @author Frank Clark <mrfrankclark1@gmail.com>
 */
class CheckHandles implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        /**
         * Use xdebug to stop here to see if your handle has been added once blocks are generated.
         */
        $layout = $observer->getEvent()->getLayout();
        $handles = $layout->getUpdate()->getHandles();
        $stop = true;
    }
}