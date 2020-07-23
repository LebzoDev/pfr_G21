<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Utilisateur as User;
use App\Entity\Profil;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Utilisateur extends Fixture
{
    protected $faker;
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        // on créé 10 personnes
        for ($i = 0; $i <= 2; $i++) {
            $user = new User();
            $user->setLogin($faker->userName);
            $user->setPassword($faker->password);
            $user->setPrenom($faker->firstNameMale);
            $user->setNom($faker->lastName);
            //Un objet de type profil
            $profil = new Profil();
            if ($i==0) {
                $profil-> setLibelleProfil('ADMIN');  
            }elseif ($i==1) {
                $profil-> setLibelleProfil('FORMATEUR');  
            }else {
                $profil-> setLibelleProfil('CM');  
            }
            $user->setProfil($profil);
            $user->setMail($faker->email);
            
            $manager->persist($profil);
            $manager->persist($user);
        }
        $manager->flush();
    }
}
