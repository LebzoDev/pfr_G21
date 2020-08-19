<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Niveau;
use App\Entity\Competence;
use App\Entity\GroupCompetence;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CompetenceFixtures extends Fixture
{
    protected $faker;

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        for ($i = 0; $i <= 2; $i++) {
            //Buil a new Competence Object
            $competence = new Competence();
            $competence->setLibelle("Libellé Competence ".$i);
            $competence->setDescriptif("Descriptif Competence ".$i);
            //Built a new Niveau Object
            $niveau = new Niveau();
            $niveau->setlibelle("Libellé Niveau ".$i);
            $niveau->setCritereDeval("Critere Devaluation ".$i);
            $niveau->setGroupeDaction("Groupe dAction ".$i);
            $niveau->setCompetence($competence);
            //Build a new GroupCompetence Object
            $groupCompetence = new GroupCompetence();
            $groupCompetence->setLibelle("Libellé Groupe Competence ".$i);
            $groupCompetence->setDescriptif("Descriptif Groupe Competence ".$i);
            $groupCompetence->addCompetence($competence);

            $manager->persist($niveau);
            $manager->persist($groupCompetence);
            $manager->persist($competence);
        }
        $manager->flush();
    }
}
