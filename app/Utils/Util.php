<?php

namespace App\Utils;

use App\Constants;
use DB;

/**
 * 共通処理
 *
 */
class Util
{
    /**
     * トリムする（array_walk関数から呼び出し）
     *
     * @param string|null $value
     * @return void
     */
    public static function trimValue(?string &$value): void
    {
        $value = trim($value);
        $value = strtr($value, array("\r\n" => "\n", "\r" => "\n",));
    }
}