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
		
		$this->loadModel('family');
		if($this->family->isFamily($id))
		{
		
		if($this->request->is('post'))
		{
			
			$this->family->addpersonne($this->request->data,false,false,$id);
			
		}
		$b=$this->family->getfamily($id);
		$this->set('fam',$b);
		}
		else{
		$this->set('fam',false);
			if($this->request->is('post'))
		{
			
			$idfam=$this->family->addfamily($this->request->data);
			$this->family->addpersonne($this->request->data,$idfam,$id,false);
			
		}
		}
		
	}

	
	function removal()
    {
		$idpersonne=isset($this->request->query[0])         ? $this->request->query[0]         : null;
			$this->loadModel('Family');
			$this->Family->removepersonne($idpersonne);
			
			
	   
	   //debug($this->request->data);
	   
	   $this->redirect(array('controller' => 'Family', 'action' => 'gestion'));
    }
}







