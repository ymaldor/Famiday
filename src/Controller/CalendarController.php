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
		//Formulaire
		if($this->request->is('post'))
		{
			if(isset($this->request->data))
			{
				//$calendrier = file_get_contents("http://86.245.24.241:6121/ICS/example.ics");
				$calendrier = file_get_contents($this->request->data['lien']);
				
				//Expressions régulieres
				$regExpMatch = "/SUMMARY:(.*)/";
				$regExpDDate = "/DTSTART:(.*)/";
				$regExpFDate = "/DTEND:(.*)/";
				$regExpDesc = "/DESCRIPTION:(.*)/";
				
				$n = preg_match_all($regExpMatch, $calendrier, $matchTableau, PREG_PATTERN_ORDER);
				preg_match_all($regExpDDate, $calendrier, $ddateTableau, PREG_PATTERN_ORDER);
				preg_match_all($regExpFDate, $calendrier, $fdateTableau, PREG_PATTERN_ORDER);
				preg_match_all($regExpDesc, $calendrier, $descTableau, PREG_PATTERN_ORDER);
				
				$event = [];
				
				for($j=0; $j<$n; $j++)
				{
					//Récupération des données
					$dannee = substr($ddateTableau[0][$j], 8, 4);
					$dmois = substr($ddateTableau[0][$j], 12, 2);
					$djour = substr($ddateTableau[0][$j], 14, 2);
					$dheure = substr($ddateTableau[0][$j], 17, 2);
					$dmin = substr($ddateTableau[0][$j], 19, 2);
					
					$fannee = substr($fdateTableau[0][$j], 6, 4);
					$fmois = substr($fdateTableau[0][$j], 10, 2);
					$fjour = substr($fdateTableau[0][$j], 12, 2);
					$fheure = substr($fdateTableau[0][$j], 15, 2);
					$fmin = substr($fdateTableau[0][$j], 17, 2);
					
					$match = substr($matchTableau[0][$j], 8);
					$desc = substr($descTableau[0][$j], 12); //Mise en forme
					
					//Affichage
					$event[$j][0] = $ddateTableau[0][$j];
					$event[$j][11] = $fdateTableau[0][$j];
					
					$event[$j][1] = $match;
					$event[$j][2] = $dannee."-".$dmois."-".$djour." ".$dheure.":".$dmin.":00";
					$event[$j][3] = $fannee."-".$fmois."-".$fjour." ".$fheure.":".$fmin.":00";
					$event[$j][10] = "#7bd148";
				}
				
				//debug($event);
				$this->set('event', $event);
			}
		}
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






