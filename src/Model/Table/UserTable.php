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
        $table = TableRegistry::get('user');
        $now=Time::now();
        $query=$table->query();
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
        ->execute();
    }
}