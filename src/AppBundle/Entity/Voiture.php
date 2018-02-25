<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation as Api;

/**
 * Voiture
 * @Api\ApiResource(
 *     itemOperations={
 *         "available_cars"={
 *             "route_name"="list"
 *         }
 *     }
 * )
 * @ORM\Table(name="voiture", indexes={@ORM\Index(name="client_voiture", columns={"client_voiture"})})
 * @ORM\Entity
 *
 */
class Voiture
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="client_voiture", type="integer", nullable=true)
     */
    private $clientVoiture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="matricule_voiture", type="string", length=20, nullable=true)
     */
    private $matriculeVoiture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="marque_voiture", type="string", length=50, nullable=true)
     */
    private $marqueVoiture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="modele_voiture", type="string", length=100, nullable=true)
     */
    private $modeleVoiture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="couleur_voiture", type="string", length=100, nullable=true)
     */
    private $couleurVoiture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="categorie_voiture", type="string", length=100, nullable=true)
     */
    private $categorieVoiture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="puissance_voiture", type="string", length=100, nullable=true)
     */
    private $puissanceVoiture;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cout_par_jour_voiture", type="float", precision=10, scale=0, nullable=true)
     */
    private $coutParJourVoiture;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @return int|null
     */
    public function getClientVoiture(): int
    {
        return $this->clientVoiture;
    }

    /**
     * @param int|null $clientVoiture
     */
    public function setClientVoiture(int $clientVoiture)
    {
        $this->clientVoiture = $clientVoiture;
    }

    /**
     * @return null|string
     */
    public function getMatriculeVoiture(): string
    {
        return $this->matriculeVoiture;
    }

    /**
     * @param null|string $matriculeVoiture
     */
    public function setMatriculeVoiture(string $matriculeVoiture)
    {
        $this->matriculeVoiture = $matriculeVoiture;
    }

    /**
     * @return null|string
     */
    public function getMarqueVoiture(): string
    {
        return $this->marqueVoiture;
    }

    /**
     * @param null|string $marqueVoiture
     */
    public function setMarqueVoiture(string $marqueVoiture)
    {
        $this->marqueVoiture = $marqueVoiture;
    }

    /**
     * @return null|string
     */
    public function getModeleVoiture(): string
    {
        return $this->modeleVoiture;
    }

    /**
     * @param null|string $modeleVoiture
     */
    public function setModeleVoiture(string $modeleVoiture)
    {
        $this->modeleVoiture = $modeleVoiture;
    }

    /**
     * @return null|string
     */
    public function getCouleurVoiture(): string
    {
        return $this->couleurVoiture;
    }

    /**
     * @param null|string $couleurVoiture
     */
    public function setCouleurVoiture(string $couleurVoiture)
    {
        $this->couleurVoiture = $couleurVoiture;
    }

    /**
     * @return null|string
     */
    public function getCategorieVoiture(): string
    {
        return $this->categorieVoiture;
    }

    /**
     * @param null|string $categorieVoiture
     */
    public function setCategorieVoiture(string $categorieVoiture)
    {
        $this->categorieVoiture = $categorieVoiture;
    }

    /**
     * @return null|string
     */
    public function getPuissanceVoiture(): string
    {
        return $this->puissanceVoiture;
    }

    /**
     * @param null|string $puissanceVoiture
     */
    public function setPuissanceVoiture(string $puissanceVoiture)
    {
        $this->puissanceVoiture = $puissanceVoiture;
    }

    /**
     * @return float|null
     */
    public function getCoutParJourVoiture(): float
    {
        return $this->coutParJourVoiture;
    }

    /**
     * @param float|null $coutParJourVoiture
     */
    public function setCoutParJourVoiture(float $coutParJourVoiture)
    {
        $this->coutParJourVoiture = $coutParJourVoiture;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }


}
