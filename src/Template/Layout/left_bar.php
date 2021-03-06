<div id="left-sidebar" class="left-sidebar ">
	<!-- main-nav -->
	<div class="sidebar-scroll">
		<nav class="main-nav">	
			<ul class="main-menu">
				<li><?= $this->Html->link('<i class="fa fa-home"></i><span class="text">Accueil</span>', array('controller' => 'Calendar','action'=> 'index'), array('escape' => false)); ?></li>
				<li><a href="#" class="js-sub-menu-toggle"><i class="fa fa-navicon"></i><span class="text">Calendrier</span>
					<i class="toggle-icon fa fa-angle-left"></i></a>
					<ul class="sub-menu ">
						<?php
						for($i=0;$i<count($family);$i++)
						{
							echo "<li>";
							echo $this->Html->link('<i class="fa fa-calendar"></i><span class="text">'.$family[$i][1].' '.$family[$i][2].'</span>', array('controller' => 'Calendar','action'=> 'index/'.$family[$i][0]), array('escape' => false));
							echo "</li>";
						}
						?>
					</ul> 
				</li>
				<li><?= $this->Html->link('<i class="fa fa-group"></i><span class="text">Gestion famille</span>', array('controller' => 'Family','action'=> 'gestion'), array('escape' => false)); ?></li>
				<li><?= $this->Html->link('<i class="fa fa-envelope"></i><span class="text">Message</span>', array('controller' => 'Messenger','action'=> 'inbox'), array('escape' => false)); ?></li>
				<li><?= $this->Html->link('<i class="fa fa-file-text"></i><span class="text">Flux iCal</span>', array('controller' => 'Calendar','action'=> 'ical'), array('escape' => false)); ?></li>
				<li><?= $this->Html->link('<i class="fa fa-power-off"></i><span class="text">Déconnexion</span>', array('controller' => 'User','action'=> 'disconnect'), array('escape' => false)); ?></li>
			</ul>
		</nav>
		<!-- /main-nav -->
	</div>
</div>