<div class="main-header" style="margin-bottom: 15px;">
	<h2>Calendar</h2>
	<em>event calendar with drag & drop feature</em>
</div>
<div class="main-content">
	<!-- WIDGET CALENDAR -->
	<div class="widget">
		<div class="widget-content"  style="padding: 10px;">
			<!-- external events -->
			<div id="external-events">
				<div class="row">
					<div class="col-sm-6">
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading btn-success btn-block" style="background-color: #5cb85c;">
									<h4 class="panel-title text-center">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="color:white; text-decoration:none;">
											<i class="fa fa-plus-circle" style="position:relative; top:-1px;"></i><i class="fa fa-plus-circle"></i> AJOUTER UN EVENT
										</a>
									</h4>
								</div>
								
								<div id="collapseOne" class="panel-collapse collapse">
									<div class="panel-body">
										<!--DEBUT FORM-->
										<?= $this->Form->create('Formulaire', array('type'=>'post'))?>
										<?= $this->Form->input('nom_event',array(	'type'=>'text',
																			'label'=>False,
																			'class'=>'form-control',
																			'style'=>'margin-bottom:5px;',
																			'placeholder'=>'titre du nouvel évènement')) ?>
										
										<div class="col-sm-6" style="padding:0 2px 0 0;">
											<?= $this->Form->input('debut_jjmm',array(	'type'=>'text',
																				'label'=>False,
																				'class'=>'form-control',
																				'style'=>'margin-bottom:5px;',
																				'placeholder'=>'date début (jj/mm)')) ?>
											<?= $this->Form->input('debut_hhmm',array(	'type'=>'text',
																				'label'=>False,
																				'class'=>'form-control',
																				'style'=>'margin-bottom:5px;',
																				'placeholder'=>'heure début (hh:mm)')) ?>
										</div>
										<div class="col-sm-6" style="padding:0 0 0 2px;">
											<?= $this->Form->input('fin_jjmm',array('type'=>'text',
																					'label'=>False,
																					'class'=>'form-control',
																					'style'=>'margin-bottom:5px;',
																					'placeholder'=>'date fin (jj/mm)')) ?>
											<?= $this->Form->input('fin_hhmm',array('type'=>'text',
																					'label'=>False,
																					'class'=>'form-control',
																					'style'=>'margin-bottom:5px;',
																					'placeholder'=>'heure fin (hh:mm)')) ?>
										</div>
										
										<?php $options= array( 'douille'=>'douille','machin'=>'machin', 'truc'=> 'truc', 'bidule' => 'bidule'); ?>
										<?= $this->Form->input('participant',array(	'type'=>'select',
																					'multiple'=>'true',
																					'label'=>False,
																					'options'=>$options,
																					'class'=>'select2',
																					'id'=>'message-from-select',
																					'style'=>'margin-bottom:5px;',
																					'placeholder'=>'participant')) ?>
										<?= $this->Form->input('description',array(	'type'=>'textarea',
																					'label'=>False,
																					'rows'=>'3',
																					'cols'=>'30',
																					'maxlength'=>'99',
																					'class'=>'form-control',
																					'style'=>'margin-bottom:5px;',
																					'placeholder'=>'description (facultative)')) ?>
										<!--<i class="fa fa-plus-square"></i> Create-->
										<?= $this->Form->submit('Create',array(
																			'type'=>'submit',
																			'label'=>False,
																			'class'=>'btn btn-custom-primary btn-block',
																			'id'=>'message-from-select',
																			'style'=>'margin-bottom:5px;',
																			'placeholder'=>'destinataire',
																			'escape'=>False)) ?>
										<?= $this->Form->end ?>
										<!--FIN FORM-->
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6">
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading btn-danger btn-block" style="background-color: #DB3833;">
									<h4 class="panel-title text-center">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="color:white; text-decoration:none;">
											<i class="fa fa-minus-circle" style="position:relative; top:-1px;"></i><i class="fa fa-plus-circle"></i> RETIRER UN EVENT
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="panel-body">
										<input type="text" class="form-control" id="quick-event-name" placeholder="new event title">
										<button type="button" id="btn-quick-event" class="btn btn-custom-primary btn-block"><i class="fa fa-plus-square"></i> Create</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end external events -->
			
			<!-- LIEN DE MODIF DU CALENDRIER -->
			<div class="calendar"></div>
			<!-- assets/js/king-components.fs **ligne 500** -->
			<!-- Javascript -->
<?= $this->Html->script('plugins/summernote/summernote.min.js') ?>
<?= $this->Html->script('plugins/select2/select2.min.js') ?>
<?= $this->Html->script('king-page.js') ?>
		</div>
	</div>
	<!-- END WIDGET CALENDAR -->
</div>