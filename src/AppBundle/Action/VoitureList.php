<?php
/**
 * Created by PhpStorm.
 * User: Najib
 * Date: 25/02/2018
 * Time: 15:48
 */

namespace AppBundle\Action;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Voiture;

class VoitureList extends ServiceEntityRepository
{
    private $voiture;

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Voiture::class);
    }
    /**
     * @Route(
     *     name="list",
     *     path="voitures/list_available",
     *     methods={"GET"},
     *     defaults={"_api_item_operation_name"="available_cars"}
     * )
     *
     * @return array
     */
    public function __invoke(): array
    {
        return $this->findAllAvailableCars();
    }
    public function findAllAvailableCars(): array
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery(
            "SELECT v FROM AppBundle\Entity\Voiture v"
        );
        // returns an array of Product objects
        return $query->execute();
    }
}