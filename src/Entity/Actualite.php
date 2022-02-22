<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actualite
 *
 * @ORM\Table(name="actualite", indexes={@ORM\Index(name="categorie", columns={"categorie"})})
 * @ORM\Entity(repositoryClass="App\Repository\ActualiteRepository")
 */
class Actualite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_actualite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActualite;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_actualite", type="string", length=30, nullable=false)
     */
    private $titreActualite;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \CategorieActualite
     *
     * @ORM\ManyToOne(targetEntity="CategorieActualite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie", referencedColumnName="id_cat_actualite")
     * })
     */
    private $categorie;

    public function getIdActualite(): ?int
    {
        return $this->idActualite;
    }

    public function getTitreActualite(): ?string
    {
        return $this->titreActualite;
    }

    public function setTitreActualite(string $titreActualite): self
    {
        $this->titreActualite = $titreActualite;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCategorie(): ?CategorieActualite
    {
        return $this->categorie;
    }

    public function setCategorie(?CategorieActualite $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }


}
