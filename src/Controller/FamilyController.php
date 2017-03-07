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
        $form->button('button_text', array('onclick' => "location.href='".$this->Html->url(family/gestion)."'"));
    } 


	function Formulaire()
    {
       if($this->request->is('post'))
	   {
			if(isset($this->request->data))
			{
				
			$this->FamilyModel->	
			$this->request->data['nom'];
			$this->request->data['prenom'];
			$this->request->data['about'];
			$this->request->data['Sexe'];
			$this->request->data['Statut'];
			$this->request->data['adresse'];
			$this->request->data['phone'];
			$this->request->data['datebirth'];
			
			}
	   
	   }
	   debug($this->request->data);
    } 

}







