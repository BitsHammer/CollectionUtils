<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 25/10/2016
 * Time: 22:11
 */

use PHPUnit\Framework\TestCase;
use com\bitshammer\collection\utils\CollectionUtils;

class AddAllTest extends TestCase
{
    public function testAddItem()
    {
        $to = ['A', 'B', 'C'];
        $from = ['D'];
        CollectionUtils::addAll($to, $from);
        $this->assertArrayHasKey(3, $to);
    }

    public function testAddEmpty()
    {
        $to = ['A', 'B', 'C'];
        $from = [];
        CollectionUtils::addAll($to, $from);
        $this->assertArrayNotHasKey(3, $to);
    }

}
