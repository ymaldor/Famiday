<?php 

use Cake\I18n\Time;
?>

<div class="main-header" style="margin-bottom: 15px;">
	<h2>Inbox</h2>
	<em></em>
</div>
<div class="inbox">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-2">
            <!-- search box -->
            <!-- end search box -->
        </div>
    </div>
    <div class="top">
        <div class="row">
            <div class="col-lg-2">
                <?= $this->Html->link('<i class="fa fa-pencil"></i> COMPOSE', array('controller' => 'Messenger','action'=> 'newmessage'),array('class' => 'btn btn-primary btn-block btn-compose', 'escape' => false )) ?>
            </div>
            <div class="col-lg-10">
                <div class="top-menu">
                    <?php include("list-inline.ctp"); ?>
                </div>
                <!-- /top-menu -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /top -->
    <div class="bottom">
        <div class="row">
            <!-- inbox left menu -->
            <?php include("messagesleftmenu.ctp"); ?>
            <!-- end inbox left menu -->
            <!-- right main content, the messages -->
            <div class="col-xs-12 col-sm-9 col-lg-10">
                <div class="messages">
                    <table class="table-condensed message-table">
                        <colgroup>
                            <col class="col-from">
                            <col class="col-title">
                            <col class="col-from">
                        </colgroup>
                        <tbody>
                            <?php
                                echo $this->Form->create('checkbox');
                                for($i=0;$i<count($messages);$i++)
                                {
                                    $date=new Time($messages[$i]['datemessage']);
                                    if($date->isToday())
                                    {
                                        $date=explode(' ', $messages[$i]['datemessage'])[1];
                                    }else{
                                        $date=explode(' ',$messages[$i]['datemessage'])[0];
                                    }
                                    /*$datetime=$messages[$i]['datemessage'];
                                    $datetime=explode(' ', $datetime);
                                    $date=explode('-',$datetime[0]);
                                    $time=explode(':',$datetime[1]);
                                    $date=*/
                                    
                                    if(!$messages[$i]['read'])
                                    {
                                    echo "<tr class=\"unread\">";
                                    }else {
                                        $tr=$tr."<tr class=\"read\">";
                                    }
                                    echo ""
                                    . "<td><span class=\"from\">".$messages[$i]['mail']."</span></td>"
                                    . "<td><span class=\"title\">".$messages[$i]['object']."</span><span class=\"preview\"></span></td>"
                                    . "<td><span class=\"timestamp\">".$date."</span></td><td>";
                                    echo $this->Html->link('lire',array('controller'=>'Messenger', 'action'=>'readmessage', '?'=>[$messages[$i]['id'], $messages[$i]['mail']]));
                                echo "</td></tr>";
                                }
                            
                                echo $this->Form->end();
                                
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end right main content, the messages -->
        </div>
    </div>
</div>
