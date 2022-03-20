<?php

namespace App\Entity;

use App\Repository\ProdRepository;
use Symfony\Component\Validator\Constraints as Assert;

 use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProdRepository::class)
 */
class Prod
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
      * @Assert\NotBlank(message="champs is required")

     */
    private $nomProd;

    /**
     * @ORM\Column(type="integer", length=255)
    *@Assert\NotBlank(message="champs is required")
      */
    private $prixProd;

    /**
     * @ORM\Column(type="boolean")
      */
    private $statusProd;

    /**
     * @ORM\Column(type="integer")
      */
    private $rateProd;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="champs is required")
      */
    private $descriptionProd;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="champs is required")
      */
    private $categorieProd;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="champs is required")
     */
    private $imgProd;

    /**
     * @ORM\ManyToOne(targetEntity=Promo::class, inversedBy="prods")
     */
    private $idPromo;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProd(): ?string
    {
        return $this->nomProd;
    }

    public function setNomProd(string $nomProd): self
    {
        $this->nomProd = $nomProd;

        return $this;
    }

    public function getPrixProd(): ?int
    {
        return $this->prixProd;
    }

    public function setPrixProd(int $prixProd): self
    {
        $this->prixProd = $prixProd;

        return $this;
    }

    public function getStatusProd(): ?bool
    {
        return $this->statusProd;
    }

    public function setStatusProd(bool $statusProd): self
    {
        $this->statusProd = $statusProd;

        return $this;
    }

    public function getRateProd(): ?int
    {
        return $this->rateProd;
    }

    public function setRateProd(int $rateProd): self
    {
        $this->rateProd = $rateProd;

        return $this;
    }

    public function getDescriptionProd(): ?string
    {
        return $this->descriptionProd;
    }

    public function setDescriptionProd(string $descriptionProd): self
    {
        $this->descriptionProd = $descriptionProd;

        return $this;
    }

    public function getCategorieProd(): ?string
    {
        return $this->categorieProd;
    }

    public function setCategorieProd(string $categorieProd): self
    {
        $this->categorieProd = $categorieProd;

        return $this;
    }

    public function getImgProd()
    {
        return $this->imgProd;
    }

    public function setImgProd( $imgProd)
    {
        $this->imgProd = $imgProd;

        return $this;
    }

    public function getIdPromo(): ?Promo
    {
        return $this->idPromo;
    }

    public function setIdPromo(?Promo $idPromo): self
    {
        $this->idPromo = $idPromo;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(?int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }
}
