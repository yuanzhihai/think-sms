<?php
declare(strict_types=1);

namespace yzh52521\sms;

use Overtrue\EasySms\EasySms;
use think\Facade;

/**
 * SMS 门面
 * @mixin EasySms
 * @author yzh52521 <396751927@qq.com>
 */
class Sms extends Facade
{
    /**
     * 获取当前Facade对应类名
     * @access protected
     * @return string
     */
    protected static function getFacadeClass(): string
    {
        return EasySms::class;
    }
}