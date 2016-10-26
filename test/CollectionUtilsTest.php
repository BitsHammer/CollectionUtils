<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 25/10/2016
 * Time: 22:11
 */

namespace com\bitshammer\collection\utils;

class CollectionUtilsTest extends PHPUnit_Framework_TestCase
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
