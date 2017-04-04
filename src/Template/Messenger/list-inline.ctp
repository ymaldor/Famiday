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
    </div>
</div>