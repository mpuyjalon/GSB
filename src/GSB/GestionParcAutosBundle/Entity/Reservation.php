<?php

namespace GSB\GestionParcAutosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="reservation_ibfk_2", columns={"matriculeSalarie"}), @ORM\Index(name="IDX_42C849558DBE9F58", columns={"immatVehicule"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateResa", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dateresa = '0000-00-00';

    /**
     * @var integer
     *
     * @ORM\Column(name="dureeResa", type="integer", nullable=true)
     */
    private $dureeresa = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="validationResa", type="boolean", nullable=true)
     */
    private $validationresa = '0';

    /**
     * @var \Vehicule
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Vehicule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="immatVehicule", referencedColumnName="immatVeh")
     * })
     */
    private $immatvehicule;

    /**
     * @var \Salarie
     *
     * @ORM\ManyToOne(targetEntity="Salarie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="matriculeSalarie", referencedColumnName="matriculeSal")
     * })
     */
    private $matriculesalarie;



    /**
     * Set dateresa
     *
     * @param \DateTime $dateresa
     *
     * @return Reservation
     */
    public function setDateresa($dateresa)
    {
        $this->dateresa = $dateresa;

        return $this;
    }

    /**
     * Get dateresa
     *
     * @return \DateTime
     */
    public function getDateresa()
    {
        return $this->dateresa;
    }

    /**
     * Set dureeresa
     *
     * @param integer $dureeresa
     *
     * @return Reservation
     */
    public function setDureeresa($dureeresa)
    {
        $this->dureeresa = $dureeresa;

        return $this;
    }

    /**
     * Get dureeresa
     *
     * @return integer
     */
    public function getDureeresa()
    {
        return $this->dureeresa;
    }

    /**
     * Set validationresa
     *
     * @param boolean $validationresa
     *
     * @return Reservation
     */
    public function setValidationresa($validationresa)
    {
        $this->validationresa = $validationresa;

        return $this;
    }

    /**
     * Get validationresa
     *
     * @return boolean
     */
    public function getValidationresa()
    {
        return $this->validationresa;
    }

    /**
     * Set immatvehicule
     *
     * @param \GSB\GestionParcAutosBundle\Entity\Vehicule $immatvehicule
     *
     * @return Reservation
     */
    public function setImmatvehicule(\GSB\GestionParcAutosBundle\Entity\Vehicule $immatvehicule)
    {
        $this->immatvehicule = $immatvehicule;

        return $this;
    }

    /**
     * Get immatvehicule
     *
     * @return \GSB\GestionParcAutosBundle\Entity\Vehicule
     */
    public function getImmatvehicule()
    {
        return $this->immatvehicule;
    }

    /**
     * Set matriculesalarie
     *
     * @param \GSB\GestionParcAutosBundle\Entity\Salarie $matriculesalarie
     *
     * @return Reservation
     */
    public function setMatriculesalarie(\GSB\GestionParcAutosBundle\Entity\Salarie $matriculesalarie = null)
    {
        $this->matriculesalarie = $matriculesalarie;

        return $this;
    }

    /**
     * Get matriculesalarie
     *
     * @return \GSB\GestionParcAutosBundle\Entity\Salarie
     */
    public function getMatriculesalarie()
    {
        return $this->matriculesalarie;
    }
}
