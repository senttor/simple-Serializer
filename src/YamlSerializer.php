<?php
/**
 * Created by PhpStorm.
 * User: morakot
 * Date: 24.02.19
 * Time: 17:16
 */

namespace App;


class YamlSerializer
{

    public static function objToArray($obj)
    {
        foreach ($obj as $key => $value) {

            $res_arr[$key] = $value;
        }
        return $res_arr;
    }

    public function yamlSerilizer($obj)
    {
        $array_obj = YamlSerializer::objToArray($obj);

        return yaml_emit($array_obj);
    }
}