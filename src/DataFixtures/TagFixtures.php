<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Tag;

class TagFixtures extends Fixture
{

    public const TAG_REF = 'TAG_REFERENCE_';

    public function load(ObjectManager $manager): void
    {

        $tag = new Tag();
        $tag->setName("Games");
        $manager->persist($tag);
        $this->addReference(self::TAG_REF . "GAMES", $tag);

        $tag = new Tag();
        $tag->setName("Web");
        $manager->persist($tag);
        $this->addReference(self::TAG_REF . "WEB", $tag);

        $manager->flush();
    }
}
