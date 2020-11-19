<?php

namespace App\Controller;

use DateTime;
use App\Entity\Promo;
use App\Entity\Referentiel;
use App\Entity\Commentaires;
use App\Entity\FilDeDiscussion;
use App\Entity\CompetencesValides;
use App\Repository\PromoRepository;
use App\Repository\NiveauRepository;
use App\Repository\ApprenantRepository;
use App\Repository\CompetenceRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ReferentielRepository;
use App\Repository\UtilisateurRepository;
use App\Repository\BriefApprenantRepository;
use App\Repository\LivrablePartielRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CompetencesValidesRepository;
use Symfony\Component\Serializer\SerializerInterface;
use App\Repository\ApprenantLivrablePartielRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CompetencesAcquisesController extends AbstractController
{
    private $amanger;
    private $repoApp;
    private $repoComptVal;
    private $repoBriefApp;
    private $repoAppLivrablePartiel;
    private $repoUtilisateur;
    private $repo_Promo;
    public function __construct(PromoRepository $repo_Promo,UtilisateurRepository $repoUtilisateur,EntityManagerInterface $manager, ApprenantRepository $repoApp,CompetencesValidesRepository $repoComptVal, BriefApprenantRepository $repoBriefApp, ApprenantLivrablePartielRepository $repoAppLivrablePartiel){
        $this->manager = $manager;
        $this->repoApp = $repoApp;
        $this->repoComptVal = $repoComptVal;
        $this->repoBriefApp = $repoBriefApp;
        $this->repoAppLivrablePartiel = $repoAppLivrablePartiel;
        $this->repoUtilisateur = $repoUtilisateur;
        $this->repo_Promo = $repo_Promo;
    }
    /**
     * @Route("formateurs/promo/{id}/referentiel/{idRef}/competences", name="competences_acquises", methods={"GET"})
     */
    public function index($id,$idRef,ApprenantRepository $repoApprenant,ApprenantLivrablePartielRepository $repoApplivrablePartiel,CompetenceRepository $repoCompetence,NiveauRepository $repoNiveaux, CompetencesValidesRepository $repoComptVal)
    {
        //Mise à jour | Supprsion////////////
        $comptValides = $repoComptVal->findAll();
        foreach ($comptValides as $product) {
            $this->manager->remove($product);
        }
        $this->manager->flush();

        //Recuperer tous les livrables partiels de chaque apprenant
       $app_livrable_partiel = $repoApplivrablePartiel->findAll();
       if (!empty($app_livrable_partiel)) {
            foreach ($app_livrable_partiel as $alps) {
                    if($alps->getValide()){
                        $tab2[]=$alps;
                    }
            }
        }
        //Recuperer le promo qui pour id=$id et pour referentiel=$idRef
        $promo = $this->repo_Promo->findOneBy(['id'=>$id,'referentiel'=>$idRef]);
        if (isset($promo)) {
             $apprenants = $promo->getApprenants();
            foreach ($apprenants as $apprenant) {
                $tab[]=$apprenant;
            }
        }else{
            return $this->json(['message'=>'error',404]);
        }
    

    ///////////////////////////////////////////////////////
    $tabApp=array();
    $apprenants_ = $repoApprenant->findAll();
    foreach($apprenants_ as $apprenant){
           foreach($tab2 as $applivrable){
             if ($apprenant===($applivrable->getApprenant())) {
                 if($applivrable->getValide()){
                    $livrablePartiel = $applivrable->getLivrablePartiel();
                    $niveau = $livrablePartiel->getNiveau();
                    $competence = $niveau->getCompetence();   
                    $idapprenant = $apprenant->getMyId();
                    $idcompt = $competence->getId();
                    $comptValide = $this->repoComptVal->findOneBy(['apprenant'=>$idapprenant,'competence'=>$idcompt]);
                    if (!isset($comptValide)) {
                        $comptValide = new CompetencesValides();
                    }
                    $comptValide->setApprenant($apprenant);
                    $comptValide->setCompetence($competence);
                    if (($niveau->getLibelle())=="Niveau0") {
                        $comptValide->setNiveau1(true);
                        if (!($comptValide->getNiveau2())) {
                            $comptValide->setNiveau2(false);
                        }
                        if (!($comptValide->getNiveau3())) {
                            $comptValide->setNiveau3(false);
                        }
                    }elseif (($niveau->getLibelle())=="Niveau1") {
                        $comptValide->setNiveau2(true);
                        if (!($comptValide->getNiveau1())) {
                            $comptValide->setNiveau1(false);
                        }
                        if (!($comptValide->getNiveau3())) {
                            $comptValide->setNiveau3(false);
                        }
                    }else{
                        if (!($comptValide->getNiveau1())) {
                            $comptValide->setNiveau1(false);
                        }
                        if (!($comptValide->getNiveau2())) {
                            $comptValide->setNiveau2(false);
                        }
                        $comptValide->setNiveau3(true);
                    }
                    $apprenant->addCompetencesValide($comptValide);
                    $this->manager->persist($comptValide);
                    $this->manager->flush();
                 }
             }   
            
           }
    }
   $this->manager->flush();
   $apprenants__ = $repoApprenant->findBy(['promo'=>$id]);
   return $this->json($apprenants__,200,[],['groups'=>'post:apprenant']);
    ////////////////////////////////////////////////////////////////////////
}
/**
     * @Route("apprenant/{apprenantId}/promo/{id}/referentiel/{idRef}/competences", name="competences_acquises_apprenant", methods={"GET"})
     */
    public function index1($id,$apprenantId,$idRef,ApprenantRepository $repoApprenant,ApprenantLivrablePartielRepository $repoApplivrablePartiel,CompetenceRepository $repoCompetence,NiveauRepository $repoNiveaux, CompetencesValidesRepository $repoComptVal)
    {
        $promo = $this->repo_Promo->findOneBy(['id'=>$id,'referentiel'=>$idRef]);
        if (isset($promo)) {
             $apprenants = $promo->getApprenants();
             if(!empty($apprenants)){
                foreach ($apprenants as $apprenant) {
                    if (($apprenant->getId())==$apprenantId) {
                        $apprenant_ =  $apprenant;
                    }
                }
            }
        }

        if (isset($apprenant_))
        {
            return $this->json($apprenant_,200,[],['groups'=>'post:apprenant']);
        }else{
            return $this->json(['message'=>'error'],404);
        }
    }
    /**
     * @Route("formateurs/promo/{id}/referentiel/{idRef}/statistiques/competences" , name="statistiques", methods={"GET"})
     */
    public function statistiques($id,$idRef,CompetenceRepository $repoCompetence,ReferentielRepository $repoReferentiel,PromoRepository $repoPromo,ApprenantRepository $repoApprenant,CompetencesValidesRepository $repoComptVal){
        $promo = $repoPromo->findOneBy(['id'=>$id,'referentiel'=>$idRef]);
        if(!isset($promo)){
            return $this->json(Response::HTTP_NOT_FOUND);
        }
        $referentiel = $promo->getReferentiel();
        $apprenants_ = $promo->getApprenants();
        foreach ($apprenants_ as $apprenant)
        {
            $tabApprenants[]=$apprenant;
        }
        $competencesValides = $repoComptVal->findAll();
        $tabCompetencesValidesPromo=array();                             
        foreach ($competencesValides as $competenceValide)
        {
            if(in_array($competenceValide->getApprenant(),$tabApprenants))
            {
                $tabCompetencesValidesPromo[]=$competenceValide;
            }
        }
        if (isset($referentiel)) {
           $groupCompetences = $referentiel->getCompetenceVisees();
            $tabCompetences =array();
           if (!empty($groupCompetences)) {
               foreach ($groupCompetences as $groupCompetence) {
                   $competences = $groupCompetence->getCompetences();
                   foreach ($competences as $competence) {
                       if(!in_array($competence,$tabCompetences)){
                            $tabCompetences[]=$competence;
                    }
                   }
               }
           }
        }
        if(count($tabCompetences)>0){
        foreach ($tabCompetences as $key) {
            $id = $key->getId();
            $tabs['competence'.$id]['niveau1']=0;
            $tabs['competence'.$id]['niveau2']=0;
            $tabs['competence'.$id]['niveau3']=0;
            foreach ($tabCompetencesValidesPromo as $value) {
                $j=$k=$l=0;
                if($key==$value->getCompetence()){
                  
                    if($value->getNiveau1()==true){
                        $j++;
                        $tabs['competence'.$id]['niveau1']=$j;
                    }
                    if($value->getNiveau2()==true){
                        $k++;
                        $tabs['competence'.$id]['niveau2']=$k;
                    }
                    if($value->getNiveau3()==true){
                        $l++;
                        $tabs['competence'.$id]['niveau3']=$l;
                    }
                }
            }
        }
    }
       if (isset($tabs)) {
           return $this->json($tabs,200,[]);
       }
       
    }
    //Brief Apprenant Entity
    /**
     * @Route("apprenants/{id}/promo/{idPromo}/referentiel/{idRef}/statistiques/briefs", name="apprennant_nombre", methods={"GET"})
     */
    public function statistique_nombre($id,$idPromo,$idRef, SerializerInterface $serializer){
        $apprenants = $this->repoApp->findBy(['promo'=>$idPromo]);
        foreach ($apprenants as $apprenant_) {
            if ($apprenant_->getMyId()==$id){
                $apprenant = $apprenant_;
            }
        }
        if (!isset($apprenant)) {
            return $this->json(Response::HTTP_NOT_FOUND);
        }else{
            $briefApprenants =  $this->repoBriefApp->findBy(['apprenant'=>$id]);
            $tab['Nombre_Affecte']= $tab['Nombre_Rendu']= $tab['Nombre_Valide']=0;
            $j=$k=$l=0;
        foreach ($briefApprenants as $key) {
            if ($key->getApprenant()==$apprenant) {
                if($key->getAffecte()==true){
                    $j++;
                    $tab['Nombre_Affecte']=$j;
                }
                if($key->getRendu()==true){
                    $k++;
                    $tab['Nombre_Rendu']=$k;
                }
                if($key->getValide()==true){
                    $l++;
                    $tab['Nombre_Valide']=$l;
                }
            }
        }
        $statistiques = $serializer->normalize($apprenant,null,['groups'=>'post:apprenant']);
        $statistiques['statistique']=$tab;
        return $this->json($statistiques,200,[]);
    }
}

    /**
     * @Route("formateurs/livrablepartiels/{id}/commentaires", name="fil_de_discussion", methods={"POST"})
     */
    public function filDeDiscussion($id,Request $request){
        $apprenantLivrablePartiel = $this->repoAppLivrablePartiel->findOneBy(['id'=>$id]);
        $fdd = $apprenantLivrablePartiel->getFilDeDiscussion();
        if(!isset($fdd)){
            $fil_de_discussion = new FilDeDiscussion();
            $fil_de_discussion->setApprenantLivrablePartiel($apprenantLivrablePartiel);
            $this->manager->persist($fil_de_discussion);
            $data = $request->getContent();
            if (!empty($data)) {
                $infos = json_decode($data);
                $commentaire = new Commentaires();
                $commentaire->setFilDeDiscussion($fil_de_discussion);
                $commentaire->setDescription($infos->description);
                $commentaire->setCreateAtTime(new DateTime('now'));
                if(isset($infos->idFormateur)){
                    $id = $infos->idFormateur;
                    $formateur = $this->repoUtilisateur->findOneBy(['id'=>$id]);
                    if(!isset($formateur)){
                        $commentaire->setFormateur($formateur);
                    }
                }
                $this->manager->persist($commentaire);
            }
            $this->manager->flush();
            return $this->json($commentaire,200,[]);
            
        }else{
            $data = $request->getContent();
            if (!empty($data)) {
                $infos = json_decode($data);
                $commentaire = new Commentaires();
                $commentaire->setFilDeDiscussion($fdd);
                $commentaire->setDescription($infos->description);
                $commentaire->setCreateAtTime(new DateTime('now'));
                if(isset($infos->idFormateur)){
                    $id = $infos->idFormateur;
                    $formateur = $this->repoUtilisateur->findOneBy(['id'=>$id]);
                    if(!isset($formateur)){
                        $commentaire->setFormateur($formateur);
                    }
                }
                $this->manager->persist($commentaire);
            }
            $this->manager->flush();
            return $this->json($commentaire,200,[]);
        }
    }
    
}