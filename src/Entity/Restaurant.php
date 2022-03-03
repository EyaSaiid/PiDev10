<?php

namespace App\Entity;

use App\Repository\RestaurantRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=RestaurantRepository::class)
 */
class Restaurant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_restaurant;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="le nom du restaurant est obligatoire")
     */
    private $nom_restaurant;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="la description du restaurant est obligatoire")
     */
    private $desc_restaurant;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Positive
     * @Assert\NotBlank(message="vous devez inserer le nombre de place de votre restaurant")
     *  @Assert\Length(
     *      min = 1,
     *      max = 500,
     *      minMessage = "la capacite du restaurant doit etre entre [1..500]",
     *      maxMessage = "la capacite du restaurant doit etre entre [1..500]"
     * )
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
     * @Assert\Positive
     */
    private $num_tel;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="vous devez choisir la sepcialite de votre restaurant")
     */
    private $specialite;

    /**
     * @ORM\OneToMany(targetEntity=OffreTravail::class, mappedBy="restaurant")
     */
    private $offreTravail;

    public function __construct()
    {
        $this->offreTravail = new ArrayCollection();
    }

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

    /**
     * @return Collection|OffreTravail[]
     */
    public function getOffreTravail(): Collection
    {
        return $this->offreTravail;
    }

    public function addOffreTravail(OffreTravail $offreTravail): self
    {
        if (!$this->offreTravail->contains($offreTravail)) {
            $this->offreTravail[] = $offreTravail;
            $offreTravail->setRestaurant($this);
        }

        return $this;
    }

    public function removeOffreTravail(OffreTravail $offreTravail): self
    {
        if ($this->offreTravail->removeElement($offreTravail)) {
            // set the owning side to null (unless already changed)
            if ($offreTravail->getRestaurant() === $this) {
                $offreTravail->setRestaurant(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getNomRestaurant();
    }



}