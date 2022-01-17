<?php
/**
 * Copyright © JLK. All rights reserved.
 * Created by JLK https://www.jiliuke.com.
 * User: michaeldyl520 michaeldyl520@gmail.com
 * Date: 2022/1/17
 */

namespace Jlk\Email\Model;
use Jlk\Email\Api\Data;

class EmailRepository implements \Jlk\Email\Api\EmailRepositoryInterface
{

    public function save(Data\EmailInterface $page)
    {
        // TODO: Implement save() method.
    }

    public function getById($emailId)
    {
        // TODO: Implement getById() method.
    }

    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        // TODO: Implement getList() method.
    }

    public function delete(Data\EmailInterface $page)
    {
        // TODO: Implement delete() method.
    }

    public function deleteById($emailId)
    {
        // TODO: Implement deleteById() method.
    }
}