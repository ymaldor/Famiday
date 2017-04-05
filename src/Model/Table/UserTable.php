<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\I18n\Time;
use Cake\I18n\FrozenTime;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;

class UserTable extends Table{
    
     public function initialize(array $config)
    {
        $this->table('user');
    }
    function addUser($mail,$password)
    {
        $id=md5(uniqid(rand(), true));
        $table = TableRegistry::get('user');
        $now=Time::now();
        $user=$table->newEntity();
        $user->mail=$mail;
        $user->password=$password;
        $user->id=$id;
        $user->datecreation=$now;
        $user->online=0;
        $table->save($user);
		
		return $id;
    }
    /*public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $passwordHasher = new SimplePasswordHasher();
        $this->data[$this->alias]['password'] = $passwordHasher->hash(
            $this->data[$this->alias]['password']
        );
    }
    return true;
}*/

    function loginUser($mail,$password){
        $table=TableRegistry::get('user');
        $a=false;
        $a=$table->find()->where(['mail'=> $mail,
            'password'=>$password])->toArray();
        if (!$a){return false;}
        return $a[0]['id'];
    }
    public function getMembers($id){
        $table=TableRegistry::get('User');
        $string=$table->find()->where(['id !='=>$id])->toArray();
        return $string;
    }
    public function getusermail($id){
        $table= TableRegistry::get('user');
        $mail=$table->get($id);
        return $mail->mail;
    }
}