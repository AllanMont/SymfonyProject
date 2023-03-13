<?php

namespace App\DataFixtures;

use App\Entity\Salle;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SalleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        ($salle = new Salle())
            ->setNom('Palomax')
            ->setIsInConstruction(true)
        ;

        $manager->persist($salle);

        $manager->flush();
    }
}
