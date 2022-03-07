<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImageAct
 *
 * @ORM\Table(name="image_act")
 * @ORM\Entity
 */
class ImageAct
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_image", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idImage;

    /**
     * @var string
     *
     * @ORM\Column(name="image_act", type="string", length=255, nullable=false)
     */
    private $imageAct;

    public function getIdImage(): ?int
    {
        return $this->idImage;
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


}
