<?php

declare(strict_types=1);

namespace Farm\Abstracted;

use Farm\Interfaces\IProduce;

abstract class Animal implements IProduce
{

    protected $id, $productName;

    protected $animalName;

    public function getAnimalName()
    {
        return $this->animalName;
    }

    public function getProductName(){
        return $this->productName;
    }

    public function getId(){
        return $this->id;
    }

    abstract function produceProducts();
}