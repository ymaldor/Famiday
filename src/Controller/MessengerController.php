<?php
    
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
     
namespace App\Controller;

use App\Controller\AppController;
use function debug;
    
    
class MessengerController extends AppController{
    
    
    
    function newmessage()
    {
        $this->loadModel('Messenger');
        $notifinbox=$this->Messenger->getnotif($this->Session->check['Userid']);
        $this->set('notifinbox', $notifinbox);
            
            
        if ($this->request->is('post'))
		{
            debug($this->request->data);
			if((isset($this->request->data)) && !empty($this->request->data['Message']))
			{
                            $this->Messenger->setMessage($this->request->data['To'], $this->request->data['Subject'],$this->request->data['Message'],$this->Session->check['Userid']);
                            //$this->redirect(array('controller' => 'Messenger', 'action' => 'inbox'));
                        }
        }
    }
    
    
    function inbox()
    {
        $this->loadModel('Messenger');
        $notifinbox=$this->Messenger->getNotif($this->Session->check['Userid']);
        $this->set('notifinbox', $notifinbox);
        
        $param=isset($this->request->query['param'])         ? $this->request->query['param']         : 1;
    }
}