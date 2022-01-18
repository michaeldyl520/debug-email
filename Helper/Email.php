<?php
/**
 * Copyright © JLK. All rights reserved.
 * Created by JLK https://www.jiliuke.com.
 * User: michaeldyl520 michaeldyl520@gmail.com
 * Date: 2022/1/17
 */

namespace Jlk\Email\Helper;

class Email extends \Magento\Framework\App\Helper\AbstractHelper
{
    const XML_PATH_JLK_EMAIL_GENRERAL_DEBUG_EMAIL = "jlk_email/general/debug_email";

    public function enableDebugEmail($store = null)
    {
        return $this->scopeConfig->getValue(self::XML_PATH_JLK_EMAIL_GENRERAL_DEBUG_EMAIL, \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store);
    }

    public function getNameEmailString(array $data)
    {
        $dataArray = [];
        /** @var \Magento\Framework\Mail\Address $mailAddress */
        foreach ($data as $mailAddress) {
            array_push($dataArray, "{$mailAddress->getName()} {$mailAddress->getEmail()}");
        }
        return implode(',', $dataArray);
    }
}
