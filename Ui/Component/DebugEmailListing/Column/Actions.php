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
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                // here we can also use the data from $item to configure some parameters of an action URL
                $item[$this->getData('name')] = [
                    'preview' => [
                        'label' => __('Preview')
                    ],
                    'remove' => [
                        'href' => '/resend',
                        'label' => __('Resend')
                    ],
                    'duplicate' => [
                        'href' => '/delete',
                        'label' => __('Delete'),
                        'isAjax' => true,
                        'confirm' => [
                            'title' => __("Delete Email Log"),
                            'message' => __("Are you sure?")
                        ]
                    ],
                ];
            }
        }

        return $dataSource;
    }
}
