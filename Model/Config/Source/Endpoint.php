<?php

namespace MageMontreal\Mailgun\Model\Config\Source;

class Endpoint implements \Magento\Framework\Option\ArrayInterface
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'api.mailgun.net', 'label' => __('Mailgun API - Live')],
            ['value' => 'api.eu.mailgun.net', 'label' => __('Mailgun API - Live (EU)')],
            ['value' => 'bin.mailgun.net', 'label' => __('Mailgun Postbin - Debug')],
        ];
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'api.mailgun.net' => __('Mailgun API - Live'),
            'api.eu.mailgun.net' => __('Mailgun API - Live (EU)'),
            'bin.mailgun.net' => __('Mailgun Postbin - Debug'),
        ];
    }
}
