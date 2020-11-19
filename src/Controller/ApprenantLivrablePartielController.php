<?php

namespace App\Controller;

use DateTime;
use App\Entity\Apprenant;
use App\Entity\LivrablePartiel;
use App\Repository\BriefRepository;
use App\Repository\NiveauRepository;
use App\Repository\ApprenantRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\LivrablePartielRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ApprenantLivrablePartielRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApprenantLivrablePartielController extends AbstractController
{
    private $em;
    private $repoBrief;
    public function __construct(EntityManagerInterface $em, BriefRepository $repoBrief){
        $this->em=$em;
        $this->repoBrief = $repoBrief;
    }
    /**
    * @Route("apprenants/{id}/livrablepartiels/{livrablePartielId}", name="modifier_ApplivrablePartiel", methods={"PUT"})
    */
    public function update_AppLivrablePartiel($id,$livrablePartielId,Request $request,ApprenantLivrablePartielRepository $repo, ApprenantRepository $repoApprenant, LivrablePartielRepository $repoLivrablePartiel){
        $appLivrablePartiels = $repo->findAll();
        $apprenants = $repoApprenant->findAll();
        foreach($apprenants as $apprenant_){
            if($apprenant_->getMyId()==$id){
                $apprenant = $apprenant_;
            }
        }
        $livrablePartiel = $repo->findBy(['id'=>$livrablePartielId]);
       
        if(!empty($appLivrablePartiels) && !empty($apprenant) && !empty($livrablePartiel)){
            foreach ($appLivrablePartiels as $appLivrablePartiel) {
                $id1 =$appLivrablePartiel->getLivrablePartiel()->getId();
                $id2 = $appLivrablePartiel->getApprenant()->getMyId();
                if ($id1==$livrablePartielId) {
                    if ($id2==$id) {
                        $data=$request->getContent();
                        $tab=json_decode($data);
                        if (isset($tab->affecte)) {
                           $appLivrablePartiel->setAffecte($tab->affecte); 
                        }
                        if (isset($tab->rendu)) {
                            $appLivrablePartiel->setAffecte($tab->rendu); 
                        }
                        if (isset($tab->enRetard)) {
                            $appLivrablePartiel->setAffecte($tab->enRetard); 
                        }
                        if (isset($tab->aRefaire)) {
                            $appLivrablePartiel->setAffecte($tab->aRefaire); 
                        }
                        if (isset($tab->valide)) {
                            $appLivrablePartiel->setAffecte($tab->valide); 
                        }
                        $this->em->flush();
                        return $this->json($tab,200,[]);
                    }
                }
            }
        }else{
            return $this->json(['error'=>'Reverifier vos données entrées !!!'],404,[]);
        }
    }

    /**
     * @Route("api/formateurs/promo/{id}/brief/{briefId}/livrablepartiels", name="ajout_livrablePartiel_Brief", methods={"POST"})
     */
    public function add_livrablePartiel_Brief($id,$briefId,Request $request, NiveauRepository $repoNiveau){
        $brief = $this->repoBrief->findOneBy(['id'=>$briefId]);
        $livrablePart = new LivrablePartiel();
        //Recuperer les données d'un livrable Partiel
        $data=$request->getContent();
        $tab=json_decode($data);
        if (isset($tab->libelle)) {
            $livrablePart->setLibelle($tab->libelle);
           if (isset($tab->description))
           {
               $livrablePart->setDescription($tab->description);
            if (isset($tab->delai)){
                $livrablePart->setDelai(new DateTime($tab->delai));
            }
            if (isset($tab->type)){
                $livrablePart->setType($tab->type);
            }
            if (isset($tab->nombreRendu)) {
                $livrablePart->setNombreRendu($tab->nombreRendu);
            }
            if (isset($tab->nombreCorrige)){
                $livrablePart->setNombreCorrige($tab->nombreCorrige);
            }
            if (isset($tab->niveau)) {
               $niveau = $repoNiveau->findOneBy(['id'=>($tab->niveau)]);
                if(isset($niveau)){
                    $livrablePart->setNiveau($niveau);
                    $livrablePart->setBrief($brief);
                    $this->em->persist($livrablePart);
                    $this->em->flush();
                    return $this->json($livrablePart,Response::HTTP_OK);

                
                }
            }
            }
        }
        
    }
}
