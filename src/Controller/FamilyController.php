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
		
		$b=$this->family->getfamily($id);
		$this->set('family',$b);
		
		
		
		
		
		
		if($this->request->is('post'))
		{
			
			$this->family->addpersonne($this->request->data,$id);
			
		}
	}

	
	function removal()
    {
       if($this->request->is('post'))
	   {
			if(isset($this->request->data))
			{
			$this->loadModel('Family');
			$this->Family->removepersonne();
			
			}
	   }
	   debug($this->request->data);
	   
	   $this->redirect(array(array('controller' => 'Family', 'action' => 'gestion')));
    }
}







