<?php
/**
 * Copyright © JLK. All rights reserved.
 * Created by JLK https://www.jiliuke.com.
 * User: michaeldyl520 michaeldyl520@gmail.com
 * Date: 2022/1/17
 */

namespace Jlk\Email\Api;

use Jlk\Email\Api\Data\DebugEmailInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface DebugEmailRepositoryInterface
 *
 * @api
 */
interface DebugEmailRepositoryInterface
{
    /**
     * Create or update a DebugEmail.
     *
     * @param DebugEmailInterface $page
     * @return DebugEmailInterface
     */
    public function save(DebugEmailInterface $page);

    /**
     * Get a DebugEmail by Id
     *
     * @param int $id
     * @return DebugEmailInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If DebugEmail with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($id);

    /**
     * Retrieve DebugEmails which match a specified criteria.
     *
     * @param SearchCriteriaInterface $criteria
     */
    public function getList(SearchCriteriaInterface $criteria);

    /**
     * Delete a DebugEmail
     *
     * @param DebugEmailInterface $page
     * @return DebugEmailInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If DebugEmail with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(DebugEmailInterface $page);

    /**
     * Delete a DebugEmail by Id
     *
     * @param int $id
     * @return DebugEmailInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If customer with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($id);
}
