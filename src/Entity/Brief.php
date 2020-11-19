<?php

namespace App\Entity;

use App\Entity\Tag;
use App\Entity\Brief;
use App\Entity\Niveau;
use App\Entity\Ressource;
use App\Entity\Utilisateur;
use App\Entity\BriefMaPromo;
use App\Entity\EtatBriefGroupe;
use App\Entity\LivrableAttendu;
use App\Entity\LivrablePartiel;
use Doctrine\ORM\Mapping as ORM;
use App\Controller\BriefController;
use App\Repository\BriefRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Controller\ApprenantLivrablePartielController;

/**
 * @ApiResource(
 * collectionOperations ={
 *      "get","post",
 *      "ajout_livrablePartiel_Brief"={
 *      "method"="POST",
 *      "/formateurs/promo/{id}/brief/{briefId}/livrablepartiels",
 *      "controller"="App\Controller\ApprenantLivrablePartielController::add_livrablePartiel_Brief",
 *      },
 *      "get_briefs"={
 *          "method"="GET",
 *          "path"="/formateurs/briefs",
 *          "controller"="App\Controller\BriefController::getBriefs",
 *          "security"="(is_granted('ROLE_FORMATEUR') or is_granted('ROLE_ADMIN') or is_granted('ROLE_CM'))",
 *          "security_message"="Vous n'avez pas acces à cette ressource"
 *      },
 *      "get_formateur_briefs_brouillons"={
 *          "method"="GET",
 *          "path"="formateurs/{id}/briefs/brouillons",
 *          "controller"="App\Controller\BriefController::getBriefsBrouillons",
 *          "security"="(is_granted('ROLE_FORMATEUR') or is_granted('ROLE_ADMIN'))",
 *          "security_message"="Vous n'avez pas acces à cette ressource"
 *      },
 *      "get_formateur_briefs_valides"={
 *          "method"="GET",
 *          "path"="formateurs/{id}/briefs/valides",
 *          "controller"="App\Controller\BriefController::getBriefsValides",
 *          "security"="(is_granted('ROLE_FORMATEUR') or is_granted('ROLE_ADMIN'))",
 *          "security_message"="Vous n'avez pas acces à cette ressource"
 *         },
 *      "getBriefsPromo"={
 *          "method"="GET",
 *          "path"="/api/formateurs/promos/{id}/briefs",
 *          "controller"="Brief::class",
 *          "security"="(is_granted('ROLE_FORMATEUR') or is_granted('ROLE_ADMIN') or is_granted('ROLE_CM'))",
 *          "security_message"="Vous n'avez pas acces à cette ressource"
 *       },
 *      "getBriefsAssignesPromo"={
 *          "method"="GET",
 *          "path"="/api/apprenants/promos/{id}/briefs",
 *          "controller"="Brief::class"
 *       },
 *      "getOneBriefPromo"={
 *          "method"="GET",
 *          "path"="/api/formateurs/promo/{idPromo}/briefs/{idBrief}",
 *          "controller"="Brief::class",
 *          "security"="(is_granted('ROLE_FORMATEUR') or is_granted('ROLE_ADMIN') or is_granted('ROLE_CM'))",
 *          "security_message"="Vous n'avez pas acces à cette ressource"
 *      },
 *      "getGroupeBriefs"={
 *          "method"="GET",
 *          "path"="/api/formateurs/promo/{idPromo}/groupe/{idGroupe}/briefs",
 *          "controller"="Brief::class",
 *          "security"="(is_granted('ROLE_FORMATEUR') or is_granted('ROLE_ADMIN') or is_granted('ROLE_CM'))",
 *          "security_message"="Vous n'avez pas acces à cette ressource"
 *      },
 * },
 *  itemOperations={
 *      "put","get","patch",
 *      "modify_Brief"={
 *           "method"="PUT",
 *           "path"="formateurs/promo/{id}/brief/{idBrief}",
 *           "controller"="App\Controller\BriefController::modify_Brief",
 *           "security"="(is_granted('ROLE_FORMATEUR') or is_granted('ROLE_ADMIN'))",
 *           "security_message"="Vous n'avez pas acces à cette ressource"
 *      },
 * })
 * @ORM\Entity(repositoryClass=BriefRepository::class)
 */
