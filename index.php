<?php

declare(strict_types=1);

require_once("vendor/autoload.php");

use Farm\Classes\Farm;
use Farm\Classes\Cow;
use Farm\Classes\Chicken;

$farm = new Farm();


$farm->addAnimalToTable(new \Farm\Classes\Cow());
$farm->addAnimalToTable(new \Farm\Classes\Chicken());


for ($i = 0; $i <= 7; $i++) {
    $farm->upDay();
}

$farm->getSumProducts();

