<?php

namespace App\DataFixtures;

use App\Entity\Favorite;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FavoriteFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        ($favorite = new Favorite())
            ->setIdUser(1)
            ->setIdArtiste(1)
        ;

        $manager->persist($favorite);

        $manager->flush();
    }
}
