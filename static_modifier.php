<?php

class Car {

    //static
    static $generalPrice = 2000;

    //Properties
    public int $numOfWheels  = 4;
    public int $numberOfDoors = 4;

    //static
    static $made = 'bmw';

    //Method
    public function getNumOfWheels() : void
    {
        echo 'Number of wheels '. $this->numberOfDoors;
    }

    static function getStaticGeneralPrice(): void
    {
        echo 'Car general price $'. Car::$generalPrice;
    }
}

$car = new Car();
echo $car->getNumOfWheels().'<br/>';
echo $car::$made.'<br/>';
car::getStaticGeneralPrice();

