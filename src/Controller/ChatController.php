<?php

namespace App\Controller;

use DateTime;
use App\Entity\Chat;
use App\Repository\ChatRepository;
use App\Repository\PromoRepository;
use App\Repository\ApprenantRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UtilisateurRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ChatController extends AbstractController
{
    private $repoChat;
    private $repoApp;
    private $repoPromo;
    private $manager;
    public function __construct(EntityManagerInterface $manager,ChatRepository $repoChat, ApprenantRepository $repoApp, PromoRepository $repoPromo){
        $this->repoChat =$repoChat;
        $this->repoApp = $repoApp;
        $this->repoPromo = $repoPromo;
        $this->manager = $manager;
    }
    /**
     * @Route("users/promo/{id}/apprenant/{idApp}/chats", name="chat_par_jour", methods={"GET"})
     */
    public function show_Chat($id, $idApp)
    {
        $chats = $this->repoChat->findBy(['promo'=>$id]);
        if (isset($chats)){
            return $this->json($chats,200);
        }else{
            return $this->json(['error'=>'Reverifier vos données entrées !!!'],404);
        }

    }

    /**
     * @Route("users/promo/{id}/utilisateur/{idUser}/chats", name="post_chat", methods={"POST"})
     */
    public function post_chat($id, $idUser,Request $request, UtilisateurRepository $repoUti)
    {
        $promo = $this->repoPromo->findOneBy(['id'=>$id]);
        $utilisateur = $repoUti->findOneBy(['id'=>$idUser]);
        if (!isset($utilisateur)) {
            return $this->json(['error'=>'Reverifier vos données entrées !!!'],404);
        }
        $data =$request->getContent();
        $message = json_decode($data);
        //dd($message->message); 
        if($message->message){
            $chat = new Chat();
            $chat->setMessage($message->message)
                 ->setUser($utilisateur)
                 ->setCreatedAt(new DateTime('now'))
                 ->setPromo($promo);
            $this->manager->persist($chat);
            $this->manager->flush();
            return $this->json($chat, 200);
        }else{
            return $this->json(['error'=>'Reverifier vos données entrées !!!'],404);
        }

    }

    /**
     * @Route("users/promo/{id}/apprenant/{idApp}/chats", name="post_chat", methods={"POST"})
     */
    public function post_chat_app($id, $idApp,Request $request, ApprenantRepository $repoUti)
    {
        $promo = $this->repoPromo->findOneBy(['id'=>$id]);
        $apps = $promo->getApprenants();
        foreach ($apps as $app) {
            if ($app->getMyId()==$idApp) {
                $apprenant = $app;
            }
        }
        if (!isset($apprenant)) {
            return $this->json(['error'=>'Reverifier vos données entrées !!!'],404);
        }
        $data =$request->getContent();
        $message = json_decode($data);
        //dd($message->message); 
        if($message->message){
            $chat = new Chat();
            $chat->setMessage($message->message)
                 ->setApprenant($apprenant)
                 ->setCreatedAt(new DateTime('now'))
                 ->setPromo($promo);
            $this->manager->persist($chat);
            $this->manager->flush();
            return $this->json($chat, 200);
        }else{
            return $this->json(['error'=>'Reverifier vos données entrées !!!'],404);
        }

    }
}
