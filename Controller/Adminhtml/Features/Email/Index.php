<?php
/**
 * Copyright © JLK. All rights reserved.
 * Created by JLK https://www.jiliuke.com.
 * User: michaeldyl520 michaeldyl520@gmail.com
 * Date: 2022/1/18
 */

namespace Jlk\Email\Controller\Adminhtml\Features\Email;

class Index extends \Jlk\Email\Controller\Adminhtml\Features\Email
{
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Jlk_Email::Jlk_email::features_email')
            ->addBreadcrumb(__('Features'), __('Features'))
            ->addBreadcrumb(__('Debug Email'), __('Debug Email'));
        $resultPage->getConfig()->getTitle()->prepend(__('Email'));
        return $resultPage;
    }
}
