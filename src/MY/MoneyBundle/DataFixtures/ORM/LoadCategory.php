<?php
namespace MY\MoneyBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MY\MoneyBundle\Entity\Category;

class LoadCategory implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    $listNames = array("Divers", "Courses", "Essence", "Cadeaux", "Entretien voiture", "Livret A", "PEL", "Impots", "Frais fixes", "EDF", "Transports", "Cantine", "Loyer", "Salaire", "CPAM", "Mutuelle");

    foreach ($listNames as $name) {
      $category = new Category;
      $category->setName($name);
      $manager->persist($category);
    }
    $manager->flush();
  }
}