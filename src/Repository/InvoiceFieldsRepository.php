<?php

namespace App\Repository;

use App\Entity\InvoiceFields;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method InvoiceFields|null find($id, $lockMode = null, $lockVersion = null)
 * @method InvoiceFields|null findOneBy(array $criteria, array $orderBy = null)
 * @method InvoiceFields[]    findAll()
 * @method InvoiceFields[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InvoiceFieldsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InvoiceFields::class);
    }

    // /**
    //  * @return InvoiceFields[] Returns an array of InvoiceFields objects
    //  */
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
    public function findOneBySomeField($value): ?InvoiceFields
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function calculateTotal($id)
    {
        $invoice_id=$id;
        
        return $this->createQueryBuilder('i')
        ->andWhere('i.invoice_id=:id')
        ->setParameter('id',$id['invoice_id'])
        ->select('SUM(i.amount) as sumamount,SUM(i.amount_vat) as sumamountvat,SUM(i.amount_total) as sumamounttotal')
        ->getQuery()
        ->getOneOrNullResult();
    }
}
