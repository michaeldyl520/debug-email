<?php
/**
 * Copyright © JLK. All rights reserved.
 * Created by JLK https://www.jiliuke.com.
 * User: michaeldyl520 michaeldyl520@gmail.com
 * Date: 2022/1/17
 */

namespace Jlk\Email\Api\Data;

/**
 * Interface EmailInterface
 * @package Jlk\Email\Api\Data
 */
interface EmailInterface
{
    /**
     *
     */
    const EMAIL_ID = 'email_id';
    /**
     *
     */
    const SUBJECT = 'subject';
    /**
     *
     */
    const TO = 'to';
    /**
     *
     */
    const FROM = 'from';
    /**
     *
     */
    const CC = 'cc';
    /**
     *
     */
    const BCC = 'bcc';
    /**
     *
     */
    const REPLY_TO = 'reply_to';
    /**
     *
     */
    const SENDER = 'sender';
    /**
     *
     */
    const BODY = 'body';
    /**
     *
     */
    const CREATED_AT = 'created_at';
    /**
     *
     */
    const UPDATED_AT = 'updated_at';

    /**
     * @return int|null
     */
    public function getEmailId();

    /**
     * @param int $emailId
     * @return \Jlk\Email\Api\Data\EmailInterface
     */
    public function setEmailId($emailId);

    /**
     * @return string
     */
    public function getSubject();

    /**
     * @param string $subject
     * @return \Jlk\Email\Api\Data\EmailInterface
     */
    public function setSubject($subject);

    /**
     * @return string
     */
    public function getTo();

    /**
     * @param string $to
     * @return \Jlk\Email\Api\Data\EmailInterface
     */
    public function setTo($to);

    /**
     * @return string
     */
    public function getFrom();

    /**
     * @param string $from
     * @return \Jlk\Email\Api\Data\EmailInterface
     */
    public function setFrom($from);

    /**
     * @return string
     */
    public function getCc();

    /**
     * @param string $cc
     * @return \Jlk\Email\Api\Data\EmailInterface
     */
    public function setCc($cc);

    /**
     * @return string
     */
    public function getBcc();

    /**
     * @param string $bcc
     * @return \Jlk\Email\Api\Data\EmailInterface
     */
    public function setBcc($bcc);

    /**
     * @return string
     */
    public function getReplyTo();

    /**
     * @param string $replyTo
     * @return \Jlk\Email\Api\Data\EmailInterface
     */
    public function setReplyTo($replyTo);

    /**
     * @return string
     */
    public function getSender();

    /**
     * @param string $sender
     * @return \Jlk\Email\Api\Data\EmailInterface
     */
    public function setSender($sender);

    /**
     * @return string
     */
    public function getBody();

    /**
     * @param string $body
     * @return \Jlk\Email\Api\Data\EmailInterface
     */
    public function setBody($body);

    /**
     * @return string
     */
    public function getCreatedAt();

    /**
     * @param string $createdAt
     * @return \Jlk\Email\Api\Data\EmailInterface
     */
    public function setCreatedAt($createdAt);

    /**
     * @return string
     */
    public function getUpdatedAt();

    /**
     * @param string $updatedAt
     * @return \Jlk\Email\Api\Data\EmailInterface
     */
    public function setUpdatedAt($updatedAt);
}
