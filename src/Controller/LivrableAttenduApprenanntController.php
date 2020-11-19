<?php

namespace App\Controller;

use App\Repository\ApprenantRepository;
use App\Entity\LivrableAttenduApprenant;
use App\Repository\GroupPromoRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\LivrableAttenduRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LivrableAttenduApprenanntController extends AbstractController
{
    private $manager;
    private $repo_app;
    private $repo_lar;
    private $repo_gp;
    public function __construct(EntityManagerInterface $manager, ApprenantRepository $repo_app, LivrableAttenduRepository $repo_lar, GroupPromoRepository $repo_gp){
         $this->manager = $manager;
         $this->repo_app = $repo_app;
         $this->repo_lar = $repo_lar;
         $this->repo_gp = $repo_gp;
    }

    /**
     * @Route("apprenants/{id}/groupe/livrables/{idLivra}", name="post_link", methods={"POST"})
     */
    public function post_link($id,$idLivra,Request $request)
    {
       // dd($id,$idLivra);
       $data = json_decode($request->getContent());
       $apprenants = $this->repo_app->findAll();
        foreach ($apprenants as $apprenant_) {
            if ($apprenant_->getMyId()==$id){
                $apprenant = $apprenant_;
            }
        }
       $livrableAttendu = $this->repo_lar->findOneBy(['id'=>$idLivra]);
       if (isset($apprenant) && isset($livrableAttendu) && isset($data->url)) {
           $laa = new LivrableAttenduApprenant();
           $laa->setApprenant($apprenant);
           $laa->setLivrablAttendu($livrableAttendu);
           $laa->setUrl($data->url);

           $this->manager->persist($laa);
           $this->manager->flush();
           return $this->json(['message'=>'success'],200);
       }else{
           return $this->json(['message'=>'error'],404);
       }
    }

    /**
     * @Route("apprenants/{id}/groupe/{idGroup}/livrables/{idLivra}", name="post_links", methods={"POST"})
     */
    public function post_links($id,$idGroup,$idLivra,Request $request)
    {
       $data = json_decode($request->getContent());
       $apprenant = $this->repo_app->findOneBy(['id'=>$id]);
       $livrableAttendu = $this->repo_lar->findOneBy(['id'=>$idLivra]);
       $groupPromo = $this->repo_gp->findOneBy(['id'=>$idGroup]);
        
       if (isset($groupPromo)) {
        $tabApp=array();
           $apprenants = $groupPromo->getApprenants();
           if ($apprenants->count() > 0) {
               foreach ($apprenants as $app) {
                   $tabApp[]=$app;
                   $apprenant= true;
               }
           }

       }

       if (isset($apprenant) && isset($livrableAttendu) && isset($data->url) && isset($apprenant)) {
        for ($i=0; $i < count($tabApp); $i++) {
            $laa = new LivrableAttenduApprenant();
            $laa->setApprenant($tabApp[$i]);
            $laa->setLivrablAttendu($livrableAttendu);
            $laa->setUrl($data->url);
            $this->manager->persist($laa);
        }
           
           $this->manager->flush();
           return $this->json(['message'=>'success'],200);
       }else{
           return $this->json(['message'=>'error'],404);
       }
    }
}
