<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Controller;
use App\Controller\AppController;


class FamilyController extends AppController{
    
    function gestion()
    {
		$id=$this->request->session()->read('id');
		if($this->request->is('post'))
		{
			$this->loadModel('family');
			$this->family->addpersonne($this->request->data,$id);
		}
	}

	function Formulaire()
    {
       if($this->request->is('post'))
	   {
			if(isset($this->request->data))
			{
			$this->loadModel('family');
			$this->family->add_personne(	
				$this->request->data['nom'],
				$this->request->data['prenom'],
				$this->request->data['about'],
				$this->request->data['Sexe'],
				$this->request->data['Statut'],
				$this->request->data['Responsable'],
				$this->request->data['adress'],
				$this->request->data['phone'],
				$this->request->data['datebirth']);
			}
	   }
    }
	
	function removal()
    {
       if($this->request->is('post'))
	   {
			if(isset($this->request->data))
			{
			$this->loadModel('Family');
			$this->Family->remove_personne();
			
			}
	   }
	   debug($this->request->data);
	   
	   $this->redirect(array(array('controller' => 'Family', 'action' => 'gestion')));
    }
}







