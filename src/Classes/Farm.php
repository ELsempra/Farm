<?php

namespace Farm\Classes;

use Farm\Abstracted\Animal;

class Farm
{
    function __construct()
    {
        $this->animals[] = new Chicken();
        $this->animals[] = new Cow();
    }

    private $animals = [];

    private $tableOfProducts = [];

    static private $dayOfWeek;

    //Увеличиваем день недели тем самым пополняем нашу продукцию
    public function upDay()
    {
        if (self::$dayOfWeek <= 7) {
            self::$dayOfWeek++;
            $this->addProducts();

        } else {
            self::$dayOfWeek = 0;
        }
    }

    //В этом методе пополняем количество продуктов по имени производимого продукта
    private function addProducts()
    {
        foreach ($this->tableOfProducts as $key => $wrapper) {//Обертка над объектами
            foreach ($wrapper as $animalName => $product) {//Название животного и продукт
                foreach ($product as $productName => &$sum ) { //название продукта и кол-во
                    foreach ($this->animals as $animal){
                        $this->tableOfProducts[$key][$animalName][$productName] += $animal->produceProducts();
                    }
                }
            }
        }
    }

    // В этом методе добавляем продукцию в таблицу с животными и их продуктом
    public function addAnimalToTable(Animal $animal)
    {
        $this->tableOfProducts[] =
            [
                $animal->getAnimalName() =>
                    [
                        $animal->getProductName() => 0
                    ]
            ];
    }


    //получаем количество продуктов добытое на ферме
    public function getSumProducts()
    {
        foreach ($this->tableOfProducts as $animal) {
            foreach ($animal as $animalName => $product) {
                echo "$animalName добыла";
                foreach ($product as $productName => $sum) {
                    echo " $sum \t $productName ";
                }
            }
        }
    }

    public function getTable()
    {
        return $this->tableOfProducts;
    }
}