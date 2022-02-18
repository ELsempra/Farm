<?php

declare(strict_types=1);

namespace Farm\Classes;

use Farm\Classes\Abstracted\Animal;

class Chicken extends Animal
{

    function __construct()
    {
        parent::__construct();
        $this->animalName = "Курица";
        $this->productName = "штук яиц";
    }

    function produceProducts(): int
    {
        return $this->products += random_int(0, 1);
    }

}