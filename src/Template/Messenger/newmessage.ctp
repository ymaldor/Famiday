
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
                        <div class="col-xs-12 col-sm-3 col-lg-2 inbox-left-menu">
                                        <h3 class="sr-only">Inbox Menu</h3>
                                        <ul class="list-unstyled left-menu">
                                                <li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox <span class="badge pull-right">32</span></a></li>
                                                <li><a href="#"><i class="fa fa-external-link"></i> Sent</a></li>
                                                <li><a href="#"><i class="fa fa-warning"></i> Spam <span class="badge pull-right">1</span></a></li>
                                                <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
                                        </ul>
                                </div>
                                <!-- end inbox left menu -->
                                <!-- right main content, new message form -->
                                <div class="col-xs-12 col-sm-9 col-lg-10">
                                        <div class="new-message-form">
                                            <?= $this->Form->create('newmessage',array('type' => 'post' , 'class' => 'form-horizontal', 'role' => 'form')) ?>
                                                <div class="form-group" class="col-sm-10">
                                                    <?php $options= array( 'douille','machin', 'machin', 'bidule'); ?>
                                                    <?= $this->Form->input('To',array('type' => 'select', 'label' => array( 'text' => 'To', 'class' => 'col-sm-2 control-label'), 'multiple', 'name' => 'message-from-select', 'options' => $options, 'class' => 'col-sm-10', 'class' => 'select2','id' => 'message-from-select' )) ?>
                                                </div>
                                                <div class="form-group" class="col-sm-10">
                                                    <?= $this->Form->input('Subject', array('type' => 'text', 'label' => array('text' => 'Subject', 'for' => "message-subject", 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'class' => 'col-sm-10', 'id' => 'message-subject')) ?>
                                                </div>
                                                <div class="form-group" class="col-sm-10">
                                                    <?= $this->Form->input('Message', array('type' => 'text', 'label' => array('text' => 'Message', 'for' => "message-subject", 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'class' => 'col-sm-10', 'class' => 'new-message-editor' , 'id' => 'message-subject')) ?>
                                                </div>
                                                <div class="form-group" class="col-sm-10 col-sm-offset-2">
                                                    <?= $this->Form->submit('Send Message', array('type' => 'submit', 'class' => 'btn btn-primary'))?>
                                                </div>
                                            <?= $this->Form->end()?>
                                                <form class="form-horizontal" role="form">
                                                        <div class="form-group">
                                                                <label class="col-sm-2 control-label">To</label>
                                                                <div class="col-sm-10">
                                                                        <select multiple name="message-from-select" id="message-from-select" class="select2">
                                                                                <option value="jane">jane</option>
                                                                                <option value="antonius" selected="selected">antonius</option>
                                                                                <option value="michael" selected="selected">michael</option>
                                                                                <option value="jack">jack</option>
                                                                                <option value="stacy">stacy</option>
                                                                        </select>
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="message-subject" class="col-sm-2 control-label">Subject</label>
                                                                <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="message-subject">
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                                <label class="col-sm-2 control-label">Message</label>
                                                                <div class="col-sm-10">
                                                                        <div class="new-message-editor"></div>
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                                <div class="col-sm-10 col-sm-offset-2">
                                                                        <button type="submit" class="btn btn-primary">Send Message</button>
                                                                </div>
                                                        </div>
                                                </form>
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

