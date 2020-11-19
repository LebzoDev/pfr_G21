<?php

namespace App\Entity;

use App\Entity\Apprenant;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiFilter;
use App\Repository\ProfilSortieRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Core\Serializer\Filter\GroupFilter;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *  collectionOperations={
 *      "get","post",
 *      "Add_ProfilSortie"={
 *          "method"="POST",
 *          "security"="(is_granted('ROLE_FORMATEUR') or is_granted('ROLE_ADMIN') or is_granted('ROLE_CM'))",
 *          "security_message"="Vous n'avez pas acces à cette ressource",
 *          "path"="admin/profilsorties",
 *          "controller"="App\Controller\ProfilSortieController::addProfilSortie"
 *      },
 *      "Affiche_ProfilSortie"={
 *          "method"="GET",
 *          "security"="(is_granted('ROLE_FORMATEUR') or is_granted('ROLE_ADMIN') or is_granted('ROLE_CM'))",
 *          "security_message"="Vous n'avez pas acces à cette ressource",
 *          "path"="admin/profilsorties",
 *          "controller"="App\Controller\ProfilSortieController::afficheProfilSortie"
 *      },
 *      "Affiche_ProfilSortie_Promo"={
 *      "method"="GET",
 *      "path"="admin/promo/{id}/profilsorties",
 *      "controller"="App\Controller\ProfilSortieController::afficheProfilSortiePromo"
 *      },
 *      "Affiche_Apprenant_ProfilSortie"={
 *      "method"="GET",
 *      "path"="/admin/profilsorties/{id}",
 *      "controller"="App\Controller\ProfilSortieController::afficheApprenantsProfilSortie"
 *      },
 *      "Affiche_Apprenant_ProfilSortie_Promo"={
 *      "method"="GET",
 *      "path"="/admin/promo/{id}/profilsortie/{idp}",
 *      "controller"="App\Controller\ProfilSortieController::afficheApprenantsProfilSortiePromo"
 *      }
 * },
 *     itemOperations={
 *      "put","get",
 *      "ModifierProfilSortie"={
 *      "security"="(is_granted('ROLE_FORMATEUR') or is_granted('ROLE_ADMIN') or is_granted('ROLE_CM'))",
 *       "security_message"="Vous n'avez pas acces à cette ressource",
 *      "method"="PUT",
 *      "path"="/admin/profilsortie/{id}",
 *      "controller"="App\Controller\ProfilSortieController::modifierProfilSortie"
 * }
 * }
 * )
 * @ORM\Entity(repositoryClass=ProfilSortieRepository::class)
 * 
 */
class ProfilSortie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups("affiche")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("affiche")
     */
    private $libelleProfilSortie;

    /**
     * @ORM\OneToMany(targetEntity=Apprenant::class, mappedBy="profilSortie")
     */
    private $apprenants;

    public function __construct()
    {
        $this->apprenants = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleProfilSortie(): ?string
    {
        return $this->libelleProfilSortie;
    }

    public function setLibelleProfilSortie(string $libelleProfilSortie): self
    {
        $this->libelleProfilSortie = $libelleProfilSortie;

        return $this;
    }

    /**
     * @return Collection|Apprenant[]
     */
    public function getApprenants(): Collection
    {
        return $this->apprenants;
    }

    public function addApprenant(Apprenant $apprenant): self
    {
        if (!$this->apprenants->contains($apprenant)) {
            $this->apprenants[] = $apprenant;
            $apprenant->setProfilSortie($this);
        }

        return $this;
    }

    public function removeApprenant(Apprenant $apprenant): self
    {
        if ($this->apprenants->contains($apprenant)) {
            $this->apprenants->removeElement($apprenant);
            // set the owning side to null (unless already changed)
            if ($apprenant->getProfilSortie() === $this) {
                $apprenant->setProfilSortie(null);
            }
        }

        return $this;
    }
}
