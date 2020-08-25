<?php

namespace App\Controller;


use App\Entity\Brief;
use App\Entity\Promo;
use App\Entity\Formateur;
use App\Entity\GroupPromo;
use App\Repository\BriefRepository;
use App\Repository\PromoRepository;
use App\Repository\FormateurRepository;
use App\Repository\BriefMaPromoRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class BriefController extends AbstractController
{
    /**
     * @Route("formateurs/brief", name="get_brief", methods={"GET"})
     */
    public function getBriefs(BriefRepository $repo, SerializerInterface $serializer) 
    {
        $briefObject=$repo->findAll();
        
        $briefJson=$serializer->serialize($briefObject,"json",);
        
        return new JsonResponse($briefJson,Response::HTTP_OK,[],['groups'=>['brief:read']]);
    }

    /**
     * @Route("formateurs/{id}/briefs/brouillons", name="get_brief_brouilons", methods={"GET"})
     */
    public function getBriefsBrouillons($id, FormateurRepository $formateurRepo) 
    {
            $brief=new Brief();
            $formateur=$formateurRepo->findOneBy(["id"=>$id]);
            if ($formateur!=null) {
                foreach($formateur->getBriefs() as $brief){
                    if($brief->getEtatBrouillonAssigneValide()!= "brouillon"){
                        $formateur->removeBrief($brief);
                    }
                }
                return $this->json($formateur->getBriefs(),Response::HTTP_OK,[],['groups'=>['read']]);
            }
            return $this->json(["message"=>"Ce Formateur n'existe Pas"],Response::HTTP_NOT_FOUND);
    }

    /**
     * @Route("formateurs/{id}/briefs/valides", name="get_brief_valides", methods={"GET"})
     */
    public function getBriefsValides($id, FormateurRepository $formateurRepo) 
    {
      $brief=new Brief();
      $formateur=$formateurRepo->findOneBy(["id"=>$id]);
      if ($formateur!=null) {
          foreach($formateur->getBriefs() as $brief){
              if($brief->getEtatBrouillonAssigneValide()!= "valide"){
                  $formateur->removeBrief($brief);
              }
          }
          return $this->json($formateur->getBriefs(),Response::HTTP_OK,[],['groups'=>['read']]);
      }
      return $this->json(["message"=>"Ce Formateur n'existe Pas"],Response::HTTP_NOT_FOUND);
    
    }

    /**
     * @Route("/api/formateurs/promo/{id}/briefs", name="getBriefsPromo", methods={"GET"}))
     */
    public function getBriefsPromo($id, BriefRepository $briefrepo, PromoRepository $promoRepo) 
    {
        $promo=$promoRepo->findOneBy(["id"=>$id]);
        $briefs=[];
       
        if ($promo) {
            foreach ($promo->getBriefMaPromos() as $briefMaPromo) {
                $briefs[]=$briefrepo->find($briefMaPromo->getBrief()->getId());
                
            }
            return $this->json($briefs,Response::HTTP_OK,[],['groups'=>['brief:read']]);
        }
        return $this->json(["message"=>"Ce Promo n'existe Pas"],Response::HTTP_NOT_FOUND);
        
    
    }

    /**
     * @Route("/api/formateurs/promo/{id}/briefs{id2}", name="getOneBriefPromo", methods={"GET"}))
     */

        public function getOneBriefPromo(){

        }
}
