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
    
    
    public function getMessages($myid, $param)
    {
        
        $connection = ConnectionManager::get('default');
        $table=  TableRegistry::get('Message');
        if($param=='inbox')
        {
        $messages=$connection->execute('SELECT message.id,message.message, message.object, message.datemessage, message.read, user.mail '
                . 'FROM `message_sent`, `message`, `user` '
                . 'WHERE message_sent.to=user.id '
                . 'AND user.id="'.$myid.'" '
                . 'AND message.trashed=0 '
                . 'AND message.id=message_sent.message'
                . '')->fetchAll('assoc');
        for($i=0;$i<count($messages);$i++)
        {
            $table=TableRegistry::get('message_sent');
            $mailfrom=$table->find()->select('from')->where(['message'=>$messages[$i]['id']])->toArray()[0]['from'];
            $table=TableRegistry::get('user');
            $mailfrom=$table->find()->select('mail')->where(['id'=>$mailfrom])->toArray()[0]['mail'];
            $messages[$i]['mailfrom']=$mailfrom;
        }
        }else if($param=='sent')
        {
            $messages=$connection->execute('SELECT message.id,message.message, message.object, message.datemessage, message.read, user.mail '
                . 'FROM `message_sent`, `message`, `user` '
                . 'WHERE message_sent.from=user.id '
                . 'AND user.id="'.$myid.'" '
                . 'AND message.trashed=0 '
                . 'AND message.id=message_sent.message'
                . '')->fetchAll('assoc');
        for($i=0;$i<count($messages);$i++)
        {
            $table=TableRegistry::get('message_sent');
            $mailfrom=$table->find()->select('to')->where(['message'=>$messages[$i]['id']])->toArray()[0]['to'];
            $table=TableRegistry::get('user');
            $mailfrom=$table->find()->select('mail')->where(['id'=>$mailfrom])->toArray()[0]['mail'];
            $messages[$i]['mailfrom']=$messages[$i]['mail'];
            $messages[$i]['mail']=$mailfrom;
        }
        }else if($param=='trash')
        {
            $messages=$connection->execute('SELECT message.id,message.message, message.object, message.datemessage, message.read, user.mail '
                . 'FROM `message_sent`, `message`, `user` '
                . 'WHERE (message_sent.to=user.id OR message_sent.from=user.id) '
                . 'AND user.id="'.$myid.'" '
                . 'AND message.trashed=1 '
                . 'AND message.id=message_sent.message'
                . '')->fetchAll('assoc');
        for($i=0;$i<count($messages);$i++)
        {
            $table=TableRegistry::get('message_sent');
            $mailfrom=$table->find()->select('from')->where(['message'=>$messages[$i]['id']])->toArray()[0]['from'];
            $table=TableRegistry::get('user');
            $mailfrom=$table->find()->select('mail')->where(['id'=>$mailfrom])->toArray()[0]['mail'];
            $messages[$i]['mailfrom']=$mailfrom;
        }
        }
        return $messages;
        
    }
    
    
    public function setMessage($members,$to,$subject,$message,$myid)
    {
        $id=md5(uniqid(rand(), true));
        $table = TableRegistry::get('message');
        $new=$table->newEntity();
        $new->datemessage=Time::now();
        $new->id=$id;
        $new->object=$subject;
        $new->message=$message;
        $new->trashed=0;
        $new->read=0;
        $table->save($new);
        
        $table = TableRegistry::get('message_sent');
        for($i=0;$i<sizeof($to);$i++)
        {
            $table=  TableRegistry::get('message');
            $a=$table->find()->where(['id'=>$id])->count();
            $table=  TableRegistry::get('user');
            $b=$table->find()->where(['id'=>$myid])->count();
            $c=$table->find()->where(['id'=>$members[$to[$i]]['id']])->count();
            if($a*$b*$c=1){
                $table= TableRegistry::get('message_sent');
                $new=$table->newEntity();
                $new->from=$myid;
                $new->to=$members[$to[$i]]['id'];
                $new->message=$id;
                $table->save($new);
            }
        }
        
    }
    
    public function getNotif($myid)
    {
        if($myid==null || $myid =="")return '0';
        $connection = ConnectionManager::get('default');
        $string=$connection->execute('SELECT COUNT(`read`) '
                . 'FROM message AS m '
                . 'INNER JOIN message_sent ON m.id= message_sent.message '
                . 'WHERE message_sent.to = "'.$myid.'" AND m.`read` = 0')->fetchAll('assoc');
        
        $string=$string[0]['COUNT(`read`)'];
        return $string;
    }
    public function getMessage($idmsg)
    {
        $table=  TableRegistry::get('Message');
        $msg=$table->find()->where(['id'=>$idmsg])->toArray();
        return $msg[0];
    }
    public function readmsg($idmsg)
    {
        $table=  TableRegistry::get('Message');
        $msg=$table->get($idmsg);
        $msg->read=1;
        $table->save($msg);
    }
    public function trashmsg($idmsg)
    {
        $table=  TableRegistry::get('Message');
        $msg=$table->get($idmsg);
        $msg->trashed=1;
        $table->save($msg);
    }
    public function deletemsg($idmsg)
    {
        $table=TableRegistry::get('message_sent');
        $msg=$table->find()->select('id')->where(['message'=>$idmsg])->toArray()[0]['id'];
        $table->delete($table->get($msg));
        $table=  TableRegistry::get('Message');
        $msg=$table->get($idmsg);
        $table->delete($msg);
    }
}