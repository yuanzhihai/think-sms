<?php
declare(strict_types=1);

use Overtrue\EasySms\EasySms;
use Overtrue\EasySms\Exceptions\NoGatewayAvailableException;
use Overtrue\EasySms\Exceptions\InvalidArgumentException;

if (!function_exists('sms')) {
    /**
     * 发送短信
     * @return array
     * @throws InvalidArgumentException
     * @throws NoGatewayAvailableException
     */
    function sms()
    {
        $arguments = func_get_args();
        /** @var EasySms $sms */
        $sms = app('Easysms');
        if (empty($arguments)) {
            return $sms;
        }
        return $sms->send($arguments[0], $arguments[1],$arguments[2]);
    }
}
