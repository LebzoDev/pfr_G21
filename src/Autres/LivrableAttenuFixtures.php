<?php

namespace App\DataFixtures;

use App\Entity\Brief;
use App\Entity\LivrableAttendu;
use App\Repository\BriefRepository;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class LivrableAttenuFixtures extends Fixture
{
    private $repo_brief;
    public function __construct(BriefRepository $repo_brief){
        $this->repo_brief = $repo_brief;
    }
    public function load(ObjectManager $manager)
    {
        $brief = $this->repo_brief->findOneBy(['id'=>3]);
         $livrableAttendu = new LivrableAttendu();
         $livrableAttendu->setLibelle('US6');
         $livrableAttendu->setDescription('Ce livrable consiste à la réalisation de l\'US 6');
         $livrableAttendu->setBrief($brief);
         $manager->persist($livrableAttendu);
        $manager->flush();
    }
}
