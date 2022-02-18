<?php

namespace App\Entity;

use App\Repository\ProduitPlatRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * @ORM\Entity(repositoryClass=ProduitPlatRepository::class)
 */
class ProduitPlat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_produitplat;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_categorie;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="le nom du plat ou du boisson est obligatoire")
     */
    private $nom_produitplat;

    /**
     * @ORM\Column(type="float")
     * @Assert\Positive
     * @Assert\NotBlank(message="le prix est obligatoire")
     */
    private $prix;

    public function getIdProduitPlat(): ?int
    {
        return $this->id_produitplat;
    }

    public function getIdCategorie(): ?int
    {
        return $this->id_categorie;
    }

    public function setIdCategorie(int $id_categorie): self
    {
        $this->id_categorie = $id_categorie;

        return $this;
    }

    public function getNomProduitplat(): ?string
    {
        return $this->nom_produitplat;
    }

    public function setNomProduitplat(string $nom_produitplat): self
    {
        $this->nom_produitplat = $nom_produitplat;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

     //    Relations

    /**
     * @ORM\ManyToMany(targetEntity=Restaurant::class, mappedBy="produitplats", cascade={"persist"})
     * @ORM\JoinColumn(name="id_restaurant", referencedColumnName="id_restaurant")
     *
     */
    private $restaurants;

    public function __construct()
    {
        $this->restaurants = new ArrayCollection();
    }


    /**
     * @return Collection|Restaurant[]|null
     */
    public function getRestaurants(): Collection
    {
        return $this->restaurants;
    }
  /*  public function setRestaurants(?Restaurant $restaurants): self
    {
        $this->restaurants = $restaurants;

        return $this;
    }*/


    public function addRestaurant(Restaurant $restaurant): self
    {
        if (!$this->restaurants->contains($restaurant))
        {
            $this->restaurants[] = $restaurant;
            $restaurant->addProduitPlat($this);
        }

        return $this;
    }

    public function removeRestaurant(Restaurant $restaurant): self
    {
        if (!$this->restaurants->contains($restaurant)) {
            $restaurant->removeProduitPlat($this);
        }
        return $this;

    }


    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="produitplats")
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="id_categorie", referencedColumnName="id_categorie" , onDelete="CASCADE")
     * })
     */
    private $categories;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $desc_produitplat;
    public function getCategories(): ?Categorie
    {
        return $this->categories;
    }

    public function setCategories(?Categorie $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

    public function getDescProduitplat(): ?string
    {
        return $this->desc_produitplat;
    }

    public function setDescProduitplat(?string $desc_produitplat): self
    {
        $this->desc_produitplat = $desc_produitplat;

        return $this;
    }




}
