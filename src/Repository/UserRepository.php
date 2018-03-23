<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{

    public function listaUser(){
        $em = $this->getDoctrine()->getManager();
        //$conUser= new User();
        $db = $em->getRepository('App:User')->findAll();

        return $db;
    }

    public function eliminarUser($idUserPk){
        $em = $this->getDoctrine()->getManager();
        //$conUser= new User();
        $em->remove($idUserPk);
        $em->flush();

    }
    /*public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, User::class);
    }*/

//    /**
//     * @return User[] Returns an array of User objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
