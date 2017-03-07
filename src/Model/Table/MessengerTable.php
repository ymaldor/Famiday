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

class MessengerTable extends Table{
    
     public function initialize(array $config)
    {
        $this->table('message');
    }
    
    function setMessage($to,$subject,$message)
    {
        $table = TableRegistry::get('message');
        $now=Time::now();
        $query = $table->query();
        $query->insert([
            'from',
            'to',
            'message',
            'datemessage',
            'trashed',
            'object',
            ])
            ->values([
                "me",
                $to,
                $message,
                $now,
                0,
                $subject
            ]);
    }
}