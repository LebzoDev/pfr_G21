<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\LivrableAttenduApprenantRepository;
use App\Controller\LivrableAttenduApprenanntController;

/**
 * @ApiResource(
 *  collectionOperations={
 *      "get","post",
 *      "post_link"={
 *          "method"="POST",
 *          "path"="apprenants/{id}/groupe/livrables/{idLivra}",
 *          "controller"="App\Controller\LivrableAttenduApprenanntController::post_link",
 *      },
 *      "post_links"={
 *          "method"="POST",
 *          "path"="apprenants/{id}/groupe/{idGroup}/livrables/{idLivra}",
 *          "controller"="App\Controller\LivrableAttenduApprenanntController::post_links",
 *      },
 * })
 * @ORM\Entity(repositoryClass=LivrableAttenduApprenantRepository::class)
 */
class LivrableAttenduApprenant
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
    private $url;

    /**
     * @ORM\ManyToOne(targetEntity=LivrableAttendu::class, inversedBy="livrableAttenduApprenants")
     * @ORM\JoinColumn(nullable=false)
     */
    private $livrablAttendu;

    /**
     * @ORM\ManyToOne(targetEntity=Apprenant::class, inversedBy="livrableAttenduApprenants")
     * @ORM\JoinColumn(nullable=false)
     */
    private $apprenant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getLivrablAttendu(): ?LivrableAttendu
    {
        return $this->livrablAttendu;
    }

    public function setLivrablAttendu(?LivrableAttendu $livrablAttendu): self
    {
        $this->livrablAttendu = $livrablAttendu;

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
