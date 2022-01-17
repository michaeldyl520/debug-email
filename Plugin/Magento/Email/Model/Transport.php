<?php
/**
 * Copyright © JLK. All rights reserved.
 * Created by JLK https://www.jiliuke.com.
 * User: michaeldyl520 michaeldyl520@gmail.com
 * Date: 2022/1/17
 */

namespace Jlk\Email\Plugin\Magento\Email\Model;

class Transport
{
    protected \Jlk\Email\Helper\Email $emailHelper;

    public function __construct(
        \Jlk\Email\Helper\Email $emailHelper
    )
    {
        $this->emailHelper = $emailHelper;
    }

    public function aroundSendMessage($subject, \Closure $proceed)
    {
        if($this->emailHelper->enableDebugEmail()){
            return true;
        }
        return $proceed();
    }
}