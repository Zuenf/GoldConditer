<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'request' => [
            'enableCookieValidation' => true,
            'enableCsrfValidation' => true,
            'cookieValidationKey' => '61003372e957c43748ac3e77ae3f58bef276b03545a05c34391729ee3be8ee16a1',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
