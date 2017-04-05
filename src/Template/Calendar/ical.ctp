<div class="main-header" style="margin-bottom: 15px;">
	<h2>iCal</h2>
	<em>lecture et affichage des évènements d'un flux iCal</em>
</div>
<div class="main-content">
	<!-- WIDGET CALENDAR -->
	<div class="widget">
		<div class="widget-content"  style="padding: 10px;">
			<!-- external events -->
			<div id="external-events">
				<div class="row">
					<div class="col-sm-12">
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading btn-success btn-block" style="background-color: #5cb85c;">
									<h4 class="panel-title text-center">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="color:white; text-decoration:none;">
											<i class="fa fa-plus-circle" style="position:relative; top:-1px;"></i><i class="fa fa-plus-circle"></i> FLUX ICAL
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
																		'style'=>'margin-bottom:15px;',
																		'placeholder'=>'Lien du flux iCal')) ?>
									
									<?= $this->Form->submit('Lire',array(
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
					
					axisFormat: 'h:mm',
					columnFormat: {
						month: 'ddd',    // Mon
						week: 'ddd d', // Mon 7
						day: 'dddd M/d',  // Monday 9/7
						agendaDay: 'dddd d'
					},
					titleFormat: {
						month: 'MMMM yyyy', // September 2009
						week: "MMMM yyyy", // September 2009
						day: 'MMMM yyyy'                  // Tuesday, Sep 8, 2009
					},
					
					<?php
						if(isset($event) and $event!=[])
						{
							echo "events: [";
							for($i=0;$i<count($event);$i++)
							{
								echo"{title: '".$event[$i][1]."',start: '".$event[$i][2]."'";
								
								if($event[$i][3]!="") { echo",end: '".$event[$i][3]."'"; }
								
								echo ",allDay: false";
								echo ",color: '".$event[$i][10]."'";
								echo "}";
								if($i<count($event)-1) { echo","; }
							}
							echo "],";
						}
					?>
				
				});
				

			} // end calendar page demo
		</script>
		</div>
	</div>
	<!-- END WIDGET CALENDAR -->
</div>