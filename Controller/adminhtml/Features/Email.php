<?php
/**
 * Copyright © JLK. All rights reserved.
 * Created by JLK https://www.jiliuke.com.
 * User: michaeldyl520 michaeldyl520@gmail.com
 * Date: 2022/1/17
 */

namespace Jlk\Email\Controller\adminhtml\Features;

use Magento\Backend\App\Action\Context;

class Email extends \Magento\Backend\App\Action
{
    protected \Magento\Framework\View\Result\PageFactory $resultPageFactory;

    public function __construct(
        Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

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
