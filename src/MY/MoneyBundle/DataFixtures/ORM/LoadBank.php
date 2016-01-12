<?php
namespace MY\MoneyBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MY\MoneyBundle\Entity\Bank;

class LoadBank implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    $listNames = array("Caisse d'épargne", "Banque Postale", "CIC", "Banque Populaire", "Société générale", "Crédit Agricole");

    foreach ($listNames as $name) {
      $bank = new Bank;
      $bank->setName($name);
      $manager->persist($bank);
    }
    $manager->flush();
  }
}