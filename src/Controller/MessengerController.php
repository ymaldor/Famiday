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
        $notifinbox=$this->Messenger->getnotif($this->request->Session()->read['id']);
        $this->set('notifinbox', $notifinbox);
            
            
        if ($this->request->is('post'))
        {
            if((isset($this->request->data)) && !empty($this->request->data['Message']))
            {
                $this->Messenger->setMessage($this->request->data['To'], $this->request->data['Subject'],$this->request->data['Message'],$this->Session->check['Userid']);
                $this->redirect(array('controller' => 'Messenger', 'action' => 'inbox'));
            }
        }
    }
        
        
    function inbox()
    {
        $this->loadModel('Messenger');
        $notifinbox=$this->Messenger->getNotif($this->request->session()->read['id']);
        $this->set('notifinbox', $notifinbox);
        $this->set('idmessage', " ");
            
        $param=isset($this->request->query['param'])         ? $this->request->query['param']         : 1;
        if($param=1)
        {
            $param='inbox';
        }else if ($param=2)
        {
            $param='sent';
        }else if ($param=3)
        {
            $param='trash';
        }
        $this->set('messages', $this->Messenger->getMessages($this->request->Session()->read['id'],$param));
    }
        
        
    function readmessage()
    {
        
        $idmessage=isset($this->request->query['param'])         ? $this->request->query['param']         : "machin";
        $this->set('idmessage', $idmessage);
        $this->set('notifinbox', $this->Messenger->getNotif($this->Session->check['userid']));
    }
}