class Brief
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups("brief:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("brief:read")
     */
    private $langue;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("brief:read")
     */
    private $nomBrief;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("brief:read")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("brief:read")
     */
    private $contexte;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("brief:read")
     */
    private $modalitePedagogique;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("brief:read")
     */
    private $modaliteEvaluation;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("brief:read")
     */
    private $critereEvaluation;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $imagePromo;

    /**
     * @ORM\Column(type="boolean")
     */
    private $archive;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("brief:read")
     */
    private $etat_brouillon_assigne_valide;

    /**
     * @ORM\Column(type="date")
     * @Groups("brief:read")
     */
    private $createAt;

    /**
     * @ORM\OneToMany(targetEntity=EtatBriefGroupe::class, mappedBy="brief")
     */
    private $etatBriefGroup;

    /**
     * @ORM\OneToMany(targetEntity=BriefMaPromo::class, mappedBy="brief", orphanRemoval=true)
     */
    private $briefMaPromo;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class, inversedBy="briefs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $formateur;

    /**
     * @ORM\ManyToMany(targetEntity=Tag::class, inversedBy="briefs")
     */
    private $tags;

    /**
     * @ORM\OneToMany(targetEntity=LivrableAttendu::class, mappedBy="brief", orphanRemoval=true)
     */
    private $livrableAttendus;

    /**
     * @ORM\OneToMany(targetEntity=Ressource::class, mappedBy="brief")
     */
    private $ressources;

    /**
     * @ORM\ManyToMany(targetEntity=Niveau::class, inversedBy="briefs")
     */
    private $niveaux;

    /**
     * @ORM\OneToMany(targetEntity=LivrablePartiel::class, mappedBy="brief")
     */
    private $livrablePartiels;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $close;

    public function __construct()
    {
        $this->etatBriefGroup = new ArrayCollection();
        $this->briefMaPromo = new ArrayCollection();
        $this->tags = new ArrayCollection();
        $this->livrableAttendus = new ArrayCollection();
        $this->ressources = new ArrayCollection();
        $this->niveaux = new ArrayCollection();
        $this->livrablePartiels = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLangue(): ?string
    {
        return $this->langue;
    }

    public function setLangue(string $langue): self
    {
        $this->langue = $langue;

        return $this;
    }

    public function getNomBrief(): ?string
    {
        return $this->nomBrief;
    }

    public function setNomBrief(string $nomBrief): self
    {
        $this->nomBrief = $nomBrief;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getContexte(): ?string
    {
        return $this->contexte;
    }

    public function setContexte(string $contexte): self
    {
        $this->contexte = $contexte;

        return $this;
    }

    public function getModalitePedagogique(): ?string
    {
        return $this->modalitePedagogique;
    }

    public function setModalitePedagogique(string $modalitePedagogique): self
    {
        $this->modalitePedagogique = $modalitePedagogique;

        return $this;
    }

    public function getModaliteEvaluation(): ?string
    {
        return $this->modaliteEvaluation;
    }

    public function setModaliteEvaluation(string $modaliteEvaluation): self
    {
        $this->modaliteEvaluation = $modaliteEvaluation;

        return $this;
    }

    public function getCritereEvaluation(): ?string
    {
        return $this->critereEvaluation;
    }

    public function setCritereEvaluation(string $critereEvaluation): self
    {
        $this->critereEvaluation = $critereEvaluation;

        return $this;
    }

    public function getImagePromo()
    {
        return $this->imagePromo;
    }

    public function setImagePromo($imagePromo): self
    {
        $this->imagePromo = $imagePromo;

        return $this;
    }

    public function getArchive(): ?bool
    {
        return $this->archive;
    }

    public function setArchive(bool $archive): self
    {
        $this->archive = $archive;

        return $this;
    }

    public function getEtatBrouillonAssigneValide(): ?string
    {
        return $this->etat_brouillon_assigne_valide;
    }

    public function setEtatBrouillonAssigneValide(string $etat_brouillon_assigne_valide): self
    {
        $this->etat_brouillon_assigne_valide = $etat_brouillon_assigne_valide;

        return $this;
    }

    public function getCreateAt(): ?\DateTimeInterface
    {
        return $this->createAt;
    }

    public function setCreateAt(\DateTimeInterface $createAt): self
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * @return Collection|EtatBriefGroupe[]
     */
    public function getEtatBriefGroup(): Collection
    {
        return $this->etatBriefGroup;
    }

    public function addEtatBriefGroup(EtatBriefGroupe $etatBriefGroup): self
    {
        if (!$this->etatBriefGroup->contains($etatBriefGroup)) {
            $this->etatBriefGroup[] = $etatBriefGroup;
            $etatBriefGroup->setBrief($this);
        }

        return $this;
    }

    public function removeEtatBriefGroup(EtatBriefGroupe $etatBriefGroup): self
    {
        if ($this->etatBriefGroup->contains($etatBriefGroup)) {
            $this->etatBriefGroup->removeElement($etatBriefGroup);
            // set the owning side to null (unless already changed)
            if ($etatBriefGroup->getBrief() === $this) {
                $etatBriefGroup->setBrief(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|BriefMaPromo[]
     */
    public function getBriefMaPromo(): Collection
    {
        return $this->briefMaPromo;
    }

    public function addBriefMaPromo(BriefMaPromo $briefMaPromo): self
    {
        if (!$this->briefMaPromo->contains($briefMaPromo)) {
            $this->briefMaPromo[] = $briefMaPromo;
            $briefMaPromo->setBrief($this);
        }

        return $this;
    }

    public function removeBriefMaPromo(BriefMaPromo $briefMaPromo): self
    {
        if ($this->briefMaPromo->contains($briefMaPromo)) {
            $this->briefMaPromo->removeElement($briefMaPromo);
            // set the owning side to null (unless already changed)
            if ($briefMaPromo->getBrief() === $this) {
                $briefMaPromo->setBrief(null);
            }
        }

        return $this;
    }

    public function getFormateur(): ?Utilisateur
    {
        return $this->formateur;
    }

    public function setFormateur(?Utilisateur $formateur): self
    {
        $this->formateur = $formateur;

        return $this;
    }

    /**
     * @return Collection|Tag[]
     */
    public function getTags(): Collection
    {
        return $this->tags;
    }

    public function addTag(Tag $tag): self
    {
        if (!$this->tags->contains($tag)) {
            $this->tags[] = $tag;
        }

        return $this;
    }

    public function removeTag(Tag $tag): self
    {
        if ($this->tags->contains($tag)) {
            $this->tags->removeElement($tag);
        }

        return $this;
    }

    /**
     * @return Collection|LivrableAttendu[]
     */
    public function getLivrableAttendus(): Collection
    {
        return $this->livrableAttendus;
    }

    public function addLivrableAttendu(LivrableAttendu $livrableAttendu): self
    {
        if (!$this->livrableAttendus->contains($livrableAttendu)) {
            $this->livrableAttendus[] = $livrableAttendu;
            $livrableAttendu->setBrief($this);
        }

        return $this;
    }

    public function removeLivrableAttendu(LivrableAttendu $livrableAttendu): self
    {
        if ($this->livrableAttendus->contains($livrableAttendu)) {
            $this->livrableAttendus->removeElement($livrableAttendu);
            // set the owning side to null (unless already changed)
            if ($livrableAttendu->getBrief() === $this) {
                $livrableAttendu->setBrief(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Ressource[]
     */
    public function getRessources(): Collection
    {
        return $this->ressources;
    }

    public function addRessource(Ressource $ressource): self
    {
        if (!$this->ressources->contains($ressource)) {
            $this->ressources[] = $ressource;
            $ressource->setBrief($this);
        }

        return $this;
    }

    public function removeRessource(Ressource $ressource): self
    {
        if ($this->ressources->contains($ressource)) {
            $this->ressources->removeElement($ressource);
            // set the owning side to null (unless already changed)
            if ($ressource->getBrief() === $this) {
                $ressource->setBrief(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Niveau[]
     */
    public function getNiveaux(): Collection
    {
        return $this->niveaux;
    }

    public function addNiveau(Niveau $niveau): self
    {
        if (!$this->niveaux->contains($niveau)) {
            $this->niveaux[] = $niveau;
        }

        return $this;
    }

    public function removeNiveau(Niveau $niveau): self
    {
        if ($this->niveaux->contains($niveau)) {
            $this->niveaux->removeElement($niveau);
        }

        return $this;
    }

    /**
     * @return Collection|LivrablePartiel[]
     */
    public function getLivrablePartiels(): Collection
    {
        return $this->livrablePartiels;
    }

    public function addLivrablePartiel(LivrablePartiel $livrablePartiel): self
    {
        if (!$this->livrablePartiels->contains($livrablePartiel)) {
            $this->livrablePartiels[] = $livrablePartiel;
            $livrablePartiel->setBrief($this);
        }

        return $this;
    }

    public function removeLivrablePartiel(LivrablePartiel $livrablePartiel): self
    {
        if ($this->livrablePartiels->contains($livrablePartiel)) {
            $this->livrablePartiels->removeElement($livrablePartiel);
            // set the owning side to null (unless already changed)
            if ($livrablePartiel->getBrief() === $this) {
                $livrablePartiel->setBrief(null);
            }
        }

        return $this;
    }

    public function getClose(): ?bool
    {
        return $this->close;
    }

    public function setClose(?bool $close): self
    {
        $this->close = $close;

        return $this;
    }
}
