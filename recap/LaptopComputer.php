<?php

require_once ('Computer.php');
require_once ('./Interfaces/LapComputerInterface.php');

class LaptopComputer extends Computer implements LapComputerInterface
{

    use ComputerTrait;

    private bool $hasScreen;

    public function __construct(string $cpu, string $hardDisk, string $ram, bool $hasUSB, bool $hasScreen)
    {
        parent::__construct($cpu, $hardDisk, $ram, $hasUSB);
        $this->hasScreen = $hasScreen;
    }

    public function getHasScreen() : string
    {
        return  $this->hasScreen ? 'It does' : 'No, It does not' ;
    }
}

