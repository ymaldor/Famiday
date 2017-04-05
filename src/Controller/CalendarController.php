<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Controller;
use App\Controller\AppController;


class CalendarController extends AppController{
	
	function index()
    {
		//Session
		$session = $this->request->session();
		$id = $session->read('id');
		
		$this->loadModel('calendar');
		
		//Formulaire
		if($this->request->is('post'))
		{
			if(isset($this->request->data))
			{
				//Eventname
				$eventname = $this->request->data['nom_event'];
				//Datetime start
				$aa = date('Y');
				$mmjj = explode("/", $this->request->data['debut_jjmm']);
				$hhmm = str_replace(":", "-", $this->request->data['debut_hhmm']);
				$eventstart = $aa."-".$mmjj[1]."-".$mmjj[0]." ".$hhmm.":00";
				//Datetime end
				$aa = date('Y');
				$mmjj = explode("/", $this->request->data['fin_jjmm']);
				$hhmm = str_replace(":", "-", $this->request->data['fin_hhmm']);
				$eventend = $aa."-".$mmjj[1]."-".$mmjj[0]." ".$hhmm.":00";
				//Participant
				$participant=implode(",", $this->request->data['participant']);
				//Summary
				$summary="";
				//Last modif
				$last_modif = date("y-m-d");
				//Fréquence
				$frequence = "0";
				//Until
				$until = $eventend;
				
				$this->Calendar->add_event($eventname,$eventstart,$eventend,$participant,$summary,$last_modif,$frequence,$until);
				
				//$this->Calendar->add_event();
			}
		}
		
		//Event
		$here = explode("/", $this->request->here());
		$nb = count($here)-1;
		
		if(isset($here[$nb]) and intval($here[$nb])!=0 and $this->Calendar->is_family($id, intval($here[$nb])))
		{
			$idpersonne = intval($here[$nb]);
			$this->set('event', $this->Calendar->recup_event($idpersonne));
			
			$session->write('idpersonne',$idpersonne);
		}
		else
		{
			$family = $this->Calendar->recup_family($id);
			$event = [];
			
			for($i=0; $i<count($family); $i++)
			{
				$tmp = $this->Calendar->recup_event($family[$i][0]);
				
				for($j=0; $j<count($tmp); $j++)
				{
					$event[count($event)] = $tmp[$j];
				}
			}
			
			$this->set('event', $event);
			$session->write('idpersonne',0);
		}
    }
	
	function ical()
    {
		
		
		
		
    }
	
	function suppr()
    {
		//Formulaire
		if($this->request->is('post'))
		{
			if(isset($this->request->data))
			{
				$session = $this->request->session();
				
				if(intval($this->request->data['TheChosenOne'])!=0)
				{
					$this->loadModel('Calendar');
					$this->Calendar->suppr_event($this->request->data['TheChosenOne']);
				}
				
				$this->redirect(array('controller' => 'Calendar', 'action' => 'index/'.$session->read('idpersonne')));
			}
		}
    }
}






