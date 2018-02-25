<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Penalisation
 *@ApiResource
 * @ORM\Table(name="penalisation", indexes={@ORM\Index(name="retour_voiture_penalisation", columns={"retour_voiture_penalisation"})})
 * @ORM\Entity
 */
class Penalisation
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="retour_voiture_penalisation", type="integer", nullable=true)
     */
    private $retourVoiturePenalisation;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cout_penalisation", type="float", precision=10, scale=0, nullable=true)
     */
    private $coutPenalisation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="raison_penalisation", type="string", length=300, nullable=true)
     */
    private $raisonPenalisation;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
