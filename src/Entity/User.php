<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255 , nullable= true)
     * @Assert\NotBlank(message="Vous devez insérer votre nom.")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable= true)
     * @Assert\NotBlank(message="Vous devez insérer votre prénom.")
     */
    private $prenom;

    /**
     * @ORM\Column(type="date", nullable= true)
     * @Assert\NotBlank(message="Vous devez insérer date.")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255, nullable= true)
     * @Assert\NotBlank(message="This value should not be blank.")
     */
    private $sexe;

    /**
     * @ORM\Column(type="integer", nullable= true)
     * @Assert\Positive
     * @Assert\NotBlank(message="Vous devez insérer votre numéro de téléphone.")
     * * @Assert\Length(
     *      min = 8,
     *      max = 11,
     *      minMessage = "Your user phone number must be at least {{ limit }}  long",
     *      maxMessage = "Your  phone number cannot be longer than {{ limit }} "
     * )
     */
    private $numero_tele;

    /**
     * @ORM\Column(type="string", length=255, nullable= true)
     * @Assert\NotBlank(message="Vous devez insérer votre email.")
     *  @Assert\Email(
     *     message="This email '{{ value }}' is not a valid email address.")
     */
    private $email;

    /**
     * @ORM\Column(type="json", nullable= true)
     */
    private $roles = [];

    /**
     * @ORM\OneToMany(targetEntity=OffreTravail::class, mappedBy="user")
     */
    private $offreTravail;

    /**
     * @ORM\Column(type="string", length=255,nullable= true)
     * @var string The hashed password
     * @Assert\NotBlank(message="Vous devez insérer votre mot de passe!.")
     */
    private $password;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isVerified = false;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $activationToken;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $resetToken;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\File()
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $address;

    public function __construct()
    {
        $this->offreTravail = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getNumeroTele(): ?int
    {
        return $this->numero_tele;
    }

    public function setNumeroTele(int $numero_tele): self
    {
        $this->numero_tele = $numero_tele;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getRoles(): ?array
    {
        return $this->roles;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @return Collection|offreTravail[]
     */
    public function getOffreTravail(): Collection
    {
        return $this->offreTravail;
    }

    public function addOffreTravail(offreTravail $offreTravail): self
    {
        if (!$this->offreTravail->contains($offreTravail)) {
            $this->offreTravail[] = $offreTravail;
            $offreTravail->setUser($this);
        }

        return $this;
    }

    public function removeOffreTravail(offreTravail $offreTravail): self
    {
        if ($this->offreTravail->removeElement($offreTravail)) {
            // set the owning side to null (unless already changed)
            if ($offreTravail->getUser() === $this) {
                $offreTravail->setUser(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "".$this->id;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }


    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function getUsername()
    {
        // TODO: Implement getUsername() method.
        return $this->email;
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function getActivationToken(): ?string
    {
        return $this->activationToken;
    }

    public function setActivationToken(?string $activationToken): self
    {
        $this->activationToken = $activationToken;

        return $this;
    }

    public function getResetToken(): ?string
    {
        return $this->resetToken;
    }

    public function setResetToken(?string $resetToken): self
    {
        $this->resetToken = $resetToken;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

}