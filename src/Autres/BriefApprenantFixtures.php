<?php

namespace App\DataFixtures;

use App\Entity\BriefMaPromo;
use App\Entity\BriefApprenant;
use App\Repository\BriefRepository;
use App\Repository\PromoRepository;
use App\Repository\ApprenantRepository;
use Doctrine\Persistence\ObjectManager;
use App\Repository\BriefMaPromoRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;

class BriefApprenantFixtures extends Fixture
{
    private $repoBrief;
    private $repoPromo;
    private $repoMaPromo;
    private $repoApp;
    public function __construct(ApprenantRepository $repoApp,BriefRepository $repoBrief,PromoRepository $repoPromo,BriefMaPromoRepository $repoMaPromo){
        $this->repoBrief = $repoBrief;
        $this->repoPromo = $repoPromo;
        $this->repoMaPromo = $repoMaPromo;
        $this->repoApp = $repoApp;
    }
    public function load(ObjectManager $manager)
    {
       //$promo = $this->repoMaPromo->findOneBy(['id'=>1]);
       //$apprenants = $promo->getApprenant();

       $apprenants = $this->repoApp->findAll();
       foreach ($apprenants as $apprenant_) {
           if ($apprenant_->getMyId()==8) {
               $apprenant = $apprenant_;
           }
       }
       $briefMapromo = $this->repoMaPromo->findOneBy(['id'=>1]);
       $briefApp = new BriefApprenant();
       $briefApp->setApprenant($apprenant);
       $briefApp->setBriefMaPromo($briefMapromo);
       $briefApp->setAffecte(true);
       $briefApp->setRendu(true);
       $briefApp->setValide(true);
       $manager->persist($briefApp);
        $manager->flush();
    }
}
