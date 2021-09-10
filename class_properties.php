<?php
declare(strict_types = 1);

class Car {

    //Properties
    public int $numOfWheels  = 4;
    public int $numberOfDoors = 4;

    //Method
    public function carDetails()
    {
        echo 'Print car details';
    }

    //count
    public function getWheelCount()
    {
        echo 'this car has'. $this->numOfWheels . ' wheels';
    }
}

$car = new Car();
echo $car->carDetails().'<br/>';
echo $car->numberOfDoors.'<br/>';
echo $car->numOfWheels.'<br/>';

//update
echo 'Update properties = '. $car->numOfWheels. '<br/>';

