<?php

namespace Genesis\Core\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    public function getConfigValue($configField, $store = null)
    {
        return $this->scopeConfig->getValue(
            $configField,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $store
        );
    }
}
