<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Klant
 *
 * @ORM\Table(name="klant")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\KlantRepository")
 */
class Klant
{


    /**
     * @var int
     *
     * @ORM\Column(name="klantnummer", type="integer", unique=true)
     */
    private $klantnummer;

    /**
     * @var string
     *
     * @ORM\Column(name="voornaam", type="string", length=100, nullable=true)
     */
    private $voornaam;

    /**
     * @var string
     *
     * @ORM\Column(name="achternaam", type="string", length=100, nullable=true)
     */
    private $achternaam;


    /**
     * Set klantnummer
     *
     * @param integer $klantnummer
     *
     * @return Klant
     */
    public function setKlantnummer($klantnummer)
    {
        $this->klantnummer = $klantnummer;

        return $this;
    }

    /**
     * Get klantnummer
     *
     * @return int
     */
    public function getKlantnummer()
    {
        return $this->klantnummer;
    }

    /**
     * Set voornaam
     *
     * @param string $voornaam
     *
     * @return Klant
     */
    public function setVoornaam($voornaam)
    {
        $this->voornaam = $voornaam;

        return $this;
    }

    /**
     * Get voornaam
     *
     * @return string
     */
    public function getVoornaam()
    {
        return $this->voornaam;
    }

    /**
     * Set achternaam
     *
     * @param string $achternaam
     *
     * @return Klant
     */
    public function setAchternaam($achternaam)
    {
        $this->achternaam = $achternaam;

        return $this;
    }

    /**
     * Get achternaam
     *
     * @return string
     */
    public function getAchternaam()
    {
        return $this->achternaam;
    }
}
