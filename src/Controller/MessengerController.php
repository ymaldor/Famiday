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
        
        if ($this->request->is('post')){
        if(isset($this->request->data)){
            $this->loadModel('Messenger');
            $this->Messenger->setMessage($this->request->data['message-from-select'], $this->request->data['Subject'],$this->request->data['Message']);
        }
        }
    }
    function inbox()
    {
        
    }
}