<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Voiture
 *@ApiResource
 * @ORM\Table(name="voiture", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_E9E2810FC4C4DE61", columns={"matricule_voiture"})}, indexes={@ORM\Index(name="IDX_E9E2810F91D595FB", columns={"client_voiture_id"})})
 * @ORM\Entity
 */
class Voiture
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule_voiture", type="string", length=255, nullable=false)
     */
    private $matriculeVoiture;

    /**
     * @var string
     *
     * @ORM\Column(name="marque_voiture", type="string", length=255, nullable=false)
     */
    private $marqueVoiture;

    /**
     * @var string
     *
     * @ORM\Column(name="modele_voiture", type="string", length=255, nullable=false)
     */
    private $modeleVoiture;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur_voiture", type="string", length=255, nullable=false)
     */
    private $couleurVoiture;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie_voiture", type="string", length=255, nullable=false)
     */
    private $categorieVoiture;

    /**
     * @var string
     *
     * @ORM\Column(name="puissance_voiture", type="string", length=255, nullable=false)
     */
    private $puissanceVoiture;

    /**
     * @var float
     *
     * @ORM\Column(name="coutparjour_voiture", type="float", precision=10, scale=0, nullable=false)
     */
    private $coutparjourVoiture;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_voiture_id", referencedColumnName="id")
     * })
     */
    private $clientVoiture;

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

    /**
     * @return string
     */
    public function getMatriculeVoiture(): string
    {
        return $this->matriculeVoiture;
    }

    /**
     * @param string $matriculeVoiture
     */
    public function setMatriculeVoiture(string $matriculeVoiture)
    {
        $this->matriculeVoiture = $matriculeVoiture;
    }

    /**
     * @return string
     */
    public function getMarqueVoiture(): string
    {
        return $this->marqueVoiture;
    }

    /**
     * @param string $marqueVoiture
     */
    public function setMarqueVoiture(string $marqueVoiture)
    {
        $this->marqueVoiture = $marqueVoiture;
    }

    /**
     * @return string
     */
    public function getModeleVoiture(): string
    {
        return $this->modeleVoiture;
    }

    /**
     * @param string $modeleVoiture
     */
    public function setModeleVoiture(string $modeleVoiture)
    {
        $this->modeleVoiture = $modeleVoiture;
    }

    /**
     * @return string
     */
    public function getCouleurVoiture(): string
    {
        return $this->couleurVoiture;
    }

    /**
     * @param string $couleurVoiture
     */
    public function setCouleurVoiture(string $couleurVoiture)
    {
        $this->couleurVoiture = $couleurVoiture;
    }

    /**
     * @return string
     */
    public function getCategorieVoiture(): string
    {
        return $this->categorieVoiture;
    }

    /**
     * @param string $categorieVoiture
     */
    public function setCategorieVoiture(string $categorieVoiture)
    {
        $this->categorieVoiture = $categorieVoiture;
    }

    /**
     * @return string
     */
    public function getPuissanceVoiture(): string
    {
        return $this->puissanceVoiture;
    }

    /**
     * @param string $puissanceVoiture
     */
    public function setPuissanceVoiture(string $puissanceVoiture)
    {
        $this->puissanceVoiture = $puissanceVoiture;
    }

    /**
     * @return float
     */
    public function getCoutparjourVoiture(): float
    {
        return $this->coutparjourVoiture;
    }

    /**
     * @param float $coutparjourVoiture
     */
    public function setCoutparjourVoiture(float $coutparjourVoiture)
    {
        $this->coutparjourVoiture = $coutparjourVoiture;
    }

    /**
     * @return \Client
     */
    public function getClientVoiture(): \Client
    {
        return $this->clientVoiture;
    }

    /**
     * @param \Client $clientVoiture
     */
    public function setClientVoiture(\Client $clientVoiture)
    {
        $this->clientVoiture = $clientVoiture;
    }



}
