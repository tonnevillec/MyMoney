<?php
namespace MY\MoneyBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MY\MoneyBundle\Entity\Paymode;

class LoadPaymode implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    $listNames = array("CB", "Chèque", "Virement", "Prélévement", "Paypal", "Retrait");

    foreach ($listNames as $name) {
      $paymode = new Paymode;
      $paymode->setName($name);
      $manager->persist($paymode);
    }
    $manager->flush();
  }
}