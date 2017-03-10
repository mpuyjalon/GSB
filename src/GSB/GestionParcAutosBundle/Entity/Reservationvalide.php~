<?php

namespace GSB\GestionParcAutosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservationvalide
 *
 * @ORM\Table(name="reservationvalide", uniqueConstraints={@ORM\UniqueConstraint(name="matriculeSalarie", columns={"matriculeSalarie"})}, indexes={@ORM\Index(name="IDX_B13AED98DBE9F58", columns={"immatVehicule"})})
 * @ORM\Entity
 */
class Reservationvalide
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="dureeResa", type="integer", nullable=false)
     */
    private $dureeresa;

    /**
     * @var integer
     *
     * @ORM\Column(name="validationResa", type="integer", nullable=false)
     */
    private $validationresa;

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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Reservationvalide
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set dureeresa
     *
     * @param integer $dureeresa
     *
     * @return Reservationvalide
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
     * @param integer $validationresa
     *
     * @return Reservationvalide
     */
    public function setValidationresa($validationresa)
    {
        $this->validationresa = $validationresa;

        return $this;
    }

    /**
     * Get validationresa
     *
     * @return integer
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
     * @return Reservationvalide
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
     * @return Reservationvalide
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
