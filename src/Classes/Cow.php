<?php

declare(strict_types=1);

namespace Farm\Classes;

use Farm\Classes\Abstracted\Animal;

class Cow extends Animal
{

    function __construct()
    {
        $this->id++;
        $this->animalName = "Корова";
        $this->productName = "литров молока";
    }

    function produceProducts(): int
    {
        return $this->products += random_int(8, 12);;
    }

}