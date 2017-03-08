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
		//Formulaire
		if($this->request->is('post'))
		{
			if(isset($this->request->data))
			{
				$this->loadModel('calendar');
				
				//Eventname
				$eventname = $this->request->data['nom_event'];
				//Datetime start
				$aa = date('Y');
				$mmjj = explode("/", $this->request->data['debut_jjmm']);
				$hhmm = str_replace(":", "-", $this->request->data['debut_jjmm']);
				$eventstart = $aa."-".$mmjj[1]."-".$mmjj[0]." ".$hhmm.":00";
				//Datetime end
				$aa = date('Y');
				$mmjj = explode("/", $this->request->data['fin_jjmm']);
				$hhmm = str_replace(":", "-", $this->request->data['fin_jjmm']);
				$eventend = $aa."-".$mmjj[1]."-".$mmjj[0]." ".$hhmm.":00";
				//Participant
				$tmp=$this->request->data['participant'];
				$participant="";
				for($i=0;$i<count($tmp);$i++) { $participant+=$tmp[$i]; }
				//Summary
				$summary=$this->request->data['description'];
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
		//debug($this->request->data);
    }
}
