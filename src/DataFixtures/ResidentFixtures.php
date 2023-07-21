<?php

namespace App\DataFixtures;

use App\Entity\Resident;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ResidentFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i =1; $i<=20; $i++) {
            $resident = new Resident();
            $resident->setLastname('Lastname' . $i);
            $resident->setFirstname('Amélie' . $i);
            $resident->setGender('Femme' . $i);
            $resident->setBirthday('25 janvier 1998' . $i);
            $resident->setRoom('246B' . $i);
            $manager->persist($resident);
        }
        $manager->flush();
        /*
        $resident = new Resident();
        $resident->setLastname('Dupont');
        $resident->setFirstname('Amélie');
        $resident->setGender('Femme');
        $resident->setBirthday('25 janvier 1998');
        $resident->setRoom('246B');
        $manager->persist($resident);
        $manager->flush();
        */
    }
}