<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
//use Faker; Pour créer des fausses entrées dans la BDD


class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
    
        /* Fonction pour creer des utilisateurs aléatoirement
            $faker = Faker\Factory::create('fr_FR');
            for ($i = 0; $i < 100; $i++) {
            $user = new User();
            $user->setUsername($faker->name);
            $user->setEmail(sprintf('userdemo%d@example.com', $i));
            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,
                'userdemo'
            ));
            $manager->persist($user);
        } */

        // Création d'un utilisateur avec les droits d'administration
        $user = new User();
        $user->setUsername('admin');
        $user->setEmail('admin@mail.com');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            'admin'
        ));
        $manager->persist($user);


        $manager->flush();

    }
}
