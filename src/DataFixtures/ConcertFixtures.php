<?php

namespace App\DataFixtures;

use App\Entity\Concert;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ConcertFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        ($concert = new Concert())
            ->setDate(new \DateTime("now"))
            ->setCapacite(300)
            ->setIdArtiste(1)
            ->setIdSalle(1)
        ;

        $manager->persist($concert);
        $manager->flush();
    }
}
