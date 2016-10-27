<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 25/10/2016
 * Time: 22:11
 */

use PHPUnit\Framework\TestCase;
use com\bitshammer\collection\utils\CollectionUtils;

class CollectionUtilsTest extends TestCase
{
    public function testContainsTrue()
    {
        $arr = ['A', 'B', 'C'];
        $predicate = function ($item, $value){
            return $item == $value;
        };
        $this->assertTrue(CollectionUtils::contains($arr, 'A', $predicate));


    }

}
