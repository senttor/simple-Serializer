<?php
/**
 * Created by PhpStorm.
 * User: morakot
 * Date: 24.02.19
 * Time: 15:48
 */

namespace App;


class Person implements PersonInt
{
private $name;
private $lastname;
private $age;

public function __construct( $age)
{
    $this->age = $age;
}

public function getName()
{
    $arr['name'] = $this->name;
    $arr['lastname'] = $this->lastname;
    return $arr;
}

public function setName($name, $lastname)
{
    $this->lastName = $lastname;
    $this->name = $name;
}


}