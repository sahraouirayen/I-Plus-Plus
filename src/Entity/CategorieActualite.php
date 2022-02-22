<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieActualite
 *
 * @ORM\Table(name="categorie_actualite")
 * @ORM\Entity(repositoryClass="App\Repository\CategorieActualiteRepository")

 */
class CategorieActualite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cat_actualite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCatActualite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_cat_actualite", type="string", length=100, nullable=false)
     */
    private $nomCatActualite;

    public function getIdCatActualite(): ?int
    {
        return $this->idCatActualite;
    }

    public function getNomCatActualite(): ?string
    {
        return $this->nomCatActualite;
    }

    public function setNomCatActualite(string $nomCatActualite): self
    {
        $this->nomCatActualite = $nomCatActualite;

        return $this;
    }


}
