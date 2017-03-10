<?php

namespace GSB\GestionParcAutosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GSB\GestionParcAutosBundle\Entity\Vehicule;

class vueFlotteController extends Controller
{
    public function indexAction()
    {
        return $this->render('GSBGestionParcAutosBundle:vueFlotte:index.html.twig', array(
				'listeVehicule' => $this->get('mdv.Vehicule')->getAll(),
		));
    }
    
    public function caracteristiquesAction(Vehicule $vehicule)
    {
    	return $this->render('GSBGestionParcAutosBundle:vueFlotte:caracteristiques.html.twig', array(
    			'vehicule' => $vehicule,
    	));
    }
}
