<?php

namespace App\DataFixtures;

use App\Entity\Booking;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BookingFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        ($booking = new Booking())
            ->setIdUser(1)
            ->setIdConcert(1)
            ->setDate(new \DateTime("now"))
            ->setQte(2)
    ;

        $manager->persist($booking);
        $manager->flush();
    }
}
