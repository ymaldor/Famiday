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
        $this->primaryKey('idmessage');
    }
    
    public function setMessage($to,$subject,$message,$myid)
    {
        $id=md5(uniqid(rand(), true));
        $now=Time::now();
        
        $connection = ConnectionManager::get('default');
        $connection->execute('INSERT INTO'
                . 'message'
                . 'VALUES('.$now.','.$id.',0,'.$message.','.$subject.',0)');
        for($i=0;$i<sizeof($to);$i++)
        {
            $connection->execute('INSERT INTO'
                . 'message_sent'
                . 'VALUES('.$myid.','.$to[$i].','.$id.')');
            
        }
        
    }
    
    public function getNotif($myid)
    {
        $connection = ConnectionManager::get('default');
        $string=$connection->execute('SELECT COUNT(isread)
            FROM message AS m
            INNER JOIN message_sent AS ms ON m.idmessage= ms.message
            WHERE ms.to = "'.$myid.'" AND m.isread = 0')->fetchAll('assoc');
        $string=$string[0]['COUNT(isread)'];
        return $string;
    }
}