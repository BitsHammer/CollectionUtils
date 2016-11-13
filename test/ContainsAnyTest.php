<?php

/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 29/10/2016
 * Time: 21:57
 */

use PHPUnit\Framework\TestCase;
use com\bitshammer\collection\utils\CollectionUtils;

class ContainsAnyTest extends TestCase
{

    public function testContains(){
        $arr = ['A', 'B', 'C'];
        $arr2 = ['1', 'B', '2'];
        $predicate = function ($item, $value){
            return $item == $value;
        };
        $this->assertTrue(CollectionUtils::containsAny($arr, $arr2, $predicate));

    }

    public function testNotContains(){
        $arr = ['A', 'B', 'C'];
        $arr2 = ['1', 'D', '2'];
        $predicate = function ($item, $value){
            return $item == $value;
        };
        $this->assertFalse(CollectionUtils::containsAny($arr, $arr2, $predicate));

    }

}