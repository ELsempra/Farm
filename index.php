<?php

require_once("vendor/autoload.php");

 $farm = new \Farm\Classes\Farm();


 $farm->addAnimalToTable(new \Farm\Classes\Cow());
 $farm->addAnimalToTable(new \Farm\Classes\Chicken());


 for ($i = 0; $i<=7; $i++){
     $farm->upDay();
 }

 $farm->getSumProducts();

