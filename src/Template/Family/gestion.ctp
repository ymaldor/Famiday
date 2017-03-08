<div class="main-header" style="margin-bottom: 15px;">
	<div class="row">
		<div class="col-md-4">
			<h2>Ma Famille</h2>
			<em>Membres de ma famille</em>
		</div>
		
		<div class="col-md-4"></div>
		<div class="col-md-4">
		<div class="panel panel-default">
			<div class="btn-danger btn-block">
				<h4 class="panel-title text-center">
					<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="color:white; text-decoration:none;">
						<i class="fa fa-plus-circle" style="position:relative; top:-1px;"></i><i class="fa fa-plus-circle"></i> AJOUTER UN MEMBRE DE LA FAMILLE
					</a>
				</h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse">
				<div class="panel-body">
					<!--DEBUT FORM-->

					
					
					
				<?= $this->Form->create ('Famille', array('type' => 'post'))?>
				<?= $this->Form->input ('nom') ?>
				<?= $this->Form->input ('prenom')?>
				<?= $this->Form->input ('adress')?>
				<?= $this->Form->input ('phone')?>


				<?= $this->Form->input ('datebirth');?>

				<?= $this->Form->textarea('about')?>
				<?= $this->Form->select(
					'Sexe',
					[0 => 'Homme',1=>  'Femme'],
					['empty' => '(choisissez)'])?>
					
				<?= $this->Form->select(
					'Statut',
					['Pere/Mere', 'Oncle/tente', 'Grand-pere/Grand-mere', 'Grand-oncle/Grand-tente', 'Frere/Soeur', 'Cousin/Cousine', 'Tuteur/Tutrice'],
					['empty' => '(choisissez)'] )?>
					
				<?= $this->Form->submit('Ajouter');?>
				<?= $this->Form->end ?>					
					
					
				<div class="col-sm-2">
					<?= $this->Html->link('<i class="fa fa-plus-square"></i>Ajouter une personne', array('action'=>'gestion'), array('class' => 'btn btn-custom-primary btn-block', 'id' => 'btn-quick-event', 'escape'=>false)) ?>
				</div>	
					
					
					
				</div>
			</div>
		</div>
		</div>

		
		
	</div>
</div>

<div class="main-content">
	<!-- WIDGET CALENDAR -->
	<div class="widget">
		<div class="widget-content"  style="padding: 10px;">
			<!-- external events -->
			<div id="external-events">
				<div class="row">
				
					
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title"><?='FDP nb I' ?></h3>
							</div>
							
							<div class="panel-body" style="padding: 0 15px 0 0;">
								<div class="col-sm-5" style="padding: 0;">
									<?= $this->Html->image('profile-avatar.png', ['alt'=>'Profile Picture', 'style'=>'width: 100%; height: 100%;']) ?>
								</div>
								<div class="col-sm-7" style="padding: 15px;">
										fiudiudfzhoxufh
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title"><?= 'FDP nb II' ?></h3>
							</div>
							
							<div class="panel-body" style="padding: 0 15px 0 0;">
								<div class="col-sm-5" style="padding: 0;">
									<?= $this->Html->image('profile-avatar.png', ['alt'=>'Profile Picture', 'style'=>'width: 100%; height: 100%;']) ?>
								</div>
								<div class="col-sm-7" style="padding: 15px;">
										fiudiudfzhoxufh
								</div>
							</div>
						</div>
					</div>
					
					
					
				</div>
					
	
			</div>
		</div>
	</div>
</div>	