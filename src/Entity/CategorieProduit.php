<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieProduit
 *
 * @ORM\Table(name="categorie_produit")
 * @ORM\Entity
 */
class CategorieProduit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cat_prod", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCatProd;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_cat_prod", type="string", length=30, nullable=false)
     */
    private $nomCatProd;


}
