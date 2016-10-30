<?php

use PHPUnit\Framework\TestCase;
use com\bitshammer\collection\utils\CollectionUtils;
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 30/10/2016
 * Time: 12:02
 */
class DisjuctionTest extends TestCase
{
    public function testDisjunction(){
        $arr = ['A', 'B', 'C'];
        $arr2 = ['1', 'B', '2'];
        $predicate = function ($item, $value){
            return $item == $value;
        };
        $disjunction = CollectionUtils::disjunction($arr, $arr2, $predicate);
        $this->assertEquals($disjunction, ['A', 'C']);

    }
}