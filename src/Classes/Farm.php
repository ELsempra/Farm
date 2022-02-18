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
        if ($this->dayOfWeek < 7) {
            $this->dayOfWeek++;
            $this->addProducts();

        } else {
            $this->dayOfWeek = 0;
        }
    }

    //В этом методе пополняем количество продуктов по фильтру названия животного
    public function addProducts()
    {
        foreach ($this->animals as $animal) {///Проходимся по животным
            foreach ($this->tableOfProducts as $key => $product) {//Проходимся по таблицу продуктов
                foreach ($product as $productName => $sum) {
                    if ($animal->getProductName() == $productName) {//Если имена совпадают, то добавляем в таблицу
                        $this->tableOfProducts[$key][$productName] += $animal->produceProducts();
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
                $animal->getProductName() => 0,
            ];
    }


    //получаем количество продуктов добытое на ферме
    public function getSumProducts()
    {
        foreach ($this->tableOfProducts as $key => $product) { //название продукта
            foreach ($product as $productName => $sum) {
                echo $productName . "\t добыто:\t" . $sum . "<br>";
            }
        }
    }

}