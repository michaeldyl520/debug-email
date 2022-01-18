<?php
/**
 * Copyright © JLK. All rights reserved.
 * Created by JLK https://www.jiliuke.com.
 * User: michaeldyl520 michaeldyl520@gmail.com
 * Date: 2022/1/17
 */

namespace Jlk\Email\Model;

use Jlk\Email\Api\Data\DebugEmailInterface;
/**
 * Class DebugEmail
 */
class DebugEmail extends \Magento\Framework\Model\AbstractModel implements
    \Jlk\Email\Api\Data\DebugEmailInterface,
    \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'jlk_debug_email';

    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(\Jlk\Email\Model\ResourceModel\DebugEmail::class);
    }

    /**
     * @inheritDoc
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * @return int|mixed|null
     */
    public function getEmailId()
    {
        return $this->getDataByKey(self::EMAIL_ID);
    }

    /**
     * @param int $emailId
     * @return $this|DebugEmailInterface
     */
    public function setEmailId($emailId)
    {
        $this->setData(self::EMAIL_ID, $emailId);
        return $this;
    }

    /**
     * @return mixed|string|null
     */
    public function getSubject()
    {
        return $this->getDataByKey(self::SUBJECT);
    }

    /**
     * @param string $subject
     * @return $this|DebugEmailInterface
     */
    public function setSubject($subject)
    {
        $this->setData(self::SUBJECT, $subject);
        return $this;
    }

    /**
     * @return mixed|string|null
     */
    public function getTo()
    {
        return $this->getDataByKey(self::TO);
    }

    /**
     * @param string $to
     * @return $this|DebugEmailInterface
     */
    public function setTo($to)
    {
        $this->setData(self::TO, $to);
        return $this;
    }

    /**
     * @return mixed|string|null
     */
    public function getFrom()
    {
        return $this->getDataByKey(self::FROM);
    }

    /**
     * @param string $from
     * @return $this|DebugEmailInterface
     */
    public function setFrom($from)
    {
        $this->setData(self::FROM, $from);
        return $this;
    }

    /**
     * @return mixed|string|null
     */
    public function getCc()
    {
        return $this->getDataByKey(self::CC);
    }

    /**
     * @param string $cc
     * @return $this|DebugEmailInterface
     */
    public function setCc($cc)
    {
        $this->setData(self::CC, $cc);
        return $this;
    }

    /**
     * @return mixed|string|null
     */
    public function getBcc()
    {
        return $this->getDataByKey(self::BCC);
    }

    /**
     * @param string $bcc
     * @return $this|DebugEmailInterface
     */
    public function setBcc($bcc)
    {
        $this->setData(self::BCC, $bcc);
        return $this;
    }

    /**
     * @return mixed|string|null
     */
    public function getReplyTo()
    {
        return $this->getDataByKey(self::REPLY_TO);
    }

    /**
     * @param string $replyTo
     * @return $this|DebugEmailInterface
     */
    public function setReplyTo($replyTo)
    {
        $this->setData(self::REPLY_TO, $replyTo);
        return $this;
    }

    /**
     * @return mixed|string|null
     */
    public function getSender()
    {
        return $this->getDataByKey(self::SENDER);
    }

    /**
     * @param string $sender
     * @return $this|DebugEmailInterface
     */
    public function setSender($sender)
    {
        $this->setData(self::SENDER, $sender);
        return $this;
    }

    /**
     * @return mixed|string|null
     */
    public function getBody()
    {
        return $this->getDataByKey(self::BODY);
    }

    /**
     * @param string $body
     * @return $this|DebugEmailInterface
     */
    public function setBody($body)
    {
        $this->setData(self::BODY, $body);
        return $this;
    }

    /**
     * @return mixed|string|null
     */
    public function getCreatedAt()
    {
        return $this->getDataByKey(self::CREATED_AT);
    }

    /**
     * @param string $createdAt
     * @return $this|DebugEmailInterface
     */
    public function setCreatedAt($createdAt)
    {
        $this->setData(self::CREATED_AT, $createdAt);
        return $this;
    }

    /**
     * @return mixed|string|null
     */
    public function getUpdatedAt()
    {
        return $this->getDataByKey(self::UPDATED_AT);
    }

    /**
     * @param string $updatedAt
     * @return $this|DebugEmailInterface
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->setData(self::UPDATED_AT, $updatedAt);
        return $this;
    }
}
