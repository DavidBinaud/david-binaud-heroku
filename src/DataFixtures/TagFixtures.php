<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Tag;

class TagFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $tag = new Tag();
        $tag->setName("Games");
        $manager->persist($tag);

        $tag = new Tag();
        $tag->setName("Web");
        $manager->persist($tag);

        $manager->flush();
    }
}
