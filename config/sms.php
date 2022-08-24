<?php
return [
    // HTTP 请求的超时时间（秒）
    'timeout' => 5.0,

    /*
    |--------------------------------------------------------------------------
    | Default Setting
    |--------------------------------------------------------------------------
    |
    | This option defines the default sms gateway that gets used when writing
    | messages to the sms. The name specified in this option should match
    | one of the gateways defined in the "gateways" configuration array.
    |
    */
    'default' => [
        // 网关调用策略，默认：顺序调用
        'strategy' => \Overtrue\EasySms\Strategies\OrderStrategy::class,

        /*
        |--------------------------------------------------------------------------
        | Default Gateways
        |--------------------------------------------------------------------------
        |
        | This option defines the default sms gateway that gets used when writing
        | messages to the sms. The name specified in this option should match
        | one of the gateways defined in the "gateways" configuration array.
        |
        */
        'gateways' => [

        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Log Gateways
    |--------------------------------------------------------------------------
    |
    | Here you may configure the sms gateways for your application.  This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Drivers: "aliyun", "alidayu", "yunpian", "submail",
    |                    "errorlog", "luosimao", "yuntongxun", "huyi"
    |                    "juhe", "sendcloud", "baidu", "huaxin", "chuanglan"
    |                    "rongcloud", "tianyiwuxian", "twilio", "qcloud", "avatardata"
    |
    */
    'gateways' => [
        //Doc
        // https://github.com/overtrue/easy-sms
    ],
];
