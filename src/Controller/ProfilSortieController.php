<?php

namespace App\Controller;

use App\Entity\ProfilSortie;
use App\Repository\PromoRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ProfilSortieRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfilSortieController extends AbstractController
{
    private $manager;
    public function __construct(EntityManagerInterface $manager){
        $this->manager = $manager;
    }
    /**
     * @Route("admin/profilsorties", name="Affiche_ProfilSortie", methods={"GET"})
     */
    public function afficheProfilSortie(ProfilSortieRepository $repo)
    {
        $profilSorties = $repo->findAll();
        //dd($profilSorties);
        if(isset($profilSorties)){
            return $this->json($profilSorties,200,[],['groups'=>'affiche']);
        }
    }

    /**
     * @Route("admin/promo/{id}/profilsorties", name="Affiche_ProfilSortie_Promo", methods={"GET"})
     */
    public function afficheProfilSortiePromo($id, PromoRepository $repo, ProfilSortieRepository $repoPDS,SerializerInterface $serialize ){
        $promo = $repo->findOneBy(['id'=>$id]);
        if(!isset($promo)){
            return $this->json(["message"=>"Ce promo n'existe pas."],Response::HTTP_NOT_FOUND);
        }
        $profilSorties = $repoPDS->findAll();
        $apprenants = $promo->getApprenants();
        if(isset($profilSorties)){
            $tab = $serialize->normalize($profilSorties,null,['groups'=>'affiche']);
            $i=0;
            foreach ($profilSorties as $ps) {
                foreach ($apprenants as $app) {
                    $id2 = $app->getProfilSortie()->getId();
                    if (isset($id2)) {
                        if ($ps->getId()==$id2){
                            $tab[$i]['apprenants'][]=$app;
                        }
                    }
                }
            $i++;
            }
            return $this->json($tab,200,[],['groups'=>'affiche']);
        }
    }

     /**
     * @Route("/admin/profilsorties/{id}", name="Affiche_Apprenant_ProfilSortie", methods={"GET"})
     */
    public function afficheApprenantsProfilSortie($id, ProfilSortieRepository $repoPDS,SerializerInterface $serialize ){
        $profilSorties = $repoPDS->findOneBy(['id'=>$id]);
        if(!isset($profilSorties)){
            return $this->json(["message"=>"Ce profil de sortie n'existe pas."],Response::HTTP_NOT_FOUND);
        }else{
            return $this->json($profilSorties,200,[]);
        }
    }
    /**
     * @Route("/admin/promo/{id}/profilsortie/{idp}", name="Affiche_Apprenant_ProfilSortie_Promo", methods={"GET"})
     */
    public function afficheApprenantsProfilSortiePromo($id,$idp,ProfilSortieRepository $repoPDS,PromoRepository $promoRepo,SerializerInterface $serialize)
    {
        
        $profilSortie=$repoPDS->findOneBy(["id"=>$idp]);
        $tab=[];
        $promo=$promoRepo->findOneBy(["id"=>$id]);
        if (isset($promo)) {
            if (isset($profilSortie)) {
                foreach ($profilSortie->getApprenants() as $app) {
                    if ($app->getPromo()->getId()==$promo->getId()) {
                        $tab[]=$app;
                    }

                }
                return $this->json($tab,Response::HTTP_OK,[],['groups'=>['apprenant:read']]);
            }else {
                return $this->json(["message"=>"Ce profil de sortie n'existe pas dans cette promo."],Response::HTTP_NOT_FOUND);
            }
        }else {
            return $this->json(["message"=>"Cette promo n'existe pas."],Response::HTTP_NOT_FOUND);
        }

        
    }
    /**
     * @Route("/admin/profilsortie/{id}", name="ModifierProfilSortie", methods={"PUT"})
     */
    public function modifierProfilSortie($id, Request $request,ProfilSortieRepository $repoPDS)
        {
             $data = json_decode($request->getContent());
            $profilSortie=$repoPDS->findOneBy(["id"=>$id]);
            if ($profilSortie) {
                $profilSortie->setLibelleProfilSortie($data->libelleProfilSortie);
                $this->manager->flush();
                return new Response(['message'=>'Modification Reussie'], 200);
            }
            return new Response('failed', 404);      
        }

    /**
     * @Route("admin/profilsorties", name="Add_ProfilSortie", methods={"POST"})
     */
    public function addProfilSortie(Request $request){
        $data = json_decode($request->getContent());
        $pds = new ProfilSortie();
        if(isset($data->libelleProfilSortie)){
            $pds->setLibelleProfilSortie("$data->libelleProfilSortie");
            $this->manager->persist($pds);
            $this->manager->flush();
            return $this->json($pds,200);
        }else{
            return $this->json(['message'=>'error'],404);
        }
    }
}
