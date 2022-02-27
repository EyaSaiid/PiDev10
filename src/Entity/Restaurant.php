<?php

namespace App\Entity;

use App\Repository\RestaurantRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=RestaurantRepository::class)
 */
class Restaurant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("restaurant")
     */
    private $id_restaurant;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="le nom du restaurant est obligatoire")
     *  @Assert\Length(
     *      min = 3,
     *      max = 25,
     *      minMessage = "Le nombre de caractére minimal est {{ limit }}",
     *      maxMessage = "Le nombre de caractére maximal est {{ limit }} "
     * )
     * @Groups("restaurant")
     */
    private $nom_restaurant;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="la description du restaurant est obligatoire")
     * @Groups("restaurant")
     */
    private $desc_restaurant;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Positive(message="La capacité doit etre une valeur positive")
     * @Assert\NotBlank(message="vous devez inserer le nombre de place de votre restaurant")
     * * @Assert\Range(
     *      min = 1,
     *      max = 50,
     *      notInRangeMessage = "la capacite du restaurant doit etre entre {{ min }} et {{ max }}",
     * )
     * @Groups("restaurant")
     */
    private $capacite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(
     *      min = 8,
     *      max = 8,
     *      minMessage = "le numero du telephone doit contenir 8 numeros",
     *      maxMessage = "le numero du telephone doit contenir 8 numeros"
     * )
     *@Assert\NotBlank(message="le numero de telephone est obligatoire")
     * @Assert\Positive
     * @Groups("restaurant")
     */
    private $num_tel;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups("restaurant")
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="vous devez choisir la sepcialite de votre restaurant")
     * @Groups("restaurant")
     */
    private $specialite;

    public function getIdRestaurant(): ?int
    {
        return $this->id_restaurant;
    }

    public function getNomRestaurant(): ?string
    {
        return $this->nom_restaurant;
    }

    public function setNomRestaurant(string $nom_restaurant): self
    {
        $this->nom_restaurant = $nom_restaurant;

        return $this;
    }

    public function getDescRestaurant(): ?string
    {
        return $this->desc_restaurant;
    }

    public function setDescRestaurant(string $desc_restaurant): self
    {
        $this->desc_restaurant = $desc_restaurant;

        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): self
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function getNumTel(): ?string
    {
        return $this->num_tel;
    }

    public function setNumTel(?string $num_tel): self
    {
        $this->num_tel = $num_tel;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(?string $specialite): self
    {
        $this->specialite = $specialite;

        return $this;
    }


    //    Relations

    /**
     * @ORM\ManyToMany(targetEntity=ProduitPlat::class, inversedBy="restaurants")
     *  @ORM\JoinTable(name="Resto_produitplat",
     *     joinColumns={@ORM\JoinColumn(name="id_restaurant", referencedColumnName="id_restaurant")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_produitplat", referencedColumnName="id_produitplat")}
     *      )
     *@Groups("restaurant")
     */

    private $produitplats;
    public function __construct()
    {
        $this->produitplats = new ArrayCollection();
    }

    /**
     * @return Collection|ProduitPlat[]
     */
    public function getProduitPlats(): Collection
    {
        return $this->produitplats;
    }

    public function addProduitPlat(ProduitPlat $produitplat): self
    {
        if (!$this->produitplats->contains($produitplat)) {
            $this->produitplats[] = $produitplat;

        }

        return $this;
    }

    public function removeProduitPlat(ProduitPlat $produitplat): self
    {
       $this->produitplats->removeElement($produitplat);

        return $this;
    }



    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="restaurants")
     */
    private $reservations;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="restaurants")
     * @ORM\JoinColumn(nullable=false)
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $user;

    /**
     * @return Collection|Reservation[]|null
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setReservation($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getReservation() === $this) {
                $reservation->setReservation(null);
            }
        }
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

}
