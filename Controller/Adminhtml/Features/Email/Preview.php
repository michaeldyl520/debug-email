<?php
/**
 * Copyright © JLK. All rights reserved.
 * Created by JLK https://www.jiliuke.com.
 * User: michaeldyl520 michaeldyl520@gmail.com
 * Date: 2022/1/19
 */

namespace Jlk\Email\Controller\Adminhtml\Features\Email;


use Magento\Backend\App\Action\Context;
use Magento\Framework\App\ResponseInterface;

class Preview extends \Jlk\Email\Controller\Adminhtml\Features\Email
{
    protected \Magento\Framework\Controller\Result\RawFactory $resultRawFactory;
    protected \Magento\Framework\View\LayoutFactory $layoutFactory;

    public function __construct(
        Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\Controller\Result\RawFactory $resultRawFactory,
        \Magento\Framework\View\LayoutFactory $layoutFactory
    )
    {
        parent::__construct($context, $resultPageFactory);
        $this->resultRawFactory = $resultRawFactory;
        $this->layoutFactory = $layoutFactory;
    }

    public function execute()
    {
        $content = $this->layoutFactory->create()
            ->createBlock(
                \Jlk\Email\Block\Adminhtml\DebugEmail\Preview::class
            );

        /** @var \Magento\Framework\Controller\Result\Raw $resultRaw */
        $resultRaw = $this->resultRawFactory->create();
        return $resultRaw->setContents($content->toHtml());
    }
}