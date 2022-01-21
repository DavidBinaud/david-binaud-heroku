<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Project;

class ProjetFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $projet = new Projet();
        $manager->persist($projet);

        $manager->flush();
    }
}
