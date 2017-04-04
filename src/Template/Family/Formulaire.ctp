<div class="panel panel-default">
	<div class="panel-heading btn-success btn-block" style="background-color: #5cb85c;">
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

