<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentAct
 *
 * @ORM\Table(name="comment_act")
 * @ORM\Entity
 */
class CommentAct
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_comment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComment;

    public function getIdComment(): ?int
    {
        return $this->idComment;
    }


}
