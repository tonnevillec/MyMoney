<?php
// src/OC/UserBundle/DataFixtures/ORM/LoadUser.php

namespace MY\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MY\UserBundle\Entity\User;

class LoadUser implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    // Les noms d'utilisateurs à créer
    $listNames = array('Lanfear');

    foreach ($listNames as $name) {
      // On crée l'utilisateur
      $user = new User;

      // Le nom d'utilisateur et le mot de passe sont identiques
      $user->setUsername($name);
      $user->setEnabled(true);
      // $user->setSalt('3qy55e08fx4w8o4c4kk0skokkk0c84g');
      $user->setPassword('zeW7x4omP9hkXUcCs5TRKdXCw2m8LY303qx1458FOl3zKUjTvbv1a9+FedJ4qTU1qmsW6U5Ul6b5Vgc1RoWPcw==');
      $user->setEmail('tonnevillec@gmail.com');

      // On définit uniquement le role ROLE_ADMIN qui est le role de base
      $user->setRoles(array('ROLE_ADMIN'));

      // On le persiste
      $manager->persist($user);
    }

    // On déclenche l'enregistrement
    $manager->flush();
  }
}