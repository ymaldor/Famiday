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
                /*$this->user->createUser($this->request->data['Subscribe']['mail'], $this->request->data['Subscribe']['password']);
                if (isset($this->user->data['user']['create']))
                {
                    $id = $this->user->loginUser($this->request->data['Subscribe']['mail'], $this->request->data['Subscribe']['password']);
                    $this->Session->write('mail',$this->request->data['Subscribe']['mail']);
                    $this->Session->write('userid',$id);
                    $this->redirect(array('controller' => 'User', 'action' => 'home'));  
                }*/
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
        if ($this->request->is('post')){
            /*if(isset($this->request->data['LostPass'])){
                $newpass = $this->user->lostPass($this->request->data['LostPass']['mail']);
                $this->set('mail','Envoyé à l\'addresse mail :' . $this->request->data['LostPass']['mail'] . '. Votre mot de passe a été réinitialisé, voici le nouveau : ' . $newpass . '. Pensez à le changer !');
            }*/
            if(isset($this->request->data['Connection'])){
                
                if(($id = $this->user->loginUser($this->request->data['Connection']['mail'], $this->request->data['Connection']['password'])) != 0){ 
                    $this->Session->write('mail',$this->request->data['Connection']['mail']);
                    $this->Session->write('userid',$id);
                    
                    $this->redirect(array('controller' => 'user', 'action' => 'home'));
                }
                else {  
                    $this->set('message','Email ou mot de passe incorrect !');
                }
                
            }
            if (isset($this->user->data['user']['message'])){
                $this->set('message',$this->user->data['user']['message']);
            }
        }
    }
    
    public function disconnect()
    {
        if($this->Session->check('userid'))
        {
            $this->Session->delete('userid');
            //$this->Session->delete('id_player');
            $this->Session->delete('email');
        }
        $this->redirect(array('controller' => 'user', 'action' => 'index'));
    } 
}