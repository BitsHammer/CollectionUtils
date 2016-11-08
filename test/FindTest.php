<?php

/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 08/11/2016
 * Time: 19:39
 */
use PHPUnit\Framework\TestCase;
use com\bitshammer\collection\utils\CollectionUtils;
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 30/10/2016
 * Time: 12:02
 */
class FindTest extends TestCase
{
    public function testfind()
    {
        $array = [new Person('John', 1), new Person('Marie', 2)];
        $equals = function (Person $value, Person $find) {
            return $value->getId() === $find->getId();
        };
        self::assertNotNull(CollectionUtils::find($array, new Person('John', 1), $equals));
    }

    public function testNotFind()
    {
        $array = [new Person('John', 1), new Person('Marie', 2)];
        $equals = function (Person $value, Person $find) {
            return $value->getId() == $find->getId();
        };
        self::assertNull(CollectionUtils::find($array, new Person('John', 3), $equals));
    }
}

class Person
{

    private $name;
    private $id;

    /**
     * Person constructor.
     * @param $name
     * @param $id
     */
    public function __construct($name, $id)
    {
        $this->name = $name;
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}