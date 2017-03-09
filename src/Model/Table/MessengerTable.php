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
        $me="douille";
        $me=mysql_escape_string($me);
        $message=mysql_escape_string($message);
        $subject=mysql_escape_string($subject);
        $myid=mysql_escape_string($myid);
        $id=md5(uniqid(rand(), true));
        $table = TableRegistry::get('message');
        $query=$table->query();
        $query->insert([
            'idmessage',
            'object',
            'message',
            ])
        ->values([
            'idmessage'=>$id,
            'object'=>$subject,
            'message'=>$message,
            ])
        ->execute();
        
        debug($id);
        
        $table = TableRegistry::get('message_sent');
        for($i=0;$i<sizeof($to);$i++)
        {
            $to[$i]=mysql_escape_string($to[$i]);
            $connection = ConnectionManager::get('default');
            $string=$connection->execute('INSERT INTO `message_sent` (`from`, `to`, `message`) '
                    . 'SELECT user.userid AS fromuser, user.userid AS touser, message.idmessage '
                    . 'FROM user, message '
                    . 'WHERE user.userid= "'.$me.'" '
                    . 'AND user.userid = "'.$to[$i].'" '
                    . 'AND message.idmessage="'.$id.'"');            
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