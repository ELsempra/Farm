<?php

declare(strict_types=1);

namespace Farm\Classes;

use Farm\Abstracted\Animal;

class Chicken extends Animal
{

    function __construct()
    {
        $this->id++;
        $this->animalName = "Курица";
        $this->productName = "штук яиц";
    }

    function produceProducts(){
        $eggs = random_int(0,1);
        return $this->products +=$eggs;
    }

    public function getSumProducts(Animal $animal){
        echo "Курица снесла всего: " . array_sum($animal->products) . " яиц";
        return array_sum($animal->products);
    }
}