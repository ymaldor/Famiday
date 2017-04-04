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


					<?= $this->Form->input ('datebirth',array('type'=>'date'));?>

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
		</div>
	</div>
</div>

<div class="main-content">
	<div class="widget">
		<div class="widget-content"  style="padding: 10px;">
			<div id="external-events">
				<div class="row">
				
					<?php
					
					foreach($fam[1] as $f)
					{
						echo '<div class="col-md-4">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
										'.$f['prenom'].' '.$f['nom'].'
										</h3>
										'.$this->Html->link("retirer", array('controller'=>'family','action'=>'removal', '?'=>$f['id'])).'
									</div>
									
									<div lass="panel-body" style="padding: 0 15px 0 0;">
										<div class="col-sm-5" style="padding: 0;">
											'.$this->Html->image($f['id'].'.jpg').'
										</div>
										<div class="col-sm-7" style="padding: 15px;">
											'.$f['about'].'
										
										</div>
									</div>
								</div>
							</div>';
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>