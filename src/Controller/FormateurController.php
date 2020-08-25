<?php

namespace App\Controller;

use App\Entity\Formateur;
use App\Repository\BriefRepository;
use App\Repository\FormateurRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FormateurController extends AbstractController
{
     /**
     * @Route("formateurs/{id}/briefs/brouillons", name="get_formateur_brief_brouillons", methods={"GET"})
     */

    public function getFormateurBriefsBrouillons(Formateur $formateur, FormateurRepository $formateurRepo, BriefRepository $repo, SerializerInterface $serializer){
        //$data=$repo->findByEtatBrouillon("valide");

        // $briefs=$formateur->getBriefs();
        // $briefsJson=$serializer->serialize($briefs,"json");
        // $formateurJson=$serializer->serialize($formateur,"json");
        // return new JsonResponse($formateurJson,Response::HTTP_OK,[],true);
        $etat="brouillon";
        $briefs=$formateur->getBriefsByEtatBrouillon($etat);
        //dd($briefs);
        
        $briefsJson=$serializer->serialize($briefs,"json");
        dd($briefsJson);


}
}
