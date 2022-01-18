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
    protected \Jlk\Email\Model\DebugEmailFactory $debugEmailFactory;
    protected \Jlk\Email\Model\DebugEmailRepository $debugEmailRepository;

    public function __construct(
        \Jlk\Email\Helper\Email $emailHelper,
        \Jlk\Email\Model\DebugEmailFactory $debugEmailFactory,
        \Jlk\Email\Model\DebugEmailRepository $debugEmailRepository
    ) {
        $this->emailHelper = $emailHelper;
        $this->debugEmailFactory = $debugEmailFactory;
        $this->debugEmailRepository = $debugEmailRepository;
    }

    /**
     * @param \Magento\Email\Model\Transport $subject
     * @param \Closure $proceed
     * @return bool|mixed
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function aroundSendMessage($subject, \Closure $proceed)
    {
        if ($this->emailHelper->enableDebugEmail()) {
            /** @var \Jlk\Email\Model\DebugEmail $debugEmailObj */
            $debugEmailObj = $this->debugEmailFactory->create();
            /** @var \Magento\Framework\Mail\EmailMessage $message */
            $message = $subject->getMessage();
            $to = $this->emailHelper->getNameEmailString($message->getTo());
            $from = $this->emailHelper->getNameEmailString($message->getFrom());
            $cc = $this->emailHelper->getNameEmailString($message->getCc());
            $bcc = $this->emailHelper->getNameEmailString($message->getBcc());
            $replyTo = $this->emailHelper->getNameEmailString($message->getReplyTo());
            $sender = $message->getSender() ? "{$message->getSender()->getName()} {$message->getSender()->getEmail()}" : "";
            $body = isset($message->getBody()->getParts()[0]) ? $message->getBody()->getParts()[0]->getRawContent() : "";
            $debugEmailObj
                ->setSubject($message->getSubject())
                ->setTo($to)
                ->setFrom($from)
                ->setCc($cc)
                ->setBcc($bcc)
                ->setReplyTo($replyTo)
                ->setSender($sender)
                ->setBody($body);
            $this->debugEmailRepository->save($debugEmailObj);
            return true;
        }
        return $proceed();
    }
}
