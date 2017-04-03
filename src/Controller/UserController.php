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
        $this->loadModel('user');
        if($this->request->is('post')){
            $id = $this->user->loginUser($this->request->data['mail'], $this->request->data['password']);
            if( $id!= false){ 
                $this->request->Session()->write('mail',$this->request->data['mail']);
                $this->request->Session()->write('id',$id);
                
                $this->redirect(array('controller' => 'calendar', 'action' => 'index'));
            }
            else {  
                $this->set('message','Email ou mot de passe incorrect !');
            }
            
        }
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
            $this->request->Session()->write('mail',$this->request->data['mail']);
            $this->request->Session()->write('id',$id);        
            $this->redirect(array('controller' => 'calendar', 'action' => 'index'));
                        
                
                }
                
            }
    
    public function login()
    {
        $this->set('inscription',1);
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