<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\ProfilSortie;
use App\Entity\Apprenant;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use App\Repository\ApprenantRepository as Rep;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ApprenantFixtures extends Fixture
{
   
    protected $faker;
    private $encoder;
    
    public function __construct(UserPasswordEncoderInterface $encoder){
       
        $this->encoder=$encoder;
    }
    public function load(ObjectManager $manager)
    {
       $faker = Factory::create();
        // on créé 10 personnes
        for ($i = 0; $i <= 2; $i++) {
            $user = new Apprenant();
            $user->setLogin($faker->userName);
            $password =$this->encoder->encodePassword($user,"passer");
            $user->setPassword($password);
            $user->setPrenom($faker->firstNameMale);
            $user->setNom($faker->lastName);
            if ($i==0) {
                $user->setStatus("renvoyé");
            }else{
                $user->setStatus("actif");
            }
            //Un objet de type profil
            //$profil = $em->getDoctrine()->getRepository(Apprenant::class)->findOneBy(['libelleProfil'=>'APPRENANT']);
            $profil = new ProfilSortie();
            $profil-> setLibelleProfilSortie('Dev Frontend');  
            $user->setProfilSortie($profil);
            $user->setMail($faker->email);
            $manager->persist($profil);
            $manager->persist($user);
        }
        $manager->flush();
    }
}
