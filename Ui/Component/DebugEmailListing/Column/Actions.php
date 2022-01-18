<?php
/**
 * Copyright © JLK. All rights reserved.
 * Created by JLK https://www.jiliuke.com.
 * User: michaeldyl520 michaeldyl520@gmail.com
 * Date: 2022/1/18
 */

namespace Jlk\Email\Ui\Component\DebugEmailListing\Column;

use Magento\Ui\Component\Listing\Columns\Column;

class Actions extends Column
{
    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        $dataSource = parent::prepareDataSource($dataSource);

        if (empty($dataSource['data']['items'])) {
            return $dataSource;
        }
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                // here we can also use the data from $item to configure some parameters of an action URL
                $item[$this->getData('name')] = [
                    'view' => [
                        'href' => $this->context->getUrl('jlk/features_email/view', ['id' => $item['email_id']]),
                        'label' => __('View'),
                        'actions' => [
                            [
                                'targetName' => '${ $.parentName}.show_debug_email_modal',
                                'actionName' => 'openModal'
                            ]
                        ],
                    ],
                    'delete' => [
                        'href' => $this->context->getUrl('jlk/features_email/delete', ['id' => $item['email_id']]),
                        'label' => __('Delete')
                    ],
                ];
            }
        }

        return $dataSource;
    }
}