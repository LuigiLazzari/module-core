<?php

namespace Genesis\Core\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\View\Page\Config;
use Magento\Customer\Model\Session;

class AddBodyClass implements ObserverInterface
{
    protected $config;
    protected $customerSession;

    public function __construct(
        Config $config,
        Session $customerSession
    ){
        $this->config = $config;
        $this->customerSession = $customerSession;
    }

    public function execute(Observer $observer){
        $isLoggedIn = $this->customerSession->isLoggedIn();
        if ($isLoggedIn) {
            $this->config->addBodyClass('logged-in');
        }
    }
}