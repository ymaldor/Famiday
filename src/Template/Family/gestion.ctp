<div class="main-header" style="margin-bottom: 15px;">
	<h2>Editer mon profil</h2>
	<em>Donnez vos informations avant de créer une famille</em>
</div>

<div class="main-content">
	<div class="widget">
		<div class="widget-content"  style="padding: 10px;">
			<div id="external-events">
				<div class="row">
					<div class="col-sm-6">
					<?= $this->Form->create ('Famille', array('type' => 'post'))?>
					
					<?= $this->Form->input('prenom',array(	'type'=>'text',
															'id'=>'prenom',
															'label'=>False,
															'class'=>'form-control',
															'style'=>'margin-bottom:5px;',
															'required'=>'required',
															'placeholder'=>'Prénom')) ?>
					<?= $this->Form->input('nom',array(	'type'=>'text',
														'id'=>'nom',
														'label'=>False,
														'class'=>'form-control',
														'style'=>'margin-bottom:5px;',
														'required'=>'required',
														'placeholder'=>'Nom')) ?>
					<?= $this->Form->input('adress',array(	'type'=>'text',
															'id'=>'adress',
															'label'=>False,
															'class'=>'form-control',
															'style'=>'margin-bottom:15px;',
															'required'=>'required',
															'placeholder'=>'Adresse')) ?>
					</div>
					<div class="col-sm-6">
					<?= $this->Form->input('phone',array(	'type'=>'text',
															'id'=>'phone',
															'label'=>False,
															'class'=>'form-control',
															'style'=>'margin-bottom:5px;',
															'required'=>'required',
															'placeholder'=>'Téléphone')) ?>
					<?= $this->Form->input('about',array(	'type'=>'textarea',
															'label'=>False,
															'rows'=>'3',
															'cols'=>'30',
															'maxlength'=>'50',
															'class'=>'form-control',
															'style'=>'margin-bottom:15px;',
															'placeholder'=>'Apprend nous en plus sur toi ! (facultatif)')) ?>
					</div>
					<div class="col-sm-12">
					<?= $this->Form->input('Sexe',array(	'type'=>'select',
															'label'=>False,
															'options'=>['0' => 'Homme','1'=>  'Femme'],
															'class'=>'select2',
															'id'=>'Sexe',
															'required'=>'required',
															'style'=>'margin-bottom:5px;')) ?>
					<?= $this->Form->input('Statut',array(	'type'=>'select',
															'label'=>False,
															'options'=>['Adulte' => 'Adulte','Enfant'=>  'Enfant'],
															'class'=>'select2',
															'id'=>'Statut',
															'required'=>'required',
															'style'=>'margin-bottom:5px;')) ?>
					<?= $this->Form->input('Responsable',array(	'type'=>'select',
															'label'=>False,
															'options'=>['0' => 'Responsable de la famille','1'=>  'Non responsable de la famille'],
															'class'=>'select2',
															'id'=>'Responsable',
															'required'=>'required',
															'style'=>'margin-bottom:15px;')) ?>
					<?= $this->Form->submit('Ajouter',array(	'type'=>'submit',
																'label'=>False,
																'class'=>'btn btn-success btn-block',
																'id'=>'message-from-select',
																'style'=>'margin-bottom:5px;',
																'placeholder'=>'destinataire',
																'escape'=>False)) ?>
					
					<?= $this->Form->end ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>