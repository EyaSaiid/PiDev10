<?php

namespace App\Entity;

use App\Repository\LivraisonRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=LivraisonRepository::class)
 */
class Livraison
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;








    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="livraisons", cascade={"persist"})
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Commande_produit", mappedBy="livraisons",cascade={"persist","remove"})
     */
    private $produits;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etat;
    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $total;
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $datecommande;
    /**
     * @ORM\ManyToOne(targetEntity=Commande::class, inversedBy="livraison")
     */
    private $commande;

    /**
     * @param $etat
     * @param $datecommande
     */
    public function __construct()
    {
        $this->etat = 'en attente';
        $this->datecommande = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getProduits()
    {
        return $this->produits;
    }

    /**
     * @param mixed $produits
     */
    public function setProduits($produits): void
    {
        $this->produits = $produits;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total): void
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getDatecommande()
    {
        return $this->datecommande;
    }

    /**
     * @param mixed $datecommande
     */
    public function setDatecommande($datecommande): void
    {
        $this->datecommande = $datecommande;
    }






    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(?Commande $commande): self
    {
        $this->commande = $commande;

        return $this;
    }


}
