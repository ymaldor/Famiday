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
        $id=$this->request->session()->read('id');
        $notifinbox=$this->Messenger->getnotif($this->request->Session()->read('id'));
        $this->set('notifinbox', $notifinbox);
        $this->loadModel('User');
        $members=$this->User->getMembers($id);
        $this->set('options', $members);
        if ($this->request->is('post'))
        {
            if((isset($this->request->data)) && !empty($this->request->data['Message']))
            {
                $this->Messenger->setMessage($members,$this->request->data['To'], 
                                            $this->request->data['Subject'],
                                            $this->request->data['Message'],
                                            $id);
                $this->redirect(array('controller' => 'Messenger', 'action' => 'inbox'));
            }
        }
    }
        
        
    function inbox()
    {
        $this->loadModel('Messenger');
        $notifinbox=$this->Messenger->getNotif($this->request->session()->read('id'));
        $this->set('notifinbox', $notifinbox);
        $this->set('idmessage', " ");
            
        $param=isset($this->request->query['param'])         ? $this->request->query['param']         : 1;
        $this->set('param', $param);
        if($param==1)
        {
            $param='inbox';
        }else if ($param==2)
        {
            $param='sent';
        }else if ($param==3)
        {
            $param='trash';
        }
        $this->set('messages', $this->Messenger->getMessages($this->request->Session()->read('id'),$param));
    }
        
        
    function readmessage()
    {
        
        $idmessage=isset($this->request->query[0])         ? $this->request->query[0]         : null;
        $this->set('idmessage', $idmessage);
        $mailfrom=isset($this->request->query[1])         ? $this->request->query[1]         : "error";
        $this->set('mailfrom', $mailfrom);
        $param=isset($this->request->query[2])         ? $this->request->query[2]         : "error";
        if($param==1){
        $this->Messenger->readmsg($idmessage);}
        $this->set('notifinbox', $this->Messenger->getNotif($this->request->Session()->read('id')));
        $message=$this->Messenger->getMessage($idmessage);
        $this->set('message', $message);
    }
    function trashmessage()
    {
        
        $idmessage=isset($this->request->query[0])         ? $this->request->query[0]         : null;
        $param=isset($this->request->query[1])         ? $this->request->query[1]         : "error";
        if($param==1){
        $this->Messenger->trashmsg($idmessage);}
        $this->redirect(['controller'=>'Messenger', 'action'=>'inbox', '?'=>$param]);
    }
    function deletemessage()
    {
        
        $idmessage=isset($this->request->query[0])         ? $this->request->query[0]         : null;
        $param=isset($this->request->query[1])         ? $this->request->query[1]         : "error";
        if($param==3){
        $this->Messenger->deletemsg($idmessage);}
        $this->redirect(['controller'=>'Messenger', 'action'=>'inbox', '?'=>$param]);
    }
}