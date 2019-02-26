<?php
class JsonYamlSerialize
{

   public  static  function objToArray(\App\PersonInterface $obj)
    {
        foreach ($obj as $key => $value) {

            $res_arr[$key] = $value;
        }
        return $res_arr;
    }

    function  yamlSerilizer(\App\PersonInterface $obj)
    {
        $array_obj = JsonYamlSerialize::objToArray($obj);

        return yaml_emit($array_obj);
    }


    public function jsonSerializer (\App\PersonInterface $obj)
    {
        return json_encode($obj);
    }
}