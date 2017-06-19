<?php
/**
 * Date: 8/8/16
 * Time: 9:16 AM
 */
$mothership1 = new \Task\Entity\Mothership();
$fleet1 = new \Task\Entity\Fleet($mothership1);
$mothership1->setFleet($fleet1);
$shipTool1 = new \Task\Entity\Ship(1, $fleet1, false, true);
$shipWeapon1 = new \Task\Entity\Ship(2, $fleet1, true, false);
$fleet1->addShip($shipWeapon1);
$fleet1->addShip($shipTool1);

$mothership2 = new \Task\Entity\Mothership();
$fleet2 = new \Task\Entity\Fleet($mothership2);
$mothership2->setFleet($fleet2);
$shipTool2 = new \Task\Entity\Ship(1, $fleet2, false, true);
$shipWeapon2 = new \Task\Entity\Ship(2, $fleet2, true, false);
$fleet2->addShip($shipWeapon2);
$fleet2->addShip($shipTool2);

$shipWeapon1->attack($fleet2);
$shipTool2->fix();
