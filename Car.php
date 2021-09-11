<?php


abstract class Car
{
    private int $numOfWheels;
    private int $numOfSeats;
    private int $numOfDoors;

    public function __construct(int $numOfDoors, int $numOfSeats, int $numOfWheels)
    {
        $this->numOfDoors = $numOfDoors;
        $this->numOfWheels = $numOfWheels;
        $this->numOfSeats = $numOfSeats;

        echo '<h1>Initiate Car Constructor</h1><br/>';
    }

    public function __destruct()
    {
        echo '<h1>Initiate Car Destructor</h1>';
    }

    public function getNumOfDoors(): int
    {
        return $this->numOfDoors;
    }
}

class Truck extends Car {

    private int $cargoWeight = 400;

    public function __construct(int $numOfDoors, int $numOfSeats, int $numOfWheels, int $cargoWeight)
    {
        parent::__construct($numOfDoors, $numOfSeats, $numOfWheels);
        $this->cargoWeight = $cargoWeight;

        echo '<h1>Initiate Truck Constructor</h1><br/>';
    }

    public function getCargoWeight(): int
    {
        return $this->cargoWeight;
    }

    public function setCargoWeight(int $cargoWeight): void
    {
        $this->cargoWeight = $cargoWeight;
    }
}

//$bmw = new Car(4, 4, 4);
//echo 'Number of doors: '. $bmw->getNumOfDoors();

$mercedesTruck = new Truck(2, 2, 10, 1000);
echo 'Cargo weight: '. $mercedesTruck->getCargoWeight();

$mercedesTruck ->setCargoWeight(2000);
echo '<br/>Cargo weight: '. $mercedesTruck->getCargoWeight();

