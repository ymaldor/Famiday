<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;
use App\Controller\AppController;




class UserController extends AppController{

    //public $uses = array('user');
    
    
    
    function index()
    {
        $this->set('inscription',1);
    }

    function register()
    {
        $this->set('inscription',1);


        if ($this->request->is('post'))
        {
            if(isset($this->request->data))
            {
                        $this->loadModel('User');
                        $this->User->addUser(
                            $this->request->data['mail'],
                            $this->request->data['password']
                            );   
                    }
                        
                
                }
                debug($this->request->data);
            }
    
    public function login()
    {
        $this->set('inscription',1);


        if($this->Session->check('userid'))
        {
            $this->redirect(array('controller'=>'User', 'action'=>'index'));
        }
        if(isset($this->request->data)){
            
            if(($id = $this->user->loginUser($this->request->data['mail'], $this->request->data['password'])) != 0){ 
                $this->Session->write('mail',$this->request->data['mail']);
                $this->Session->write('id',$id);
                
                $this->redirect(array('controller' => 'user', 'action' => 'home'));
            }
            else {  
                $this->set('message','Email ou mot de passe incorrect !');
            }
            
        }
        if (isset($this->user->data['message'])){
            $this->set('message',$this->user->data['message']);
        }
    }
    
    public function disconnect()
    {
        if($this->Session->check('id'))
        {
            $this->Session->delete('id');
            //$this->Session->delete('id_player');
            $this->Session->delete('mail');
        }
        $this->redirect(array('controller' => 'user', 'action' => 'index'));
    } 




    
    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
}