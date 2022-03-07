<?php

namespace App\Entity;

use App\Repository\PromoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PromoRepository::class)
 */
class Promo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="champs is required")
     */
    private $pourcentPromo;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="champs is required")
     */
    private $dateExp;

    /**
     * @ORM\OneToMany(targetEntity=Prod::class, mappedBy="idPromo")
     */
    private $prods;

    public function __construct()
    {
        $this->prods = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPourcentPromo(): ?int
    {
        return $this->pourcentPromo;
    }

    public function setPourcentPromo(int $pourcentPromo): self
    {
        $this->pourcentPromo = $pourcentPromo;

        return $this;
    }

    public function getDateExp(): ?string
    {
        return $this->dateExp;
    }

    public function setDateExp(string $dateExp): self
    {
        $this->dateExp = $dateExp;

        return $this;
    }

    /**
     * @return Collection|Prod[]
     */
    public function getProds(): Collection
    {
        return $this->prods;
    }

    public function addProd(Prod $prod): self
    {
        if (!$this->prods->contains($prod)) {
            $this->prods[] = $prod;
            $prod->setIdPromo($this);
        }

        return $this;
    }

    public function removeProd(Prod $prod): self
    {
        if ($this->prods->removeElement($prod)) {
            // set the owning side to null (unless already changed)
            if ($prod->getIdPromo() === $this) {
                $prod->setIdPromo(null);
            }
        }

        return $this;
    }
    public function __toString() {
        return (string)$this->getPourcentPromo();
    }
}
