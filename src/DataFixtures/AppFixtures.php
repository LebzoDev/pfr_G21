<?php

namespace App\DataFixtures;

use Faker\Factory;

use App\Entity\Utilisateur as User;
use App\Entity\Profil as profil;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    protected $faker;
    public function load(ObjectManager $manager)
    {
        /*$faker = Factory::create();

        // on créé 10 personnes
        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setLogin($faker->name);
            $user->setPassword($faker->name);
            $user->setPrenom($faker->name);
            $user->setNom($faker->name);
            //Un objet de type profil
            $profil = new Profil(['Id'=>($faker->randomDigit),'Libelle_Profil'=>'ADMIN']);
            $user->setProfil($profil);
            $user->setMail($faker->email);
            $manager->persist($user);
        }*/
    }
}
