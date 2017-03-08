
<div class="main-header" style="margin-bottom: 15px;">
    <h2>New Message</h2>
    <em>compose new message</em>
</div>
<div class="main-content">
    <!-- INBOX -->
    <div class="inbox new-message">
        <div class="bottom">
            <div class="row">
                <!-- inbox left menu -->
                <?php include("messagesleftmenu.ctp"); ?>
                <!-- end inbox left menu -->
                <!-- right main content, new message form -->
                <div class="col-xs-12 col-sm-9 col-lg-10">
                    <div class="new-message-form">
                                            <?= $this->Form->create('newmessage',array('type' => 'post' , 'class' => 'form-horizontal', 'role' => 'form')) ?>
                        <div class="form-group" class="col-sm-10">
                                                    <?php $options= array( 'douille'=>'douille','machin'=>'machin', 'truc'=> 'truc', 'bidule' => 'bidule'); ?>
                                                    <?= $this->Form->input('To',array('type' => 'select', 'multiple' => 'true','label' => array( 'text' => 'To', 'class' => 'col-sm-2 control-label'),  'options' => $options, 'class' => 'col-sm-10', 'class' => 'select2','id' => 'message-from-select' )) ?>
                        </div>
                        <div class="form-group" class="col-sm-10">
                                                    <?= $this->Form->input('Subject', array('type' => 'text', 'label' => array('text' => 'Subject', 'for' => "message-subject", 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'class' => 'col-sm-10', 'id' => 'message-subject')) ?>
                        </div>
                        <div class="form-group" class="col-sm-10">
                                                    <?= $this->Form->input('Message', array('type' => 'text', 'label' => false, 'class' => 'form-control', 'class' => 'col-sm-10', 'class' => 'new-message-editor')) ?>
                        </div>
                        
                        <div class="form-group" class="col-sm-10 col-sm-offset-2">
                                                    <?= $this->Form->submit('Send Message', array('type' => 'submit', 'class' => 'btn btn-primary'))?>
                        </div>
                                            <?= $this->Form->end()?>
                        
                    </div>
                </div>
                <!-- end right main content, new message form -->
            </div>
        </div>
    </div>
    <!-- END INBOX -->
</div>


<!-- Javascript -->
<?= $this->Html->script('plugins/summernote/summernote.min.js') ?>
<?= $this->Html->script('plugins/select2/select2.min.js') ?>
<?= $this->Html->script('king-page.js') ?>

