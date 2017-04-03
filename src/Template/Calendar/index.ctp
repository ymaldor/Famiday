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
										
										<?php $options= array( '1'=>'douille','2'=>'machin', '3'=> 'truc', '4' => 'bidule'); ?>
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
																					'rows'=>'1',
																					'cols'=>'30',
																					'maxlength'=>'50',
																					'class'=>'form-control',
																					'style'=>'margin-bottom:15px;',
																					'placeholder'=>'description (facultative)')) ?>
										<!--<i class="fa fa-plus-square"></i> Create-->
										<?= $this->Form->submit('Créer l\'event',array(
																			'type'=>'submit',
																			'label'=>False,
																			'class'=>'btn btn-custom-primary btn-block',
																			'id'=>'message-from-select',
																			'style'=>'margin-bottom:5px;',
																			'placeholder'=>'destinataire',
																			'escape'=>False)) ?>
										<?= $this->Form->end() ?>
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
											<i class="fa fa-minus-circle" style="position:relative; top:-1px;"></i><i class="fa fa-minus-circle"></i> RETIRER UN EVENT
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="panel-body">
										<select name="select2" id="select1" class="select2 FORM" style="margin-bottom:15px">
										<?php 
											if(isset($event))
											{
												for($i=0;$i<count($event);$i++)
												{
													if($i==0) {$selec="selected";} else {$selec="";}
													echo "<option value=".$event[$i][0]." $selec>".$event[$i][1]." - ".$event[$i][2]." :: ".$event[$i][5]."</option>";
												}
											}
										?>
										</select>
										
										<!--DEBUT INVISIBLE FORM-->
										<?= $this->Form->create('Formulaire', array('type'=>'post', 'id'=>'hiddenform', 'url' => ['controller' => 'Calendar', 'action' => 'suppr']))?>
										<?= $this->Form->input('TheChosenOne',array('type'=>'text',
																					'id'=>'hiddeninput',
																					'label'=>False,
																					'style'=>'display:none;')) ?>
										<?= $this->Form->submit('Supprimer l\'event',array(
																			'type'=>'submit',
																			'label'=>False,
																			'class'=>'btn btn-custom-primary btn-block',
																			'id'=>'message-from-select',
																			'style'=>'margin-bottom:5px;',
																			'placeholder'=>'destinataire',
																			'escape'=>False)) ?>
										<?= $this->Form->end() ?>
										<!--FIN INVISIBLE FORM-->
										
										<script type="text/javascript">
											$('.FORM').on('change', function (e) {
												hiddenform = document.getElementById('hiddenform');
												hiddeninput = document.getElementById('hiddeninput');
												index = document.getElementById('select1').value;
												
												hiddeninput.value = index;
											});
										</script>
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
			<!-- king-components.js **ligne 500** -->

		
		<script type="text/javascript">
			//*******************************************
			/*	CALENDAR PAGE
			/********************************************/

			if( $('body').hasClass('fullcalendar') ) {

				// init the external events
				$('#external-events div.external-event').each(function() {
				
					// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
					// it doesn't need to have a start or end
					var eventObject = {
						title: $.trim($(this).text()) // use the element's text as the event title
					};
					
					// store the Event Object in the DOM element so we can get to it later
					$(this).data('eventObject', eventObject);
					
					// make the event draggable using jQuery UI
					$(this).draggable({
						zIndex: 999,
						revert: true,      // will cause the event to go back to its
						revertDuration: 0  //  original position after the drag
					});
					
				});

				// init the calendar
				var date = new Date();
				var d = date.getDate();
				var m = date.getMonth();
				var y = date.getFullYear();
				
				$('.calendar').fullCalendar({
					header: {
						left: 'month, agendaWeek, agendaDay',
						center: 'title',
						right: 'prev, next, today'
					},
					editable: false,
					droppable: false,
					
					defaultView: 'agendaWeek',
					
					<?php
						if(isset($event) and $event!=[])
						{
							echo "events: [";
							for($i=0;$i<count($event);$i++)
							{
								echo"{title: '".$event[$i][1]."',start: '".$event[$i][2]."'";
								
								if($event[$i][3]!="") { echo",end: '".$event[$i][3]."'"; }
								
								echo ",allDay: false";
								echo "}";
								if($i<count($event)-1) { echo","; }
							}
							echo "],";
						}
					?>
				
				});
				
				$colorPicker = $('select[name="colorpicker-picker-longlist"]');
				$colorPicker.simplecolorpicker({
					picker: false, 
					theme: 'fontawesome'
				});

				$('#btn-quick-event').click( function() {
					
					var originalEventObject = $(this).data('eventObject');
					var copiedEventObject = $.extend({}, originalEventObject);
					var eventTitle = 'Untitled Event';

					if( $('#quick-event-name').val() != '' ) {
						eventTitle = $('#quick-event-name').val();
					}
					
					copiedEventObject.title = eventTitle;
					copiedEventObject.start = date; // today
					copiedEventObject.color = $colorPicker.val();
						
					$('.calendar').fullCalendar('renderEvent', copiedEventObject, true);
				});

			} // end calendar page demo
		</script>
		</div>
	</div>
	<!-- END WIDGET CALENDAR -->
</div>