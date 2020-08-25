<?php

namespace App\Entity;

use App\Entity\Brief;
use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\FormateurRepository;
use Doctrine\Common\Collections\Criteria;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=FormateurRepository::class)
 * @ApiResource(
 * attributes={
 *      "security"="is_granted('ROLE_FORMATEUR')",
 *      "security_message"="Vous n'avez pas acces à cette ressource"
 * },
 * )
 */
class Formateur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Groups("read")
     */
    private $matricule_Formateur;

    /**
     * @ORM\OneToMany(targetEntity=Brief::class, mappedBy="formateur")
     */
    private $briefs;

    public function __construct()
    {
        $this->briefs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculeFormateur(): ?string
    {
        return $this->matricule_Formateur;
    }

    public function setMatriculeFormateur(string $matricule_Formateur): self
    {
        $this->matricule_Formateur = $matricule_Formateur;

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
            $brief->setFormateur($this);
        }

        return $this;
    }

    public function removeBrief(Brief $brief): self
    {
        if ($this->briefs->contains($brief)) {
            $this->briefs->removeElement($brief);
            // set the owning side to null (unless already changed)
            if ($brief->getFormateur() === $this) {
                $brief->setFormateur(null);
            }
        }

        return $this;
    }

//     public function getBriefsByEtatBrouillon($etat)
// {
//      $criteria = Criteria::create()
//          ->where(Criteria::expr()->eq('etat_Brouillon_Assigne_Valide', $etat));
//      return $this->briefs->matching($criteria);
// }

    
}
