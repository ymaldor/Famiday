<ul class="list-inline top-menu-group1">
    <li>
        <?= $this->Html->link('<i class="fa fa-angle-left"></i> BACK', array( 'action' => 'inbox'), array( 'type' => 'button', 'class' => 'btn', 'escape' => false)) ?>
        
    </li>
    <li>
        <?php 
            if($idmessage!=" ")
            echo $this->Html->link('<i class="fa fa-trash-o"></i> DELETE',array('action'=> 'delete', '?' => array('param' => $idmessage)), array( 'type' => 'button', 'class' => 'btn', 'escape' => false)) 
        ?>
    </li>
</ul>
<div class="navigation">
    <div class="pager-wrapper">
        <ul class="pager">
            <?= $this->Html->link('<li class="fa fa-angle-left"></li>', array('action' => 'readmessage', '?' =>array('param' => '0')), array('escape'=>false)) ?>
            <?= $this->Html->link('<li class="fa fa-angle-right"></li>', array('action' => 'readmessage', '?' =>array('param' => '1')), array('escape'=>false)) ?>
        </ul>
    </div>
</div>