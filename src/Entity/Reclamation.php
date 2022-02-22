<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="niveau", columns={"niveau"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_rec", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRec;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet_rec", type="string", length=255, nullable=false)
     */
    private $sujetRec;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id_user")
     * })
     */
    private $user;

    /**
     * @var \TypeReclamation
     *
     * @ORM\ManyToOne(targetEntity="TypeReclamation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="niveau", referencedColumnName="id_type_recla")
     * })
     */
    private $niveau;

    public function getIdRec(): ?int
    {
        return $this->idRec;
    }

    public function getSujetRec(): ?string
    {
        return $this->sujetRec;
    }

    public function setSujetRec(string $sujetRec): self
    {
        $this->sujetRec = $sujetRec;

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

    public function getNiveau(): ?TypeReclamation
    {
        return $this->niveau;
    }

    public function setNiveau(?TypeReclamation $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }


}
