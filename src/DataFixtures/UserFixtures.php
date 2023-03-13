<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        ($user = new User())
            ->setNom('Goupil')
            ->setPrenom('Mathias')
            ->setPseudo('AHHHHH')
            ->setAdresse('Sous un pont')
            ->setAvatar(null)
            ->setEmail('mathias@goupil.gmail')
            ->setIsAdmin(false)
        ;

        $manager->persist($user);

        $manager->flush();
    }
}
