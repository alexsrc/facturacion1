<?php

namespace App\Repository;

use App\Entity\Item;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;


class ItemRepository extends \Doctrine\ORM\EntityRepository
{


    public function listaItem(){
        $em = $this->getDoctrine()->getManager();
        //$conUser= new User();
        $db = $em->getRepository('App:User')->findAll();

        return $db;
    }

    public function eliminarItem($idItemPk){
        $em = $this->getDoctrine()->getManager();
        //$conUser= new User();
        $em->remove($idItemPk);
        $em->flush();

    }
//    public function __construct(RegistryInterface $registry)
//    {
//        parent::__construct($registry, Item::class);
//    }

//    /**
//     * @return Item[] Returns an array of Item objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Item
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
