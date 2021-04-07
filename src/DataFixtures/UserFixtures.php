<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Repository\ClientRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class UserFixtures extends Fixture
{

    /**
     * @var ClientRepository
     */
    private ClientRepository $clientRepository;

    public function __construct(ClientRepository $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();


        for ($i = 0; $i < 15; $i++) {
            $user = new User();

            $user->setLogin($faker->name());
            $user->setPassword($faker->password());
            $user->setCreatedAt(new \DateTime('now'));
            $user->setClient($this->clientRepository->getRandomClient());

            $manager->persist($user);
        }

        $manager->flush();
    }
}
