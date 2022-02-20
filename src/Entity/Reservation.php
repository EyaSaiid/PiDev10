<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_reservation;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_restaurant;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_client;

    /**
     * @ORM\Column(type="integer")
     *@Assert\NotBlank(message="le nombre de place est obligatoire")
     * @Assert\Range(
     *      min = 1,
     *      max = 50,
     *      notInRangeMessage = "la capacite du restaurant doit etre entre {{ min }} et {{ max }}",
     * )
     */
    private $nombre;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_reservation;

    public function getIdReservation(): ?int
    {
        return $this->id_reservation;
    }

    public function getIdRestaurant(): ?int
    {
        return $this->id_restaurant;
    }

    public function setIdRestaurant(int $id_restaurant): self
    {
        $this->id_restaurant = $id_restaurant;

        return $this;
    }

    public function getIdClient(): ?int
    {
        return $this->id_client;
    }

    public function setIdClient(int $id_client): self
    {
        $this->id_client = $id_client;

        return $this;
    }

    public function getNombre(): ?int
    {
        return $this->nombre;
    }

    public function setNombre(int $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->date_reservation;
    }

    public function setDateReservation(\DateTimeInterface $date_reservation): self
    {
        $this->date_reservation = $date_reservation;

        return $this;
    }



    /**
     * @ORM\ManyToOne(targetEntity=Restaurant::class, inversedBy="reservations" )
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="id_restaurant", referencedColumnName="id_restaurant", onDelete="CASCADE")
     * })
     */

    private $restaurants;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="reservations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;


    public function getRestaurants(): ?Restaurant
    {
        return $this->restaurants;
    }

    public function setRestaurants(?Restaurant $restaurants): self
    {
        $this->restaurants = $restaurants;

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
