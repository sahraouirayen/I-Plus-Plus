<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups ;

/**
 * Evenement
 * @ORM\Entity(repositoryClass="App\Repository\EvenementRepository")
 * @ORM\Table(name="evenement")
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_event", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups({"evenement"})
     * @Groups("posts:read")
     */
    private $idEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_event", type="string", length=100, nullable=false)
     *     @Assert\NotBlank(message="veuillez saisir un nom pr evenement ")
     * @Groups({"evenement"})
     * @Groups("posts:read")
     */
    private $nomEvent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     * @Assert\NotBlank(message="date doit etre sup a datesysteme")
     * @Groups({"evenement"})
     * @Groups("posts:read")
     */
    private $date;

    /**
     * @var string
     * @Groups({"evenement"})
     * @Groups("posts:read")
     * @ORM\Column(name="lieu", type="string", length=100, nullable=false)
     */
    private $lieu;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_event", type="string", length=255, nullable=false)
     * @Groups({"evenement"})
     * @Groups("posts:read")
     */
    private $descEvent;



 /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=false)
  * @Groups({"evenement"})
  * @Groups("posts:read")
     */
    private $type;



    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }








    public function getIdEvent(): ?int
    {
        return $this->idEvent;
    }

    public function getNomEvent(): ?string
    {
        return $this->nomEvent;
    }

    public function setNomEvent(string $nomEvent): self
    {
        $this->nomEvent = $nomEvent;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getDescEvent(): ?string
    {
        return $this->descEvent;
    }

    public function setDescEvent(string $descEvent): self
    {
        $this->descEvent = $descEvent;

        return $this;
    }


}
