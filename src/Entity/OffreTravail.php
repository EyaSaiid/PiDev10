<?php

namespace App\Entity;

use App\Repository\OffreTravailRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * @ORM\Entity(repositoryClass=OffreTravailRepository::class)
 */
class OffreTravail
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="le titre est obligatoire")
     * @Assert\Length(
     *      min = 5,
     *      max = 500,
     *      minMessage = "la min du titre doit etre entre [1..500]",
     *      maxMessage = "la capacite du restaurant doit etre entre [1..500]"
     * )
     * @Groups("post:read")
     */
    private $titre;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="la description est obligatoire")
     * @Assert\Length(
     *      min = 5,
     *      max = 500,
     *      minMessage = "le min du description doit etre entre [1..500]",
     *      maxMessage = "le maximum du description doit etre entre [1..500]"
     * )
     * @Groups("post:read")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="offreTravail")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Restaurant::class, inversedBy="offreTravail")
     * @ORM\JoinColumn(name="id_restaurant",referencedColumnName="id_restaurant",nullable=false,onDelete="CASCADE")
     */
    private $restaurant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getRestaurant(): ?Restaurant
    {
        return $this->restaurant;
    }

    public function setRestaurant(?Restaurant $restaurant): self
    {
        $this->restaurant = $restaurant;

        return $this;
    }
}
