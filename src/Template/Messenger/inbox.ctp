<?php 

use Cake\I18n\Time;
?>

<div class="main-header" style="margin-bottom: 15px;">
	<h2>Inbox</h2>
	<em><?php 
        switch ($param)
        {
            case 1 : echo "Messages received";
                break;
            case 2 : echo "Messages sent";
                break;
            case 3 : echo "Messages trashed";
                break;
            default : echo "Messages received";
                break;
        }
        ?></em>
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
                            <col class="col-from">
                            <col class="col-lg-10">
                            <col class="col-lg-2">
                            <col class="col-lg-2">
                            <col class="col-lg-2">
                            <col>
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>From</th>
                                <th>To</th>
                                <th>Subject</th>
                                <th></th>
                                <th>Read</th>
                                <?php if($param!=2){?>
                                <th>Delete</th>
                                <?php }?>
                            </tr>
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
                                    
                                    if(!$messages[$i]['read'] && $param==1)
                                    {
                                    echo "<tr class=\"unread\">";
                                    }else {
                                        echo "<tr class=\"read\">";
                                    }
                                    echo ""
                                    . "<td><span class=\"from\">".$messages[$i]['mailfrom']."</span></td>"
                                    . "<td><span class=\"from\">".$messages[$i]['mail']."</span></td>"
                                    . "<td><span class=\"title\">".$messages[$i]['object']."</span><span class=\"preview\"></span></td>"
                                    . "<td><span class=\"timestamp\">".$date."</span></td><td>";
                                    echo $this->Html->link('<i class="fa fa-inbox col-md-offset-5"></i>',array('controller'=>'Messenger', 'action'=>'readmessage', '?'=>[$messages[$i]['id'], $messages[$i]['mail'], $param]), array('escape'=>false));
                                    if($param==1){
                                    echo "</td><td>";
                                    echo $this->Html->link('<i class="fa fa-trash col-md-offset-5"></i>',array('controller'=>'Messenger', 'action'=>'trashmessage', '?'=>[$messages[$i]['id'], $param]), array('escape'=>false));
                                    }else if($param==3)
                                    {
                                    echo "</td><td>";
                                    echo $this->Html->link('<i class="fa fa-trash col-md-offset-5"></i>',array('controller'=>'Messenger', 'action'=>'deletemessage', '?'=>[$messages[$i]['id'], $param]), array('escape'=>false));
                                    }
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
