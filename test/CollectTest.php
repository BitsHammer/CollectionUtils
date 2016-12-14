<?php

/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 29/10/2016
 * Time: 21:57
 */

use com\bitshammer\collection\utils\CollectionUtils;
use PHPUnit\Framework\TestCase;

class CollectTest extends TestCase
{

    public function testCollect()
    {
        $arr = [1, 2, 3, 4];
        $function = function ($item) {
            return $item * 2;
        };
        $transformed = CollectionUtils::collect($arr, $function);
        $this->assertEquals($transformed, [2, 4, 6, 8]);

    }

}