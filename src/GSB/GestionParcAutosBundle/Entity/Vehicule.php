<?php

namespace GSB\GestionParcAutosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity
 */
class Vehicule
{
    /**
     * @var string
     *
     * @ORM\Column(name="immatVeh", type="string", length=9, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $immatveh = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAchatVeh", type="date", nullable=true)
     */
    private $dateachatveh;

    /**
     * @var string
     *
     * @ORM\Column(name="couleurVeh", type="string", length=40, nullable=true)
     */
    private $couleurveh;

    /**
     * @var integer
     *
     * @ORM\Column(name="kilometrageVeh", type="integer", nullable=true)
     */
    private $kilometrageveh = '0';



    /**
     * Get immatveh
     *
     * @return string
     */
    public function getImmatveh()
    {
        return $this->immatveh;
    }

    /**
     * Set dateachatveh
     *
     * @param \DateTime $dateachatveh
     *
     * @return Vehicule
     */
    public function setDateachatveh($dateachatveh)
    {
        $this->dateachatveh = $dateachatveh;

        return $this;
    }

    /**
     * Get dateachatveh
     *
     * @return \DateTime
     */
    public function getDateachatveh()
    {
        return $this->dateachatveh;
    }

    /**
     * Set couleurveh
     *
     * @param string $couleurveh
     *
     * @return Vehicule
     */
    public function setCouleurveh($couleurveh)
    {
        $this->couleurveh = $couleurveh;

        return $this;
    }

    /**
     * Get couleurveh
     *
     * @return string
     */
    public function getCouleurveh()
    {
        return $this->couleurveh;
    }

    /**
     * Set kilometrageveh
     *
     * @param integer $kilometrageveh
     *
     * @return Vehicule
     */
    public function setKilometrageveh($kilometrageveh)
    {
        $this->kilometrageveh = $kilometrageveh;

        return $this;
    }

    /**
     * Get kilometrageveh
     *
     * @return integer
     */
    public function getKilometrageveh()
    {
        return $this->kilometrageveh;
    }
}
