<?php

class Car {

    private int $doors = 4;

    public function getDoors(): int
    {
        return $this->doors;
    }

    public function setDoors()
    {
        $this->doors = 10 ;
    }
}

$car = new Car();
echo $car->getDoors().'<br/>';
$car->setDoors();
echo $car->getDoors();
