<?php

/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 29/10/2016
 * Time: 21:57
 */

use PHPUnit\Framework\TestCase;
use com\bitshammer\collection\utils\CollectionUtils;

class IntersectionTest extends TestCase
{

    public function testIntersection(){
        $arr = ['A', 'B', 'C'];
        $arr2 = ['1', 'B', '2'];
        $predicate = function ($item, $value){
            return $item == $value;
        };
        $intersection = CollectionUtils::intersection($arr, $arr2, $predicate);
        $this->assertEquals($intersection, ['B']);

    }

}