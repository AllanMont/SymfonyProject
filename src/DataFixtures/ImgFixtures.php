<?php

namespace App\DataFixtures;

use App\Entity\Img;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ImgFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        ($img = new Img())
            ->setExtension('png')
            ->setIdImage(1)
            ->setPathImage('public/')
        ;

        $manager->persist($img);

        $manager->flush();
    }
}
