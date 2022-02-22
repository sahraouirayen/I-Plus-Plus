<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="id_ligne", columns={"id_ligne"}), @ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_commande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommande;

    /**
     * @var \LigneCommande
     *
     * @ORM\ManyToOne(targetEntity="LigneCommande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ligne", referencedColumnName="id_ligne")
     * })
     */
    private $idLigne;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    public function getIdCommande(): ?int
    {
        return $this->idCommande;
    }

    public function getIdLigne(): ?LigneCommande
    {
        return $this->idLigne;
    }

    public function setIdLigne(?LigneCommande $idLigne): self
    {
        $this->idLigne = $idLigne;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->idUser;
    }

    public function setIdUser(?User $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }


}
