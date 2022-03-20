<?php

namespace App\Entity;

use App\Repository\LigneCommandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LigneCommandeRepository::class)
 */
class LigneCommande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Quantite;

    /**
     * @ORM\Column(type="float")
     */
    private $Price;

    /**
     * @ORM\ManyToOne(targetEntity=Prod::class,cascade={"all"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prod_id", referencedColumnName="id")
     * })
     */
    private $produit;

    /**
     * @ORM\ManyToOne(targetEntity=Commande::class, inversedBy="ligneCommandes")
     *  @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="commande_id", referencedColumnName="id")
     * })
     */
    private $commande;




    public function getProduit():?Prod
    {
        return $this->produit;
    }

    /**
     * @param mixed $produit
     */
    public function setProduit($produit): void
    {
        $this->produit = $produit;
    }


    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->Quantite;
    }

    /**
     * @param mixed $Quantite
     */
    public function setQuantite($Quantite): void
    {
        $this->Quantite = $Quantite;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param mixed $Price
     */
    public function setPrice($Price): void
    {
        $this->Price = $Price;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(?Commande $commande): self
    {
        $this->commande = $commande;

        return $this;
    }
}
