<div class="content">
    <div class="main-header">
        <h2>View Message</h2>
        <em><?= $notifinbox ?> unread messages</em>
    </div>
    <div class="main-content">
        <!-- INBOX -->
        <div class="inbox view-single-message">
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
                    <!-- right main content, single message view -->
                    <div class="col-xs-12 col-sm-9 col-lg-10">
                        <div class="single-message-item">
                            <div class="header-top">
                                <h2><?= $message['object']?></h2>
                                <span class="timestamp pull-right text-muted"><?= $message['datemessage']?></span>
                            </div>
                            <div class="media clearfix header-bottom">
                                <div class="media-body">
                                    <a href="#"><span class="text-muted username"><?= $mailfrom ?></span></a>
                                    
                                </div>
                            </div>
                            <hr />
                            <div class="message-body">
                                <div class="message-body-text">
                                    <?= $message['message']?>
                                </div>
                                <hr />
                            </div>
                        </div>
                    </div>
                    <!-- end right main content, single message view -->
                </div>
            </div>
        </div>
        <!-- END INBOX -->
    </div>
</div>