<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ChatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *  collectionOperations={
 *      "get","post",
 *      "post_chat"={
 *          "method"="POST",
 *          "security"="(is_granted('ROLE_FORMATEUR') or is_granted('ROLE_ADMIN') or is_granted('ROLE_CM'))",
 *          "security_message"="Vous n'avez pas acces à cette ressource",
 *          "path"="users/promo/{id}/utilisateur/{idUser}/chats",
 *          "controller"="App\Controller\ChatController::post_chat"
 *      },
 *      "post_chat_app"={
 *          "method"="POST",
 *          "path"="users/promo/{id}/apprenant/{idApp}/chats",
 *          "controller"="App\Controller\ChatController::post_chat_app"
 *      },
 *      "show_chat"={
 *          "method"="GET",
 *          "security"="(is_granted('ROLE_FORMATEUR') or is_granted('ROLE_ADMIN') or is_granted('ROLE_CM'))",
 *          "security_message"="Vous n'avez pas acces à cette ressource",
 *          "path"="users/promo/{id}/apprenant/{idApp}/chats",
 *          "controller"="App\Controller\ChatController::show_chat"
 *      },
 * })
 * @ORM\Entity(repositoryClass=ChatRepository::class)
 */
class Chat
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $message;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $PiecesJointes;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class, inversedBy="chats")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Promo::class, inversedBy="chats")
     * @ORM\JoinColumn(nullable=false)
     */
    private $promo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity=Apprenant::class, inversedBy="chatss")
     */
    private $apprenant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getPiecesJointes()
    {
        return $this->PiecesJointes;
    }

    public function setPiecesJointes($PiecesJointes): self
    {
        $this->PiecesJointes = $PiecesJointes;

        return $this;
    }

    public function getUser(): ?Utilisateur
    {
        return $this->user;
    }

    public function setUser(?Utilisateur $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getPromo(): ?Promo
    {
        return $this->promo;
    }

    public function setPromo(?Promo $promo): self
    {
        $this->promo = $promo;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getApprenant(): ?Apprenant
    {
        return $this->apprenant;
    }

    public function setApprenant(?Apprenant $apprenant): self
    {
        $this->apprenant = $apprenant;

        return $this;
    }
}
