<?php

namespace App\DataFixtures;

use App\Entity\ProfilSortie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ProfilSortieFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $profil = new ProfilSortie();
        $profil-> setLibelleProfilSortie('actif');  
        $manager->persist($profil);
        $manager->flush();
    }
}
