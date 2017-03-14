<div id="left-sidebar" class="left-sidebar ">
	<!-- main-nav -->
	<div class="sidebar-scroll">
		<nav class="main-nav">	
			<ul class="main-menu">
				<li><?= $this->Html->link('<i class="fa fa-home"></i><span class="text">Accueil</span>', array('controller' => 'Calendar','action'=> 'index'), array('escape' => false)); ?></li>
				<li><a href="#" class="js-sub-menu-toggle"><i class="fa fa-navicon"></i><span class="text">Calendrier</span>
					<i class="toggle-icon fa fa-angle-left"></i></a>
					<ul class="sub-menu ">
						<li><?= $this->Html->link('<span class="text">Bill Jhones</span>', array('controller' => 'Calendar','action'=> 'index'), array('escape' => false)); ?></li>
						<li><?= $this->Html->link('<span class="text">Roger le nouveau né</span>', array('controller' => 'Calendar','action'=> 'index'), array('escape' => false)); ?></li>
						<li><?= $this->Html->link('<span class="text">Luis Sanchez</span>', array('controller' => 'Calendar','action'=> 'index'), array('escape' => false)); ?></li>
						<li><?= $this->Html->link('<span class="text">Wang Fu</span>', array('controller' => 'Calendar','action'=> 'index'), array('escape' => false)); ?></li>
						<li><?= $this->Html->link('<span class="text">Herman Gunter</span>', array('controller' => 'Calendar','action'=> 'index'), array('escape' => false)); ?></li>
						<li><?= $this->Html->link('<span class="text">Valesca Popozuda</span>', array('controller' => 'Calendar','action'=> 'index'), array('escape' => false)); ?></li>
					</ul>
				</li>
				<li><?= $this->Html->link('<i class="fa fa-home"></i><span class="text">Gestion famille</span>', array('controller' => 'Family','action'=> 'gestion'), array('escape' => false)); ?></li>
				<li><?= $this->Html->link('<i class="fa fa-home"></i><span class="text">Message</span>', array('controller' => 'Messenger','action'=> 'inbox'), array('escape' => false)); ?></li>
				<li><?= $this->Html->link('<i class="fa fa-home"></i><span class="text">Déconnexion</span>', array('controller' => 'User','action'=> 'deconnexion'), array('escape' => false)); ?></li>
			</ul>
		</nav>
		<!-- /main-nav -->
	</div>
</div>