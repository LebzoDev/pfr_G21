<?php

namespace App\DataFixtures;

use App\Entity\Profil as prof;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Profil extends Fixture
{
    public function load(ObjectManager $manager)
    {
       
        $profil = new prof();
        $profil-> setLibelleProfil('APPRENANT');  
       /* $profil = new prof();
        $profil->setLibelleProfil('ADMIN');
        $profil2 = new prof();
        $profil2->setLibelleProfil('FORMATEUR');
        $profil3 = new prof();
        $profil3->setLibelleProfil('CM');
        $manager->persist($profil2);
        $manager->persist($profil);
        $manager->persist($profil3);
    */
        $manager->persist($profil);
        $manager->flush();
    }
}
