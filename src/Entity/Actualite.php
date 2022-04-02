<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Actualite
 *
 * @ORM\Table(name="actualite", indexes={@ORM\Index(name="categorie", columns={"categorie"})})
 * @ORM\Entity
 */
class Actualite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_actualite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups("post:read")
     */
    private $idActualite;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_actualite", type="string", length=30, nullable=false)
     * @Assert\NotBlank(message="le titre est requis")
     * @Groups("post:read")
     */
    private $titreActualite;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="la description est requis")
     * @Groups("post:read")
     *
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="etendu", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="la description eteundu est requis")
     * @Groups("post:read")
     */
    private $etendu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_act", type="date", nullable=false)
     * @Groups("post:read")
     *
     *
     */
    private $dateAct;

    /**
     * @var string
     *
     * @ORM\Column(name="image_act", type="string", length=255, nullable=false)
     * @Groups("post:read")
     */
    private $imageAct;

    /**
     * @var int
     *
     * @ORM\Column(name="rating_act", type="integer", nullable=false)
     * @Groups("post:read")
     *
     */
    private $ratingAct;

    /**
     * @var \CategorieActualite
     *
     * @ORM\ManyToOne(targetEntity="CategorieActualite")
     * @Assert\NotBlank(message="la categorie est requis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie", referencedColumnName="id_cat_actualite")
     * })
     * @Groups("post:read")

     */
    private $categorie;



    /**
     * @var int
     *
     * @ORM\Column(name="vu", type="integer", nullable=false)
     * @Groups("post:read")
     */
    private $vu;

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

    public function getEtendu(): ?string
    {
        return $this->etendu;
    }

    public function setEtendu(string $etendu): self
    {
        $this->etendu = $etendu;

        return $this;
    }
    public function getDateAct(): ?\DateTimeInterface
    {
        return $this->dateAct;
    }

    public function setDateAct(\DateTimeInterface $dateAct): self
    {
        $this->dateAct = $dateAct;

        return $this;
    }

    public function getImageAct(): ?string
    {
        return $this->imageAct;
    }

    public function setImageAct(string $imageAct): self
    {
        $this->imageAct = $imageAct;

        return $this;
    }

    public function getRatingAct(): ?int
    {
        return $this->ratingAct;
    }

    public function setRatingAct(int $ratingAct): self
    {
        $this->ratingAct = $ratingAct;

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


    public function getVu(): ?int
    {
        return $this->vu;
    }


    public function setVu(int $vu): void
    {
        $this->vu = $vu;
    }


}
