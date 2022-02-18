<?php

declare(strict_types=1);

namespace Farm\Classes\Abstracted;

use Farm\Interfaces\IProduce;

//Прородитель всех животных
abstract class Animal implements IProduce
{
    protected $id, $productName, $products, $animalName;

    public function __construct()
    {
        $this->id++;
    }

    public function getAnimalName()
    {
        return $this->animalName;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    public function getId():int
    {
        return $this->id;
    }

    abstract function produceProducts(): int;
}