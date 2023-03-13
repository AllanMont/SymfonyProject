<?php

namespace App\DataFixtures;

use App\Entity\Artist;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArtistFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        ($artist = new Artist())
            ->setNom('Montagné')
            ->setPrenom('Allan')
            ->setPseudo('Piloul')
            ->setDateNaissance(new \DateTime("now"))
            ->setDescription('le bouc a piloul')
        ;

        $manager->persist($artist);

        $manager->flush();
    }
}
