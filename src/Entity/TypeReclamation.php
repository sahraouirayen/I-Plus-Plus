<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeReclamation
 *
 * @ORM\Table(name="type_reclamation")
 * @ORM\Entity
 */
class TypeReclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_type_recla", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeRecla;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=60, nullable=false)
     */
    private $niveau;

    public function getIdTypeRecla(): ?int
    {
        return $this->idTypeRecla;
    }

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(string $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }


}