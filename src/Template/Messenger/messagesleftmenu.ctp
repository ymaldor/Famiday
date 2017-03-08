    

<div class="col-xs-12 col-sm-3 col-lg-2 inbox-left-menu">
    <h3 class="sr-only">Inbox Menu</h3>
    <ul class="list-unstyled left-menu">
        <li class="active">
            <?= $this->Html->link("Inbox", array('controller' => 'Messenger', '?' => array('param' => 1)), array( 'class' => 'fa fa-inbox')) ?>
            <?php
                if($notifinbox != " "){
                echo $this->Html->link($notifinbox, array('controller' => 'Messenger','action'=> 'inbox', '?' => array('param' => 1)), array('class' => 'badge pull-right'));}
            ?>
        </li>
        <li>
            <?= $this->Html->link("Sent", array('controller' => 'Messenger','action'=> 'inbox', '?' => array('param' => 2)), array( 'class' => 'fa fa-inbox')) ?>
        </li>
        <li>
            <?= $this->Html->link("Trash", array('controller' => 'Messenger','action'=> 'inbox', '?' => array('param' => 3)), array( 'class' => 'fa fa-inbox')) ?>
        </li>
    </ul>
</div>