<?php

namespace App\Entity;

use App\Entity\Apprenant;
use App\Entity\BriefMaPromo;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BriefApprenantRepository;
use App\Controller\CompetencesAcquisesController;

/**
 * @ApiResource(
 *   itemOperations={
 *      "get","put","patch",
 *      "apprenant_nombre"={
 *          "method"="GET",
 *          "path"="apprenants/{id}/promo/{idPromo}/referentiel/{idRef}/statistiques/briefs",
 *          "controller"="App\Controller\CompetencesAcquisesController::statistique_nombre",
 *      },
 * })
 * @ORM\Entity(repositoryClass=BriefApprenantRepository::class)
 */
class BriefApprenant
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $affecte;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $rendu;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $valide;

    /**
     * @ORM\ManyToOne(targetEntity=BriefMaPromo::class, inversedBy="briefApprenants")
     * @ORM\JoinColumn(nullable=false)
     */
    private $briefMaPromo;

    /**
     * @ORM\ManyToOne(targetEntity=Apprenant::class, inversedBy="briefApprenants")
     * @ORM\JoinColumn(nullable=false)
     */
    private $apprenant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAffecte(): ?bool
    {
        return $this->affecte;
    }

    public function setAffecte(?bool $affecte): self
    {
        $this->affecte = $affecte;

        return $this;
    }

    public function getRendu(): ?bool
    {
        return $this->rendu;
    }

    public function setRendu(?bool $rendu): self
    {
        $this->rendu = $rendu;

        return $this;
    }

    public function getValide(): ?bool
    {
        return $this->valide;
    }

    public function setValide(?bool $valide): self
    {
        $this->valide = $valide;

        return $this;
    }

    public function getBriefMaPromo(): ?BriefMaPromo
    {
        return $this->briefMaPromo;
    }

    public function setBriefMaPromo(?BriefMaPromo $briefMaPromo): self
    {
        $this->briefMaPromo = $briefMaPromo;

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
