<?php

namespace App\DataFixtures;

use App\Entity\ImgUser;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ImgUserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        ($imgUser = new ImgUser())
            ->setIdImage(1)
            ->setIdUser(1)
        ;

        $manager->persist($imgUser);

        $manager->flush();
    }
}
