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
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Create Event</h3></div>
							<div class="panel-body">
								<input type="text" class="form-control" id="quick-event-name" placeholder="new event title">
								<button type="button" id="btn-quick-event" class="btn btn-custom-primary btn-block"><i class="fa fa-plus-square"></i> Create</button>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Draggable Events</h3></div>
							<div class="panel-body">
								<div id="event1" class="external-event">Seminar</div>
								<div id="event2" class="external-event">Jane's Birthday</div>
								<div id="event3" class="external-event">Coffee Break</div>
								<div id="event4" class="external-event">Fitness</div>
								<div id="event5" class="external-event">Buy Some Foods</div>
								<div id="event6" class="external-event">Weekly Meeting</div>
								<div id="event7" class="external-event">Monthly Meeting</div>
								<br />
								<label class="control-inline fancy-checkbox">
									<input type="checkbox" id="drop-remove">
									<span>Remove event after drop</span>
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end external events -->
			
			<!-- LIEN DE MODIF DU CALENDRIER -->
			<div class="calendar"></div>
			<!-- assets/js/king-components.fs **ligne 500** -->
			
		</div>
	</div>
	<!-- END WIDGET CALENDAR -->
</div>