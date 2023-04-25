<?php
declare(strict_types=1);

namespace yzh52521\sms;

use Overtrue\EasySms\EasySms;

/**
 * 短信服务
 * @author yzh52521 <396751927@qq.com>
 */
class Service extends \think\Service
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Easysms', function () {
            return new EasySms($this->app->config->get('sms'));
        });
    }
}