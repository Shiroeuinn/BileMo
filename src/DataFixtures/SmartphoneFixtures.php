<?php

namespace App\DataFixtures;

use App\Entity\Smartphone;
use Cocur\Slugify\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class SmartphoneFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        $slugify = new Slugify();

        for ($i = 0; $i < 15; $i++) {

            $smartphone = new Smartphone();
            $smartphoneName = $faker->firstName() . ' S' . $faker->numberBetween(1, 20);

            $smartphone->setName($smartphoneName);
            $smartphone->setDescription($faker->text(75));
            $smartphone->setCamera($faker->numberBetween(32, 128));
            $smartphone->setScreen($faker->randomFloat(2, 10, 28));
            $smartphone->setMemory($faker->numberBetween(256, 512));
            $smartphone->setSlug($slugify->slugify($smartphoneName));

            $manager->persist($smartphone);
        }

        $manager->flush();
    }
}
