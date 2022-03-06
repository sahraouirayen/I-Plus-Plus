<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity("email")
 */
class User implements UserInterface
{
    const ROLE_ADMIN="ROLE_ADMIN";
    const  ROLE_SUPER_ADMIN="ROLE_SUPER_ADMIN";

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     * @Assert\NotBlank(message="le nom est requis")
     * @Assert\Regex(pattern="/^[a-zA-z]*$/" ,match=true ,message="seuls les alphabets sont autorisés")
     * @Assert\Length(min=3,max=20 , minMessage="Votre nom doit comporter au moins {{ limit }} caractères",
     *     maxMessage="Votre nom doit comporter au plus {{ limit }} caractères")
     *
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=30, nullable=false)
     * @Assert\NotBlank(message="le prénom est requis")
     * @Assert\Regex(pattern="/^[a-zA-z]*$/" ,match=true ,message="seuls les alphabets sont autorisés")
     * @Assert\Length(min=3 , minMessage="Votre prénom doit comporter au moins {{ limit }} caractères")
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60, nullable=false,unique=true)
     * @Assert\NotBlank(message="l'email est requis")
     * @Assert\Email(message="l'email {{value}} n'est pas valide")
     *
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=60, nullable=false)
     * @Assert\NotBlank(message="le mot de passe est requis")
     * @Assert\Regex(pattern="/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/" ,
     *     match=true ,
     *     message="le mot de passe doit contenir au moins 1 chiffre , un caractére majuscule ,un caractére minuscule
     * et de longeur 8")
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse", type="string", length=60, nullable=true)
     */
    private $adresse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="code_postale", type="integer", nullable=true)
     */
    private $codePostale;

    /**
     * @var int
     *
     * @ORM\Column(name="num_tel", type="integer", nullable=false)
     */
    private $numTel;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="json", nullable=true)
     */
    private $roles=["ROLE_USER"];

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $resetToken;

    public function getIdUser(): ?int
    {
        return $this->idUser;
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodePostale(): ?int
    {
        return $this->codePostale;
    }

    public function setCodePostale(?int $codePostale): self
    {
        $this->codePostale = $codePostale;

        return $this;
    }

    public function getNumTel(): ?int
    {
        return $this->numTel;
    }

    public function setNumTel(int $numTel): self
    {
        $this->numTel = $numTel;

        return $this;
    }

    public function getRoles(): ?array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }


    public function getSalt()
    {
        return null;
    }

    public function getUsername()
    {
        return (string) $this->email;
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
    public function isAdmin():bool{
        return in_array(self::ROLE_ADMIN,$this->getRoles());
    }
    public function isSuperAdmin():bool{
        return in_array(self::ROLE_SUPER_ADMIN,$this->getRoles());
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
}
