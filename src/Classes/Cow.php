<?php

declare(strict_types=1);

namespace Farm\Classes;

use Farm\Abstracted\Animal;

class Cow extends Animal
{

    function __construct()
    {
        $this->id++;
        $this->animalName = "Корова";
        $this->productName = "литров молока";
    }

    function produceProducts(){
        $milk = random_int(8,12);
        return $this->products += $milk;
    }
}