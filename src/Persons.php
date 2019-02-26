<?php
/**
 * Created by PhpStorm.
 * User: morakot
 * Date: 26.02.19
 * Time: 8:23
 */

namespace App;


 abstract  class Persons implements PersonInterface
{
     public function getName(){
         echo "return Name";
     }

     public function setName($name, $lastname){

         echo "set Name{$name} and Lasname{$lastname}";
     }

}