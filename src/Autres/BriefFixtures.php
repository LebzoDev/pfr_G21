<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Brief;
use Doctrine\Persistence\ObjectManager;
use App\Repository\UtilisateurRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;

class BriefFixtures extends Fixture
{
    private $repoFormateur;
    public function __construct(UtilisateurRepository $repoFormateur){
        $this->repoFormateur = $repoFormateur;
    }
    public function load(ObjectManager $manager)
    {
            $formateur = $this->repoFormateur->findOneBy(['id'=>23]);
            $brief = new Brief();
            $brief->setLangue('anglais');
            $brief->setNomBrief('DataArtisan');
            $brief->setDescription('Description du vrief');
            $brief->setContexte('Contexte');
            $brief->setModaliteEvaluation('Modalite Evaluation');
            $brief->setModalitePedagogique('Modalite Pedagogique');
            $brief->setCritereEvaluation('Critere Evaluation');
            $brief->setEtatBrouillonAssigneValide("brouillon");
            $brief->setCreateAt(new DateTime('now'));
            $brief->setArchive(false);
            $brief->setFormateur($formateur);
            $manager->persist($brief);

        $manager->flush();
    }
}
