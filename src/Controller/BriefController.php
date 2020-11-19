<?php

namespace App\Controller;


use App\Entity\Brief;
use App\Entity\Promo;
use App\Entity\GroupPromo;
use App\Entity\EtatBriefGroupe;
use App\Repository\BriefRepository;
use App\Repository\PromoRepository;
use App\Repository\GroupPromoRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UtilisateurRepository;
use App\Repository\BriefMaPromoRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class BriefController extends AbstractController
{
    private $repoBrief;
    private $manager;
    private $repoBMP;
    public function __construct(BriefRepository $repoBrief, EntityManagerInterface $manager,BriefMaPromoRepository $repoBMP){
        $this->repoBrief = $repoBrief;
        $this->manager = $manager;
        $this->repoBMP = $repoBMP;
    }
    /**
     * @Route("formateurs/promo/{id}/brief/{idBrief}", name="modify_Brief", methods={"PUT"})
     */
    public function modify_Brief($id,$idBrief,Request $request){
        $briefmapromo = $this->repoBMP->findOneBy(['promo'=>$id,'brief'=>$idBrief]);
        //dd($id,$idBrief,$briefmapromo);
        if (!isset($briefmapromo)) {
            return $this->json(['message'=>'succes','indication'=>'Veuillez revoir vos données'],404);
        }
        $brief = $this->repoBrief->findOneBy(['id'=>$idBrief]);
        $data = json_decode($request->getContent());
        if (isset($data->langue)) {
            $brief->setLangue($data->langue);
        }
        if (isset($data->close)) {
            $brief->setClose($data->close);
        }
        if (isset($data->nomBrief)) {
            $brief->setNomBrief($data->nomBrief);
        }
        if (isset($data->description)) {
            $brief->setDescription($data->description);
        }
        if (isset($data->contexte)) {
            $brief->setContexte($data->contexte);
        }
        if (isset($data->modalitePedagogique)) {
            $brief->setModalitePedagogique($data->modalitePedagogique);
        }
        if (isset($data->critereEvaluation)) {
            $brief->setCritereEvaluation($data->critereEvaluation);
        }
        if (isset($data->modaliteEvaluation)) {
            $brief->setCritereEvaluation($data->modaliteEvaluation);
        }
        if (isset($data->archive)) {
            $brief->setArchive($data->archive);
        }
        if (isset($data->createAt)) {
            $brief->setCreateAt($data->createAt);
        }
        if (isset($data->etatBrouillonAssigneValide)) {
            $brief->setEtatBrouillonAssigneValide($data->etatBrouillonAssigneValide);
        }
              
        $this->manager->flush();
        return $this->json(['message'=>'succes'],200);
    }
    /**
     * @Route("formateurs/brief", name="get_brief", methods={"GET"})
     */
    public function getBriefs(BriefRepository $repo, SerializerInterface $serializer) 
    {
        $briefObject=$repo->findAll();
        return $this->json($briefObject,Response::HTTP_OK,[],['groups'=>['brief:read','niveaux:read','livrableAttendus:read','tag:read','ressources:read']]);
    }

    /**
     * @Route("formateurs/{id}/briefs/brouillons", name="get_brief_brouilons", methods={"GET"})
     */
    public function getBriefsBrouillons($id, UtilisateurRepository $utilisateurRepo) 
    {
            $brief=new Brief();
            $formateur=$utilisateurRepo->findOneBy(["id"=>$id]);
            if ($formateur!=null) {
                foreach($formateur->getBriefs() as $brief){
                    if($brief->getEtatBrouillonAssigneValide()!= "brouillon"){
                        $formateur->removeBrief($brief);
                    }
                }
                return $this->json($formateur->getBriefs(),Response::HTTP_OK,[],['groups'=>['brief:read','livrableAttendus:read','tags:read','ressources:read','niveaux:read']]);
            }
            return $this->json(["message"=>"Ce Formateur n'existe Pas"],Response::HTTP_NOT_FOUND);
    }

    /**
     * @Route("formateurs/{id}/briefs/valides", name="get_brief_valides", methods={"GET"})
     */
    public function getBriefsValides($id, UtilisateurRepository $utilisateurRepo) 
    {
      $brief=new Brief();
      $formateur=$utilisateurRepo->findOneBy(["id"=>$id]);
      //$formateur->getProfil
      if ($formateur!=null) {
          foreach($formateur->getBriefs() as $brief){
              if($brief->getEtatBrouillonAssigneValide()!= "valide" && $brief->getEtatBrouillonAssigneValide()!= "assigne" ){
                  $formateur->removeBrief($brief);
              }
          }
          return $this->json($formateur->getBriefs(),Response::HTTP_OK,[],['groups'=>['brief:read','livrableAttendus:read','tags:read','ressources:read','niveaux:read']]);
      }
      return $this->json(["message"=>"Ce Formateur n'existe Pas"],Response::HTTP_NOT_FOUND);
    
    }

    /**
     * @Route("/api/formateurs/promos/{id}/briefs", name="getBriefsPromo", methods={"GET"}))
     */
    public function getBriefsPromo($id, BriefRepository $briefrepo, PromoRepository $promoRepo) 
    {
        $promo=$promoRepo->findOneBy(["id"=>$id]);
        $briefs=[];
       
        if ($promo) {
            foreach ($promo->getBriefMaPromo() as $briefMaPromo) {
                
                $briefs[]=$briefrepo->find($briefMaPromo->getBrief()->getId());
            }
            return $this->json($briefs,Response::HTTP_OK,[],['groups'=>['brief:read','brief:read2','formateur:read','livrableAttendus:read','tag:read','etatBriefGroupe:read','ressources:read','niveaux:read','livrablePartiel:read']]);
        }
        return $this->json(["message"=>"Ce Promo n'existe Pas"],Response::HTTP_NOT_FOUND);
        
    
    }

     /**
     * @Route("/api/apprenants/promos/{id}/briefs", name="getBriefsAssignesPromo", methods={"GET"}))
     */
    public function getBriefsAssignesPromo($id, BriefRepository $briefrepo, PromoRepository $promoRepo) 
    {
        $promo=$promoRepo->findOneBy(["id"=>$id]);
        $briefs=[];
       $tab=[];
        if ($promo) {
            foreach ($promo->getBriefMaPromo() as $briefMaPromo) {
                $briefs[]=$briefrepo->find($briefMaPromo->getBrief()->getId());
            }
            foreach ($briefs as $brief) {
                if ($brief->getEtatBrouillonAssigneValide()=="assigne") {
                    $tab[]=$brief;
                }
            }
            return $this->json($tab,Response::HTTP_OK,[],['groups'=>['brief:read','brief:read2','formateur:read','livrableAttendus:read','tag:read','etatBriefGroupe:read','ressources:read','niveaux:read']]);
        }
        return $this->json(["message"=>"Ce Promo n'existe Pas"],Response::HTTP_NOT_FOUND);
        
    
    }
    // public function getBriefsAssignesPromo($id, BriefRepository $briefrepo, PromoRepository $promoRepo) 
    // {
    //     $promo=$promoRepo->findOneBy(["id"=>$id]);
    //     $briefs=[];
    //    $tab=[];
    //     if ($promo) {
    //         foreach ($promo->getBriefMaPromo() as $briefMaPromo) {
    //             foreach ($briefMaPromo->getBriefApprenants() as $briefApprenant) {
    //                 $tab[]=
    //             }
    //         }
            
    //         return $this->json($tab,Response::HTTP_OK,[],['groups'=>['brief:read']]);
    //     }
    //     return $this->json(["message"=>"Ce Promo n'existe Pas"],Response::HTTP_NOT_FOUND);
        
    
    // }

    /**
     * @Route("/api/formateurs/promo/{idPromo}/briefs/{idBrief}", name="getOneBriefPromo", methods={"GET"}))
     */

        public function getOneBriefPromo($idPromo,$idBrief,PromoRepository $promoRepo,BriefMaPromoRepository $briefMaPromoRepo)
        {
            $briefs=[];
            $promo=$promoRepo->findOneBy(["id"=>$idPromo]);
            if ($promo){
                foreach ($promo->getBriefMaPromo() as $briefMaPromo){ 
                   $briefs[]=$briefMaPromo->getBrief(); 
                }
                
                 foreach ($briefs as $brief) {
                     $id=$brief->getId();
                     if ($id==$idBrief) {
                         return $this->json($brief,Response::HTTP_OK,[],['groups'=>['brief:read','brief:read2','formateur:read','livrableAttendus:read','tag:read','etatBriefGroupe:read','ressources:read','niveaux:read']]);  
                     }
                } 
                return $this->json(["message"=>"Ce Ressource n'existe Pas"],Response::HTTP_NOT_FOUND); 
            }
        }
    /**
     * @Route("/api/formateurs/promo/{idPromo}/groupe/{idGroupe}/briefs", name="getGroupeBriefs", methods={"GET"})
     */
    public function getGroupeBriefs($idPromo, $idGroupe,PromoRepository $promoRepo, GroupPromoRepository $groupeRepo, BriefRepository $briefRepo)
    {
        $groupes=[];
        $briefs=[];
        $promo=$promoRepo->findOneBy(["id"=>$idPromo]);
        $groupe=$groupeRepo->find($idGroupe);
        $tab=array();
        if ($promo) {
            foreach ($promo->getGroupPromos() as $groupePromo) {
                if ($groupePromo->getId()==$groupe->getId()) {
                  foreach ($groupePromo->getEtatBriefGroup() as $etatbriefGroupe) {
                      $tab[]=$etatbriefGroupe->getBrief();
                  } 
                     
                }
            }
     return $this->json($tab,Response::HTTP_OK,[],['groups'=>['brief:read','brief:read2','formateur:read','livrableAttendus:read','tag:read','etatBriefGroupe:read','ressources:read','niveaux:read']]);
             }   
            
    }
}

