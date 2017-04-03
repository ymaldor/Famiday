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
        $this->primaryKey('id');
    }
    
    public function getMessages($myid, $param)
    {
        $myid="douille";
        
        $connection = ConnectionManager::get('default');
        if($param='inbox')
        {
        $messages=$connection->execute('SELECT message.message, message.object, message.datemessage, message.read, user.mail '
                . 'FROM `message_sent`, `message`, `user` '
                . 'WHERE message_sent.to=user.id '
                . 'AND user.id="'.$myid.'" '
                . 'AND message.trashed=0 '
                . 'AND message.id=message_sent.message'
                . '')->fetchAll('assoc');
        }else if($param='sent')
        {
            $messages=$connection->execute('SELECT message.message, message.object, message.datemessage, message.read, user.mail '
                . 'FROM `message_sent`, `message`, `user` '
                . 'WHERE message_sent.from=user.id '
                . 'AND user.id="'.$myid.'" '
                . 'AND message.trashed=0 '
                . 'AND message.id=message_sent.message'
                . '')->fetchAll('assoc');
        }else if($param='trashed')
        {
            $messages=$connection->execute('SELECT message.message, message.object, message.datemessage, message.read, user.mail '
                . 'FROM `message_sent`, `message`, `user` '
                . 'WHERE (message_sent.to=user.id OR message_sent.from=user.id) '
                . 'AND user.id="'.$myid.'" '
                . 'AND message.trashed=1 '
                . 'AND message.id=message_sent.message'
                . '')->fetchAll('assoc');
        }
        return $messages;
        
    }
    
    
    public function setMessage($to,$subject,$message,$myid)
    {
        $myid="douille";
        $id=md5(uniqid(rand(), true));
        $table = TableRegistry::get('message');
        $new=$table->newEntity();
        $new->id=$id;
        $new->object=$subject;
        $new->message=$message;
        $table->save($new);
        
        
        $table = TableRegistry::get('message_sent');
        for($i=0;$i<sizeof($to);$i++)
        {
            $table=  TableRegistry::get('message');
            $a=$table->find()->where(['id'=>$id])->count();
            $table=  TableRegistry::get('user');
            $b=$table->find()->where(['id'=>$myid])->count();
            $c=$table->find()->where(['id'=>$to[$i]])->count();
            
            if($a*$b*$c=1){
                $table= TableRegistry::get('message_sent');
                $new=$table->newEntity();
                $new->from=$myid;
                $new->to=$to[$$i];
                $new->message=$id;     
            }
        }
        
    }
    
    public function getNotif($myid)
    {
        if($myid==null || $myid =="")return '0';
        $connection = ConnectionManager::get('default');
        $string=$connection->execute('SELECT COUNT(read)
            FROM message AS m
            INNER JOIN message_sent AS ms ON m.id= ms.message
            WHERE ms.to = "'.$myid.'" AND m.read = 0')->fetchAll('assoc');
        $string=$string[0]['COUNT(read)'];
        return $string;
    }
}