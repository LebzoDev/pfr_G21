<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\LivrableAttenduApprenantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
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
     * @ORM\Column(type="string", length=255)
     */
    private $urlGithub;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $urlFigma;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $urlTrello;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $urlDeploiement;

    /**
     * @ORM\ManyToOne(targetEntity=LivrableAttendu::class, inversedBy="apprenant")
     */
    private $livrableAttendu;

    /**
     * @ORM\ManyToOne(targetEntity=Apprenant::class, inversedBy="livrableAttenduApprenants")
     */
    private $apprenant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrlGithub(): ?string
    {
        return $this->urlGithub;
    }

    public function setUrlGithub(string $urlGithub): self
    {
        $this->urlGithub = $urlGithub;

        return $this;
    }

    public function getUrlFigma(): ?string
    {
        return $this->urlFigma;
    }

    public function setUrlFigma(string $urlFigma): self
    {
        $this->urlFigma = $urlFigma;

        return $this;
    }

    public function getUrlTrello(): ?string
    {
        return $this->urlTrello;
    }

    public function setUrlTrello(string $urlTrello): self
    {
        $this->urlTrello = $urlTrello;

        return $this;
    }

    public function getUrlDeploiement(): ?string
    {
        return $this->urlDeploiement;
    }

    public function setUrlDeploiement(string $urlDeploiement): self
    {
        $this->urlDeploiement = $urlDeploiement;

        return $this;
    }

    public function getLivrableAttendu(): ?LivrableAttendu
    {
        return $this->livrableAttendu;
    }

    public function setLivrableAttendu(?LivrableAttendu $livrableAttendu): self
    {
        $this->livrableAttendu = $livrableAttendu;

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
