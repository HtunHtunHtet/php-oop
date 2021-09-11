<?php
declare(strict_types=1);

require_once ('DesktopComputer.php');
require_once ('LaptopComputer.php');

//Desktop
$pc = new DesktopComputer('Core i9', 'SSD', '4GB', true, 5, 1);
$pc ->getDesktopComputerDetails();
$pc ->setMake('apple');
echo '<br/>'.$pc ->usage();
echo '<br/>Make: '. $pc->getMake();


//Laptop
$laptop = new LaptopComputer('Core i9', 'SSD', '4GB', true, true);
echo '<br/>'.$laptop->getHasScreen();
$laptop->setMake('Asus');
echo '<br/>Make: '. $laptop->getMake();
