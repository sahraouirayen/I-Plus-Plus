<?php

namespace App\Repository;

use App\Entity\Activite;
use App\Entity\Evenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Evenement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Evenement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Evenement[]    findAll()
 * @method Evenement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvenementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evenement::class);
    }












    public function find_Nb_Rec_Par_Status($type){

        $em = $this->getEntityManager();

        $query = $em->createQuery(
            'SELECT DISTINCT  count(r.idEvent) FROM   App\Entity\Evenement r  where r.type = :typee   '
        );
        $query->setParameter('typee', $type);
        return $query->getResult();
    }




    public function mise_a_jour()
    {

        $conn = $this->getEntityManager()->getConnection();

        $sql = '
           DELETE FROM `evenement` WHERE date < CURRENT_DATE ';
        $stmt = $conn->prepare($sql);
        $stmt->execute();


    }








    public function findevent($valueemail,$order){
        $em = $this->getEntityManager();
        if($order=='DESC') {
            $query = $em->createQuery(
                'SELECT r FROM App\Entity\Evenement r   where r.nomEvent like :nomEventt order by r.idEvent DESC '
            );
            $query->setParameter('nomEventt', $valueemail . '%');
        }
        else{
            $query = $em->createQuery(
                'SELECT r FROM App\Entity\Evenement r   where r.nomEvent like :nomEventt  order by r.idEvent ASC '
            );
            $query->setParameter('nomEventt', $valueemail . '%');
        }
        return $query->getResult();
    }










}
