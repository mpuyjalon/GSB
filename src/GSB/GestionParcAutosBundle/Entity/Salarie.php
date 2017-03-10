<?php

namespace GSB\GestionParcAutosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salarie
 *
 * @ORM\Table(name="salarie")
 * @ORM\Entity
 */
class Salarie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="matriculeSal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $matriculesal;

    /**
     * @var string
     *
     * @ORM\Column(name="nomSal", type="string", length=40, nullable=true)
     */
    private $nomsal;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomSal", type="string", length=40, nullable=true)
     */
    private $prenomsal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEmbaucheSal", type="date", nullable=true)
     */
    private $dateembauchesal;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostalSal", type="string", length=5, nullable=true)
     */
    private $codepostalsal;

    /**
     * @var string
     *
     * @ORM\Column(name="villeSal", type="string", length=40, nullable=true)
     */
    private $villesal;

    /**
     * @var integer
     *
     * @ORM\Column(name="creditResa", type="integer", nullable=true)
     */
    private $creditresa;

    /**
     * @var string
     *
     * @ORM\Column(name="Identifiant", type="string", length=100, nullable=false)
     */
    private $identifiant;

    /**
     * @var string
     *
     * @ORM\Column(name="Mdp", type="string", length=40, nullable=false)
     */
    private $mdp;



    /**
     * Get matriculesal
     *
     * @return integer
     */
    public function getMatriculesal()
    {
        return $this->matriculesal;
    }

    /**
     * Set nomsal
     *
     * @param string $nomsal
     *
     * @return Salarie
     */
    public function setNomsal($nomsal)
    {
        $this->nomsal = $nomsal;

        return $this;
    }

    /**
     * Get nomsal
     *
     * @return string
     */
    public function getNomsal()
    {
        return $this->nomsal;
    }

    /**
     * Set prenomsal
     *
     * @param string $prenomsal
     *
     * @return Salarie
     */
    public function setPrenomsal($prenomsal)
    {
        $this->prenomsal = $prenomsal;

        return $this;
    }

    /**
     * Get prenomsal
     *
     * @return string
     */
    public function getPrenomsal()
    {
        return $this->prenomsal;
    }

    /**
     * Set dateembauchesal
     *
     * @param \DateTime $dateembauchesal
     *
     * @return Salarie
     */
    public function setDateembauchesal($dateembauchesal)
    {
        $this->dateembauchesal = $dateembauchesal;

        return $this;
    }

    /**
     * Get dateembauchesal
     *
     * @return \DateTime
     */
    public function getDateembauchesal()
    {
        return $this->dateembauchesal;
    }

    /**
     * Set codepostalsal
     *
     * @param string $codepostalsal
     *
     * @return Salarie
     */
    public function setCodepostalsal($codepostalsal)
    {
        $this->codepostalsal = $codepostalsal;

        return $this;
    }

    /**
     * Get codepostalsal
     *
     * @return string
     */
    public function getCodepostalsal()
    {
        return $this->codepostalsal;
    }

    /**
     * Set villesal
     *
     * @param string $villesal
     *
     * @return Salarie
     */
    public function setVillesal($villesal)
    {
        $this->villesal = $villesal;

        return $this;
    }

    /**
     * Get villesal
     *
     * @return string
     */
    public function getVillesal()
    {
        return $this->villesal;
    }

    /**
     * Set creditresa
     *
     * @param integer $creditresa
     *
     * @return Salarie
     */
    public function setCreditresa($creditresa)
    {
        $this->creditresa = $creditresa;

        return $this;
    }

    /**
     * Get creditresa
     *
     * @return integer
     */
    public function getCreditresa()
    {
        return $this->creditresa;
    }

    /**
     * Set identifiant
     *
     * @param string $identifiant
     *
     * @return Salarie
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get identifiant
     *
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     *
     * @return Salarie
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string
     */
    public function getMdp()
    {
        return $this->mdp;
    }
}
