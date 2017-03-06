<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppModel','Model');
App::uses('Security', 'Utility');

class UserModel extends AppModel{
    //public $displayField = 'name';
    
    public function createUser ($mail,$pass){
        if (isset($mail) AND isset($pass) AND !empty($mail) AND !empty($pass)){
            if($this->find('first', array('conditions' => array('user.mail' => $mail))) != true){
                $pwHash = Security::hash($pass);
                $data = array('email' => $mail, 'password' => $pwHash);
                $this->save($data);
                $this->set('message','Bienvenue à Famiday ');
                //$this->set('create', 'ok');
            }
            else {
                
                $this->set('message','Ce mail est déjà utilisé.');
            }
        }
        else
        {
            $this->set('message','Veuillez remplir tous les champs.');
        }
    }
    
    public function loginUser ($mail,$pass){
        if (isset($mail) AND isset($pass) AND !empty($mail) AND !empty($pass)){
            if(!empty($user = $this->find('first', array('conditions' => array('user.mail' => $mail))))){
                $pwHash = Security::hash($pass);
                if($pwHash == $user['user']['password']){
                    return ($user['user']['userid']);
                }
                else {
                    return 0;
                }
            }
            else {
                return 0;
            }
        }
        else {
            return 0;
        }
    }
    
    public function lostPass ($mail){
        if (isset($mail) AND !empty($mail)){
            if(!empty($user = $this->find('first', array('conditions' => array('user.mail' => $mail))))){
                $newpass = "";
                $template = "abcdefghijklmnopqrstuvwxyz0123456789";
                srand((double)microtime()*1000000);
                for($i=0; $i<10; $i++) {
                    $newpass .= $template[rand()%strlen($template)];
                }
                $newPwHash = Security::hash($newpass);
                $data = array('id' => $user['user']['userid'], 'password' => $newPwHash);
                $this->save($data);
                return $newpass;
            }
            else {
                return 0;
            }
        }
        else {
            return 0;
        }
    }
    
    public function modifyPass ($userid,$newPass){
        if (isset($newPass) AND !empty($newPass)){
            $newPwHash = Security::hash($newPass);
            $data = array('userid' => $userid, 'password' => $newPwHash);
            $this->save($data);
            return "Le mot de passe a été changé.";
        }
        return "Veuillez entrer un mot de passe valide.";
    }
}