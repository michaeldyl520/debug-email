<?php
/**
 * Copyright © JLK. All rights reserved.
 * Created by JLK https://www.jiliuke.com.
 * User: michaeldyl520 michaeldyl520@gmail.com
 * Date: 2022/1/17
 */

namespace Jlk\Email\Api;
/**
 * jlk debug email CRUD interface.
 * @api
 */
interface EmailRepositoryInterface
{
    /**
     * Save debug email.
     *
     * @param \Jlk\Email\Api\Data\EmailInterface $page
     * @return \Jlk\Email\Api\Data\EmailInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(\Jlk\Email\Api\Data\EmailInterface $page);

    /**
     * Retrieve debug email.
     *
     * @param int $emailId
     * @return \Jlk\Email\Api\Data\EmailInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($emailId);

    /**
     * Retrieve emails matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Magento\Cms\Api\Data\PageSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);

    /**
     * Delete debug email.
     *
     * @param \Jlk\Email\Api\Data\EmailInterface $page
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(\Jlk\Email\Api\Data\EmailInterface $page);

    /**
     * Delete debug email by ID.
     *
     * @param int $emailId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($emailId);
}