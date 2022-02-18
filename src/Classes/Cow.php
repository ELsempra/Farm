<?php

declare(strict_types=1);

namespace Farm\Classes;

use Farm\Classes\Abstracted\Animal;

class Cow extends Animal
{

    function __construct()
    {
        parent::__construct();
        $this->animalName = "Корова";
        $this->productName = "литров молока";
    }

    function produceProducts(): int
    {
        return random_int(8, 12);;
    }

}