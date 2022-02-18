<?php

declare(strict_types=1);

namespace Farm\Classes;

use Farm\Classes\Abstracted\Animal;

class Farm
{
    function __construct()
    {
        for ($i = 0; $i < 10; $i++) {
            $this->animals[] = new Cow();
        }

        for ($i = 0; $i < 20; $i++) {
            $this->animals[] = new Chicken();
        }

    }

    //Животные на ферме
    private $animals = [];

    //Таблица соотношеня продуктов и животных
    private $tableOfProducts = [];

    //День недели на ферме, если ферм будет много, то для каждый из них значение уникально
    private $dayOfWeek;

    //Увеличиваем день недели тем самым пополняем нашу продукцию
    public function upDay()
    {
        if ($this->dayOfWeek <= 7) {
            $this->dayOfWeek++;
            $this->addProducts();

        } else {
            $this->dayOfWeek = 0;
        }
    }

    //В этом методе пополняем количество продуктов по фильтру названия животного
    private function addProducts()
    {
        foreach ($this->tableOfProducts as $key => $wrapper) {//Обертка над объектами
            foreach ($wrapper as $animalName => $product) {//Название животного и продукт
                foreach ($product as $productName => $sum) { //название продукта и кол-во
                    foreach ($this->animals as $animal) {
                        if ($animal->getAnimalName() == $animalName) {
                            $this->tableOfProducts[$key][$animalName][$productName] += $animal->produceProducts();
                        }
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
                echo "$animalName добыла \t";
                foreach ($product as $productName => $sum) {
                    echo "$sum \t $productName ";
                }
            }
        }
    }

}