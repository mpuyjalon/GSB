<?php

namespace  GSB\GestionParcAutosBundle\Services;

use Doctrine\Common\Persistence\ObjectManager;
use GSB\GestionParcAutosBundle\Entity\Vehicule;


class VehiculeService {
	protected $em;

	public function __construct(ObjectManager $em){
		$this->em = $em;
	}

	public function getAll(){
		return $this->em->getRepository ('GSBGestionParcAutosBundle:Vehicule' )->findAll();
	}

	public function getNew(){
		$vehicule = new Vehicule();
		return $vehicule;
	}

	public function save($element){
		if(!$this->em->contains($element))
			$this->em->persist ( $element );

			$this->em->flush ();
	}

	public function delete($element){
		$this->em->remove($element);
		$this->em->flush ();
	}



}