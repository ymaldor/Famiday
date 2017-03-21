    

<div class="col-xs-12 col-sm-3 col-lg-2 inbox-left-menu">
    <h3 class="sr-only">Inbox Menu</h3>
    <ul class="list-unstyled left-menu">
        <li class="active">
            <?php 
            if($notifinbox != '0')
            {
            $inbox_text ='<i class="fa fa-inbox"></i> Inbox<span class="badge pull-right">'.$notifinbox.'</span>';
            }
            else {
                $inbox_text='<i class="fa fa-inbox"></i> Inbox';
            }
            
             echo $this->Html->link($inbox_text, array('controller' => 'Messenger','action'=> 'inbox', '?' => array('param' => 1)), array('escape' => false)); ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="fa fa-external-link"></i> Sent', array('controller' => 'Messenger','action'=> 'inbox', '?' => array('param' => 2)), array( 'escape' => false)) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="fa fa-trash"></i> Trash', array('controller' => 'Messenger','action'=> 'inbox', '?' => array('param' => 3)), array('escape' => false)) ?>
        </li>
    </ul>
</div>