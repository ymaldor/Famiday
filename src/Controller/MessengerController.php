<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;
use App\Controller\AppController;


class MessengerController extends AppController{
    
   
    
    function newmessage()
    {
        $this->loadModel('Messenger');
        //$notifinbox=$this->Messenger->getnotif();
        if(!isset($notifinbox))
        {
            $notifinbox=" ";
        }
        $this->set('notifinbox', $notifinbox);
        
        
        if ($this->request->is('post'))
		{
			if(isset($this->request->data))
			{
                            debug($this->request->data);
				//$this->Messenger->setMessage($this->request->data['message-from-select'], $this->request->data['Subject'],$this->request->data['Message']);
                                //$this->redirect(array('controller' => 'Messenger', 'action' => 'inbox'));
                        }
        }
    }
    function inbox()
    {
        $param=isset($this->request->query['param'])         ? $this->request->query['param']         : 1;
    }
}