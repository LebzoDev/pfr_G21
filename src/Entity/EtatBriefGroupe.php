<?php

namespace App\Entity;

use App\Repository\EtatBriefGroupeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EtatBriefGroupeRepository::class)
 */
class EtatBriefGroupe
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
    private $statut;

    /**
     * @ORM\OneToMany(targetEntity=Brief::class, mappedBy="etatBriefGroupe")
     */
    private $briefs;

    /**
     * @ORM\OneToMany(targetEntity=GroupPromo::class, mappedBy="etatBriefGroupe")
     */
    private $groupPromos;

    public function __construct()
    {
        $this->briefs = new ArrayCollection();
        $this->groupPromos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * @return Collection|Brief[]
     */
    public function getBriefs(): Collection
    {
        return $this->briefs;
    }

    public function addBrief(Brief $brief): self
    {
        if (!$this->briefs->contains($brief)) {
            $this->briefs[] = $brief;
            $brief->setEtatBriefGroupe($this);
        }

        return $this;
    }

    public function removeBrief(Brief $brief): self
    {
        if ($this->briefs->contains($brief)) {
            $this->briefs->removeElement($brief);
            // set the owning side to null (unless already changed)
            if ($brief->getEtatBriefGroupe() === $this) {
                $brief->setEtatBriefGroupe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|GroupPromo[]
     */
    public function getGroupPromos(): Collection
    {
        return $this->groupPromos;
    }

    public function addGroupPromo(GroupPromo $groupPromo): self
    {
        if (!$this->groupPromos->contains($groupPromo)) {
            $this->groupPromos[] = $groupPromo;
            $groupPromo->setEtatBriefGroupe($this);
        }

        return $this;
    }

    public function removeGroupPromo(GroupPromo $groupPromo): self
    {
        if ($this->groupPromos->contains($groupPromo)) {
            $this->groupPromos->removeElement($groupPromo);
            // set the owning side to null (unless already changed)
            if ($groupPromo->getEtatBriefGroupe() === $this) {
                $groupPromo->setEtatBriefGroupe(null);
            }
        }

        return $this;
    }
}
