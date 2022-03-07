<?php

namespace App\Entity;

use App\Repository\VoteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VoteRepository::class)
 */
class Vote
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $type;

    /**
     * @var \Commentaire
     *
     * @ORM\ManyToOne(targetEntity="Commentaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Commentaire", referencedColumnName="id",onDelete="CASCADE")
     * })
     */
    private $idCommentaire;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id",onDelete="CASCADE")
     * })
     */
    private $idUser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }


    public function getIdCommentaire(): ?Commentaire
    {
        return $this->idCommentaire;
    }


    public function setIdCommentaire(?Commentaire $idCommentaire): void
    {
        $this->idCommentaire = $idCommentaire;
    }


    public function getIdUser(): ?User
    {
        return $this->idUser;
    }


    public function setIdUser(?Users $idUser): void
    {
        $this->idUser = $idUser;
    }


}
