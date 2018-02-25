<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * RetourVoiture
 *@ApiResource
 * @ORM\Table(name="retour_voiture", indexes={@ORM\Index(name="location_retour", columns={"location_retour"})})
 * @ORM\Entity
 */
class RetourVoiture
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="location_retour", type="integer", nullable=true)
     */
    private $locationRetour;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_retour", type="datetime", nullable=true)
     */
    private $dateRetour;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
