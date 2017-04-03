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
        /*$query=$table->query();
        $query->insert([
            'mail',
            'password',
            'datecreation',
            'online'
            ])
        ->values([
            'mail'=>$mail,
            'password'=>$password,
            'datecreation'=>$now,
            'online'=>0
            ])
        ->execute();*/
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

}