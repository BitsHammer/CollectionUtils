<?php

/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 29/10/2016
 * Time: 21:57
 */

use PHPUnit\Framework\TestCase;
use com\bitshammer\collection\utils\CollectionUtils;

class ContainsAllTest extends TestCase
{

    public function testContainsAll(){
        $arr = ['A', 'B', 'C'];
        $arr2 = ['A', 'B', 'C', 'D'];
        $predicate = function ($item, $value){
            return $item == $value;
        };
        $this->assertTrue(CollectionUtils::containsAll($arr, $arr2, $predicate));

    }

    public function testNotContainsAll(){
        $arr = ['A', 'B', 'C'];
        $arr2 = ['1', 'D', '2'];
        $predicate = function ($item, $value){
            return $item == $value;
        };
        $this->assertFalse(CollectionUtils::containsAll($arr, $arr2, $predicate));

    }

}