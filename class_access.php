<?php
declare(strict_types = 1);

class Car {

    public int $numOfWheels = 4;
    protected string $made = 'Toyota';

    //count
    public function getNumOfWheels()
    {
        echo 'this car has '. $this->numOfWheels . ' wheels';
    }
}

class Truck extends Car {

    public int $numOfWheels = 20;

    public function getNumOfWheels()
    {
        echo 'trucks has '.$this->numOfWheels.' wheels<br/>';
    }

    public function getMade()
    {
        echo 'truck made is '. $this->made .'<br/>';
    }
}

$car = new Car();
$car->getNumOfWheels();
echo '<br/>';
$truck = new Truck();
$truck->getNumOfWheels();
$truck->getMade();
