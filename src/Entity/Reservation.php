<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="id_evenement", columns={"id_evenement"}), @ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     *  @Groups("post:read")
     */
    private $idReservation;

    /**
     * @var \User
        * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @Groups("post:read")
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    /**
     * @var \Evenement
         * @ORM\Column(name="id_evenement", type="integer", nullable=false)
     * @Groups("post:read")
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_evenement", referencedColumnName="id_event")
     * })
     */
    private $idEvenement;







    public function getidReservation(): ?int
    {
        return $this->idReservation;
    }

    public function getidEvenement(): ?int
    {
        return $this->idEvenement;
    }

    public function getidUser(): ?int
    {
        return $this->idUser;
    }

    public function setidReservation(int $idReservation): self
    {
        $this->idReservation = $idReservation;

        return $this;
    }
    public function setidEvenement(int $idEvenement): self
    {
        $this->idEvenement = $idEvenement;

        return $this;
    }
    public function setidUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }



}
