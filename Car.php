<?php
declare(strict_types=1);
ini_set('error_prepend_string',"<div class='error'>")  ;
ini_set('error_append_string',"</div>")  ;
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

interface CarInterface  {
    public function getModelAndMake();
}

class Car implements  CarInterface
{
    private int $numOfWheels;
    private int $numOfSeats;
    private int $numOfDoors;
    private bool $isBrandNew ;
    private string $model = 'Salon';
    private string $make = 'Toyota';

    public function __construct(
        int $numOfDoors,
        int $numOfSeats,
        int $numOfWheels,
        bool $isBrandNew = false

    ) {
        $this->numOfDoors = $numOfDoors;
        $this->numOfWheels = $numOfWheels;
        $this->numOfSeats = $numOfSeats;
        $this->isBrandNew = $isBrandNew;

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

    public function getIsBrandNew(): string
    {
        return $this->isBrandNew ? 'Yes' : ' No';
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model) :void
    {
        $this->model = $model;
    }

    public function getMake(): string
    {
        return $this->make;
    }

    public function setMake(string $make) :void
    {
        $this->make = $make;
    }

    public function getModelAndMake(): string
    {
        return $this->model.' '.$this->make;
    }
}


class Truck extends Car implements CarInterface {

    private int $cargoWeight = 400;

    public function __construct(int $numOfDoors, int $numOfSeats, int $numOfWheels, int $cargoWeight, bool $isBrandNew = false)
    {
        parent::__construct($numOfDoors, $numOfSeats, $numOfWheels, $isBrandNew);
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

$bmw = new Car(4, 4, 4);
echo 'Number of doors: '. $bmw->getNumOfDoors();
echo '<br/>BMW make: '. $bmw->getModelAndMake();

$mercedesTruck = new Truck(2, 2, 10, 1000, false);
echo 'Cargo weight: '. $mercedesTruck->getCargoWeight();

$mercedesTruck ->setCargoWeight(2000);
echo '<br/>Cargo weight: '. $mercedesTruck->getCargoWeight();
echo '<br/>Brand new :'. $mercedesTruck->getIsBrandNew();

$volvoTruck = new TrucK(2, 2, 10 , 5000, true);
echo '<br/>Volvo Truck: '.$volvoTruck->getIsBrandNew();
echo '<br/>Volvo Make: '. $volvoTruck->getModelAndMake();
