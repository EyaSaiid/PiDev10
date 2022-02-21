<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message=" le champ nom est vide")
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
     */
    private $descriptionProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="Prix", type="decimal", precision=10, scale=2)
     *
     * @Assert\GreaterThan(
     *     value=0,
     *     message="Le prix ne doit pas être nul ou négatif"
     * )
     * @Assert\NotBlank(message="Veuillez entrer un Prix (exemple : 1.50) ")
     */
    private $prixProduit;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message=" le champs quantité est vide")
     *  @Assert\GreaterThanOrEqual(0,
     *     message=" le champs quantité doit être positif")
     */
    private $quantiteProduit;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="produits")
     * @Assert\NotBlank(message=" le champs categorie est vide")
     */
    private $Categorie;
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     *@ORM\Column(type="string", length=255)
     * @Assert\File()
     */
    private $photo;


    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }
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

    public function getCategorie(): ?Categorie
    {
        return $this->Categorie;
    }

    public function setCategorie(?Categorie $Categorie): self
    {
        $this->Categorie = $Categorie;

        return $this;
    }



}
