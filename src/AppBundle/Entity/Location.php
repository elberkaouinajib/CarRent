<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Location
 *@ApiResource
 * @ORM\Table(name="location", indexes={@ORM\Index(name="voiture_location", columns={"voiture_location"}), @ORM\Index(name="client_location", columns={"client_location"})})
 * @ORM\Entity
 */
class Location
{
    /**
     * @var int
     *
     * @ORM\Column(name="voiture_location", type="integer", nullable=false)
     */
    private $voitureLocation;

    /**
     * @var int
     *
     * @ORM\Column(name="client_location", type="integer", nullable=false)
     */
    private $clientLocation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_location", type="datetime", nullable=true)
     */
    private $dateLocation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="debut_location", type="datetime", nullable=true)
     */
    private $debutLocation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fin_location", type="datetime", nullable=true)
     */
    private $finLocation;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
