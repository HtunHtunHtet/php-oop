<?php

require_once ('Computer.php');
require_once ('./Interfaces/ComputerInterface.php');
require_once ('./Traits/ComputerTrait.php');

/**
 * Class Computer
 */
abstract class Computer implements ComputerInterface
{
    use ComputerTrait;
    private string $cpu;
    private string $hardDisk;
    private string $ram;
    private bool $hasUSB;

    /**
     * Computer constructor.
     * @param string $cpu
     * @param string $hardDisk
     * @param string $ram
     * @param bool $hasUSB
     */
    public function __construct(string $cpu, string $hardDisk, string $ram, bool $hasUSB)
    {
        $this->cpu = $cpu;
        $this->hardDisk = $hardDisk;
        $this->ram = $ram;
        $this->hasUSB = $hasUSB;
    }

    public function getCpu(): string
    {
        return $this->cpu;
    }

    public function getHardDisk(): string
    {
        return $this->hardDisk;
    }

    public function getRam(): string
    {
        return $this->ram;
    }

    public function isHasUSB(): bool
    {
        return $this->hasUSB;
    }

    public function usage(): string
    {
        return 'Can use both personal, gaming and office';
    }
}




