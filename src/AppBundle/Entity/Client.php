<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Client
 *@ApiResource
 * @ORM\Table(name="client", uniqueConstraints={@ORM\UniqueConstraint(name="cin_client", columns={"cin_client"})})
 * @ORM\Entity
 */
class Client
{
    /**
     * @var string
     *
     * @ORM\Column(name="cin_client", type="string", length=255, nullable=false)
     */
    private $cinClient;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_client", type="string", length=255, nullable=false)
     */
    private $nomClient;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_client", type="string", length=255, nullable=false)
     */
    private $prenomClient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance_client", type="date", nullable=false)
     */
    private $dateNaissanceClient;

    /**
     * @var string
     *
     * @ORM\Column(name="addresse_client", type="string", length=255, nullable=false)
     */
    private $addresseClient;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone_client", type="string", length=255, nullable=false)
     */
    private $telephoneClient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscription_client", type="date", nullable=false)
     */
    private $dateInscriptionClient;

    /**
     * @var string
     *
     * @ORM\Column(name="password_client", type="string", length=255, nullable=false)
     */
    private $passwordClient;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @return string
     */
    public function getCinClient(): string
    {
        return $this->cinClient;
    }

    /**
     * @param string $cinClient
     */
    public function setCinClient(string $cinClient)
    {
        $this->cinClient = $cinClient;
    }

    /**
     * @return string
     */
    public function getNomClient(): string
    {
        return $this->nomClient;
    }

    /**
     * @param string $nomClient
     */
    public function setNomClient(string $nomClient)
    {
        $this->nomClient = $nomClient;
    }

    /**
     * @return string
     */
    public function getPrenomClient(): string
    {
        return $this->prenomClient;
    }

    /**
     * @param string $prenomClient
     */
    public function setPrenomClient(string $prenomClient)
    {
        $this->prenomClient = $prenomClient;
    }

    /**
     * @return \DateTime
     */
    public function getDateNaissanceClient(): \DateTime
    {
        return $this->dateNaissanceClient;
    }

    /**
     * @param \DateTime $dateNaissanceClient
     */
    public function setDateNaissanceClient(\DateTime $dateNaissanceClient)
    {
        $this->dateNaissanceClient = $dateNaissanceClient;
    }

    /**
     * @return string
     */
    public function getAddresseClient(): string
    {
        return $this->addresseClient;
    }

    /**
     * @param string $addresseClient
     */
    public function setAddresseClient(string $addresseClient)
    {
        $this->addresseClient = $addresseClient;
    }

    /**
     * @return string
     */
    public function getTelephoneClient(): string
    {
        return $this->telephoneClient;
    }

    /**
     * @param string $telephoneClient
     */
    public function setTelephoneClient(string $telephoneClient)
    {
        $this->telephoneClient = $telephoneClient;
    }

    /**
     * @return \DateTime
     */
    public function getDateInscriptionClient(): \DateTime
    {
        return $this->dateInscriptionClient;
    }

    /**
     * @param \DateTime $dateInscriptionClient
     */
    public function setDateInscriptionClient(\DateTime $dateInscriptionClient)
    {
        $this->dateInscriptionClient = $dateInscriptionClient;
    }

    /**
     * @return string
     */
    public function getPasswordClient(): string
    {
        return $this->passwordClient;
    }

    /**
     * @param string $passwordClient
     */
    public function setPasswordClient(string $passwordClient)
    {
        $this->passwordClient = $passwordClient;
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
