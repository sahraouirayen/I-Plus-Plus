<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion")
 * @ORM\Entity
 */
class Promotion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_promotion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPromotion;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_promotion", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixPromotion;

    public function getIdPromotion(): ?int
    {
        return $this->idPromotion;
    }

    public function getPrixPromotion(): ?float
    {
        return $this->prixPromotion;
    }

    public function setPrixPromotion(float $prixPromotion): self
    {
        $this->prixPromotion = $prixPromotion;

        return $this;
    }


}