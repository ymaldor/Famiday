<nav class="top-bar navbar-fixed-top">
    <div class="container">
        <div class="clearfix">
            <a href="#" class="pull-left toggle-sidebar-collapse"><i class="fa fa-bars"></i></a>
            <!-- logo -->
            <div class="pull-left left logo">
                <a href="index"><?= $this->Html->image('kingadmin-logo-white.png'); ?></a>
                <h1 class="sr-only">Famiday Admin Dashboard</h1>
            </div>
            <!-- end logo -->
            <div class="pull-right right">
                <!-- top-bar-right -->
                <div class="top-bar-right">
                      
                    <!-- logged user and the menu -->
                    <div class="logged-user">
                        <div class="btn-group">
                            <a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                        <?= $this->Html->image('profile-avatar.png', array('width'=>'20px')) ?>
                                <span class="name"><?= $emailmember?></span> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                        <?= $this->Html->link('
                                        <i class="fa fa-power-off"></i>
                                        <span class="text">Logout</span>', array('controller'=>'user', 'action'=>'disconnect'), array('escape'=>false)) ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end logged user and the menu -->
                </div>
                <!-- end top-bar-right -->
            </div>
        </div>
    </div>
    <!-- /container -->
</nav>