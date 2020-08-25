<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\BriefRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=BriefRepository::class)
 * @ApiResource(
 * attributes={
 *      "security"="is_granted('ROLE_FORMATEUR')",
 *      "security_message"="Vous n'avez pas acces à cette ressource"
 * },
 *  collectionOperations = {
 *      "get","post",
 *      "get_briefs"={
 *      "method"="GET",
 *      "path"="/formateurs/briefs",
 *      "controller"="App\Controller\BriefController::getBriefs",
 *      },
 *  "get_formateur_briefs_brouillons"={
 *  "method"="GET",
 *  "path"="formateurs/{id}/briefs/brouillons",
 *  "controller"="App\Controller\BriefController::getBriefsBrouillons",
 * },
 *  "get_formateur_briefs_valides"={
 *  "method"="GET",
 *  "path"="formateurs/{id}/briefs/valides",
 *  "controller"="App\Controller\BriefController::getBriefsValides",
 * },
 *  "getBriefsPromo"={
 *  "method"="GET",
 *  "path"="/api/formateurs/promo/{id}/briefs",
 *  "controller"="Brief::class",
 * },
 *      }
 * )
 */
class Brief
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"brief:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"brief:read"})
     */
    private $langue;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"brief:read"})
     */
    private $nomBrief;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"brief:read"})
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"brief:read"})
     */
    private $contexte;

    /**
     * @ORM\Column(type="string", length=255)
     * * @Groups({"brief:read"})
     */
    private $modalitePedagogique;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $critereEvaluation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $modaliteEvaluation;

    /**
     * @ORM\Column(type="blob")
     */
    private $imagePromo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statut;

    /**
     * @ORM\Column(type="boolean")
     */
    private $archiver;

    /**
     * @ORM\Column(type="datetime")
     * * @Groups({"brief:read"})
     */
    private $createAt;

    /**
     * @ORM\Column(type="string", length=255)
     * * @Groups({"brief:read"})
     */
    private $etat_Brouillon_Assigne_Valide;

    /**
     * @ORM\ManyToMany(targetEntity=LivrableAttendu::class, inversedBy="briefs")
     */
    private $livrableAttendu;

    /**
     * @ORM\ManyToMany(targetEntity=Tag::class, inversedBy="briefs")
     * @Groups({"brief:read"})
     */
    private $tag;

    /**
     * @ORM\OneToMany(targetEntity=Ressource::class, mappedBy="brief")
     * @Groups({"brief:read"})
     */
    private $ressource;

    /**
     * @ORM\ManyToMany(targetEntity=Niveau::class, inversedBy="briefs")
     * @Groups({"brief:read"})
     */
    private $niveau;

    /**
     * @ORM\ManyToOne(targetEntity=Formateur::class, inversedBy="briefs")
     * @Groups({"brief:read"})
     */
    private $formateur;

    /**
     * @ORM\OneToMany(targetEntity=BriefMaPromo::class, mappedBy="brief")
     */
    private $BriefMaPromo;

    /**
     * @ORM\ManyToOne(targetEntity=EtatBriefGroupe::class, inversedBy="briefs")
     */
    private $etatBriefGroupe;

    public function __construct()
    {
        $this->livrableAttendu = new ArrayCollection();
        $this->tag = new ArrayCollection();
        $this->ressource = new ArrayCollection();
        $this->niveau = new ArrayCollection();
        $this->BriefMaPromo = new ArrayCollection();
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

    public function getCritereEvaluation(): ?string
    {
        return $this->critereEvaluation;
    }

    public function setCritereEvaluation(string $critereEvaluation): self
    {
        $this->critereEvaluation = $critereEvaluation;

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

    public function getImagePromo()
    {
        return base64_encode(stream_get_contents($this->imagePromo));
    }

    public function setImagePromo($imagePromo): self
    {
        $this->imagePromo = $imagePromo;

        return $this;
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

    public function getArchiver(): ?bool
    {
        return $this->archiver;
    }

    public function setArchiver(bool $archiver): self
    {
        $this->archiver = $archiver;

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

    public function getEtatBrouillonAssigneValide(): ?string
    {
        return $this->etat_Brouillon_Assigne_Valide;
    }

    public function setEtatBrouillonAssigneValide(string $etat_Brouillon_Assigne_Valide): self
    {
        $this->etat_Brouillon_Assigne_Valide = $etat_Brouillon_Assigne_Valide;

        return $this;
    }

    /**
     * @return Collection|LivrableAttendu[]
     * * @Groups("read")
     */
    public function getLivrableAttendu(): Collection
    {
        return $this->livrableAttendu;
    }

    public function addLivrableAttendu(LivrableAttendu $livrableAttendu): self
    {
        if (!$this->livrableAttendu->contains($livrableAttendu)) {
            $this->livrableAttendu[] = $livrableAttendu;
        }

        return $this;
    }

    public function removeLivrableAttendu(LivrableAttendu $livrableAttendu): self
    {
        if ($this->livrableAttendu->contains($livrableAttendu)) {
            $this->livrableAttendu->removeElement($livrableAttendu);
        }

        return $this;
    }

    /**
     * @return Collection|Tag[]
     */
    public function getTag(): Collection
    {
        return $this->tag;
    }

    public function addTag(Tag $tag): self
    {
        if (!$this->tag->contains($tag)) {
            $this->tag[] = $tag;
        }

        return $this;
    }

    public function removeTag(Tag $tag): self
    {
        if ($this->tag->contains($tag)) {
            $this->tag->removeElement($tag);
        }

        return $this;
    }

    /**
     * @return Collection|Ressource[]
     * * @Groups("read")
     */
    public function getRessource(): Collection
    {
        return $this->ressource;
    }

    public function addRessource(Ressource $ressource): self
    {
        if (!$this->ressource->contains($ressource)) {
            $this->ressource[] = $ressource;
            $ressource->setBrief($this);
        }

        return $this;
    }

    public function removeRessource(Ressource $ressource): self
    {
        if ($this->ressource->contains($ressource)) {
            $this->ressource->removeElement($ressource);
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
    public function getNiveau(): Collection
    {
        return $this->niveau;
    }

    public function addNiveau(Niveau $niveau): self
    {
        if (!$this->niveau->contains($niveau)) {
            $this->niveau[] = $niveau;
        }

        return $this;
    }

    public function removeNiveau(Niveau $niveau): self
    {
        if ($this->niveau->contains($niveau)) {
            $this->niveau->removeElement($niveau);
        }

        return $this;
    }

    public function getFormateur(): ?Formateur
    {
        return $this->formateur;
    }

    public function setFormateur(?Formateur $formateur): self
    {
        $this->formateur = $formateur;

        return $this;
    }

    /**
     * @return Collection|BriefMaPromo[]
     */
    public function getBriefMaPromo(): Collection
    {
        return $this->BriefMaPromo;
    }

    public function addBriefMaPromo(BriefMaPromo $briefMaPromo): self
    {
        if (!$this->BriefMaPromo->contains($briefMaPromo)) {
            $this->BriefMaPromo[] = $briefMaPromo;
            $briefMaPromo->setBrief($this);
        }

        return $this;
    }

    public function removeBriefMaPromo(BriefMaPromo $briefMaPromo): self
    {
        if ($this->BriefMaPromo->contains($briefMaPromo)) {
            $this->BriefMaPromo->removeElement($briefMaPromo);
            // set the owning side to null (unless already changed)
            if ($briefMaPromo->getBrief() === $this) {
                $briefMaPromo->setBrief(null);
            }
        }

        return $this;
    }

    public function getEtatBriefGroupe(): ?EtatBriefGroupe
    {
        return $this->etatBriefGroupe;
    }

    public function setEtatBriefGroupe(?EtatBriefGroupe $etatBriefGroupe): self
    {
        $this->etatBriefGroupe = $etatBriefGroupe;

        return $this;
    }
}
