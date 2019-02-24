<?php
/**
 * Created by PhpStorm.
 * User: morakot
 * Date: 24.02.19
 * Time: 16:04
 */

namespace App;


class JsonSerializer
{

    public function jsonSerializer (PersonInt $obj)
    {
        return serialize($obj);
    }

}