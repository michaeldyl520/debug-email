<?php
/**
 * Copyright © JLK. All rights reserved.
 * Created by JLK https://www.jiliuke.com.
 * User: michaeldyl520 michaeldyl520@gmail.com
 * Date: 2022/1/18
 */

namespace Jlk\Email\Controller\Adminhtml\Features\Email;

class View extends \Jlk\Email\Controller\Adminhtml\Features\Email
{
    /**
     * access rights checking
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Jlk_email::features_email');
    }
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Jlk_email::features_email');
        $resultPage->addBreadcrumb(__('Debug Email'), __('View Email'));
        $resultPage->getConfig()->getTitle()->prepend(__('View Email'));
        return $resultPage;
    }
}
