
		<?php
					if($family!=false){
					?>
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
									<?= $this->Form->input ('prenom')?>
									<?= $this->Form->input ('nom') ?>
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
										[ 'Garcon/Fille','Pere/Mere', 'Oncle/tente', 'Grand-pere/Grand-mere', 'Grand-oncle/Grand-tente', 'Cousin/Cousine', 'Tuteur/Tutrice'],
										['empty' => '(choisissez)'] )?>
										<?= $this->Form->select(
										'Responsable',
										[0 => 'Oui',1=>  'Non'],
										['empty' => '(choisissez)'])?>
										
									
					
					
				<?= $this->Form->submit('Ajouter');?>	
					
				<?= $this->Form->end ?>		
					
					
				</div>
			</div>
		</div>
			<div class="panel panel-default">
				<div class="btn-danger btn-block">
					<h4 class="panel-title text-center">
						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="color:white; text-decoration:none;">
							<i class="fa fa-plus-circle" style="position:relative; top:-1px;"></i><i class="fa fa-plus-circle"></i> RETIRER UN MEMBRE DE LA FAMILLE
						</a>
					</h4>
				</div>
				
				<div id="collapseTwo" class="panel-collapse collapse">			
				
					<div class="panel-body">
																									
									<?= $this->Form->create ('Famille', array('type' => 'remove', 'url' => 'family/removal',))?>
																	
									<?= $this->Form->submit('Retirer');?>	
						
									<?= $this->Form->end ?>		
						
						
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
<?php 
}else{
?>
<div class="main-header" style="margin-bottom: 15px;">
	<div class="row">
		<div class="col-md-4">
			<h2>Editer mon profil</h2>
			<em>Donnez vos informations avant de créer une famille</em>
		</div>
		
		<?= $this->Form->create ('Famille', array('type' => 'post'))?>
									<?= $this->Form->input ('prenom')?>
									<?= $this->Form->input ('nom') ?>
									<?= $this->Form->input ('adress')?>
									<?= $this->Form->input ('phone')?>


									<?= $this->Form->input ('datebirth',array('type'=>'date'))?>

									<?= $this->Form->textarea('about')?>
									<?= $this->Form->select(
										'Sexe',
										[0 => 'Homme',1=>  'Femme'],
										['empty' => '(choisissez)'])?>
										
									<?= $this->Form->select(
										'Statut',
										[ 'Garcon/Fille','Pere/Mere', 'Oncle/tente', 'Grand-pere/Grand-mere', 'Grand-oncle/Grand-tente', 'Cousin/Cousine', 'Tuteur/Tutrice'],
										['empty' => '(choisissez)'] )?>
										<?= $this->Form->select(
										'Responsable',
										[0 => 'Oui',1=>  'Non'],
										['empty' => '(choisissez)'])?>
										
									
					
					
				<?= $this->Form->submit('Ajouter');?>	
					
				<?= $this->Form->end ?>		
				
	</div>
</div>	
<?php } ?>