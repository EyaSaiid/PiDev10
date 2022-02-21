<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_categorie;

    /**
     * @ORM\Column(type="string", length=255)
     *@Assert\NotBlank(message="le nom de la categorie est obligatoire")
     * @Assert\Length(
     *      min = 3,
     *      max = 20,
     *      minMessage = "Le nombre de caractére minimal est {{ limit }}",
     *      maxMessage = "Le nombre de caractére maximal est {{ limit }} "
     * )
     */
    private $nom_categorie;

    public function getIdCategorie(): ?int
    {
        return $this->id_categorie;
    }

    public function getNomCategorie(): ?string
    {
        return $this->nom_categorie;
    }

    public function setNomCategorie(string $nom_categorie): self
    {
        $this->nom_categorie = $nom_categorie;

        return $this;
    }

    /*Relation*/

    /**
     * @ORM\OneToMany(targetEntity=ProduitPlat::class, mappedBy="categories")
     */
    private $produitplats;
    public function __construct()
    {
        $this->produitplats = new ArrayCollection();
    }

    /**
     * @return Collection|ProduitPlat[]|null
     */
    public function getProduitPlats(): Collection
    {
        return $this->produitplats;
    }

    public function addProduitPlat(ProduitPlat $produitplat): self
    {
        if (!$this->produitplats->contains($produitplat)) {
            $this->produitplats[] = $produitplat;
            $produitplat->setCategories($this);
        }

        return $this;
    }

        public function removeProduitPlat(ProduitPlat $produitplat): self
    {
        if ($this->produitplats->removeElement($produitplat)) {
            // set the owning side to null (unless already changed)
            if ($produitplat->getCategories() === $this) {
                $produitplat->setCategories(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return(string)$this->getNomCategorie();
    }
}
