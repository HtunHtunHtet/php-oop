<?php

require_once ('Computer.php');
require_once ('./Interfaces/DesktopComputerInterface.php');

class DesktopComputer extends Computer implements DesktopComputerInterface
{
    private int $numberOfUSBPort;

    private int $hasBIOS;


    public function __construct(string $cpu, string $hardDisk, string $ram, bool $hasUSB, int $numberOfUSBPort, int $hasBIOS)
    {
        parent::__construct($cpu, $hardDisk, $ram, $hasUSB);
        $this->numberOfUSBPort = $numberOfUSBPort;
        $this->hasBIOS = $hasBIOS;
    }

    public function getDesktopComputerDetails()
    {
        echo 'Number Of USB Port: '.$this->numberOfUSBPort.'<br/>'.
            'Number Of Bios: '.$this->hasBIOS;
    }
}

