<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\Category;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;




/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 * @UniqueEntity(fields={"nomProduit"},message="le produit existe déjà")
 * @ORM\Table(name="produit", indexes={@ORM\Index(columns={"nom_produit", "description_produit"}, flags={"fulltext"})})
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * Groups("produit")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message=" le champ nom est vide")
     *  Groups("produit")
     */
    private $nomProduit;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Assert\NotBlank(message=" le champ description est vide")
     *  @Assert\Length(
     *      min = 20,
     *      max = 150,
     *      minMessage = "La description doit avoir minimum{{ limit }} caractères",
     *      maxMessage = "La description doit avoir maximum{{ limit }} caractères"
     * )
     *  Groups("produit")
     */
    private $descriptionProduit;

    /**
     * @var string
     * @ORM\Column(name="Prix", type="decimal", precision=10, scale=2)
     * @Assert\GreaterThan(
     *     value=0,
     *     message="Le prix ne doit pas être nul ou négatif"
     * )
     * @Assert\NotBlank(message="Veuillez entrer un Prix (exemple : 1.50) ")
     *  Groups("produit")
     */
    private $prixProduit;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message=" le champs quantité est vide")
     *  @Assert\GreaterThanOrEqual(0,
     *     message=" le champs quantité doit être positif")
     *  Groups("produit")
     */
    private $quantiteProduit;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Commande_produit", mappedBy="produits",cascade={"persist","remove"})
     */
    private $commandes;


    


    

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="produits")
     * @Assert\NotBlank(message=" le champs categorie est vide")
     *  Groups("produit")
     */
    private $Categorie;




    /**
     *@ORM\Column(type="string", length=255)
     *@Assert\NotBlank(message=" le champs photo est vide")
     * Groups("produit")
     */
   // private $photo;


    /**
     * @ORM\OneToMany(targetEntity=Images::class, mappedBy="produit",orphanRemoval=true, cascade={"persist"})
     * @Assert\NotBlank(message=" le champs images est vide")
     */
    private $images;
  
  
  
  
  
  public function __construct()
    {
        $this->paniers = new ArrayCollection();
        $this->commandes = new ArrayCollection();
        $this->images = new ArrayCollection();
    }
  
  
  

    public function getId(): ?int
    {
        return $this->id;
    }

    //public function getPhoto()
  //  {
  //      return $this->photo;
   // }

   // public function setPhoto($photo)
   // {
    //    $this->photo = $photo;
     //   return $this;
    //}
    public function getNomProduit(): ?string
    {
        return $this->nomProduit;
    }

    public function setNomProduit(string $nomProduit): self
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    public function getDescriptionProduit(): ?string
    {
        return $this->descriptionProduit;
    }

    public function setDescriptionProduit(string $descriptionProduit): self
    {
        $this->descriptionProduit = $descriptionProduit;

        return $this;
    }

    public function getPrixProduit(): ?float
    {
        return $this->prixProduit;
    }

    public function setPrixProduit(float $prixProduit): self
    {
        $this->prixProduit = $prixProduit;

        return $this;
    }

    public function getQuantiteProduit(): ?int
    {
        return $this->quantiteProduit;
    }

    public function setQuantiteProduit(int $quantiteProduit): self
    {
        $this->quantiteProduit = $quantiteProduit;

        return $this;
    }


    /**
     * @return Collection|Commande[]
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commande $commande): self
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes[] = $commande;
            $commande->addProduit($this);

          }

        return $this;
    }
          
    public function getCategorie(): ?Category
    {
        return $this->Categorie;
    }

    public function setCategorie(?Category $Categorie): self
    {
        $this->Categorie = $Categorie;

        return $this;
    }

    /**
     * @return Collection|Images[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Images $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setProduit($this);
        }

        return $this;
    }


  
  
    public function removeCommande(Commande $commande): self
    {
        if ($this->commandes->removeElement($commande)) {
            $commande->removeProduit($this);
                  }

        return $this;
    }

  
  
    public function removeImage(Images $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getProduit() === $this) {
                $image->setProduit(null);
            }

        }

        return $this;
    }

}
