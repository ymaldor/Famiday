<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<?php $this->assign("title","famiday") ?>
<head>
	<title>Calendar | Famiday - Admin Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Famiday - Bootstrap Admin Dashboard Theme">
	<meta name="author" content="The Develovers">
	<!-- CSS -->
	<!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/main.css" rel="stylesheet" type="text/css">
	<link href="css/my-custom-styles.css" rel="stylesheet" type="text/css">-->
        <?= $this->Html->css('bootstrap.min.css') ?>
        <?= $this->Html->css('font-awesome.min.css') ?>
        <?= $this->Html->css('main.css') ?>
        <?= $this->Html->css('my-custom-styles.css') ?>
	<!--[if lte IE 9]>
		<link href="assets/css/main-ie.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/main-ie-part2.css" rel="stylesheet" type="text/css"/>
	<![endif]-->
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/kingadmin-favicon144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/kingadmin-favicon114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/kingadmin-favicon72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/ico/kingadmin-favicon57x57.png">
        <?= $this->Html->meta(array(
            'rel' => 'apple-touch-icon-precomposed',
            'sizes' => '144x144',
            'link' => '/img/ico/kingadmin-favicon144x144.png',
        )); ?>
	<link rel="shortcut icon" href="assets/ico/favicon.png">
        <SCRIPT LANGUAGE="JavaScript">
  </SCRIPT>
</head>

<body class="sidebar-fixed topnav-fixed fullcalendar">
	<!-- WRAPPER -->
	<div id="wrapper" class="wrapper">
		
		
		
		<!-- MAIN CONTENT WRAPPER -->
		<div id="main-content-wrapper" class="content-wrapper ">

			<!-- main -->
			<div class="content">
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
			</div>
			<!-- /main -->
			<!-- FOOTER -->
			<footer class="footer">
				&copy; 2016 The Develovers
			</footer>
			<!-- END FOOTER -->
		</div>
		<!-- END CONTENT WRAPPER -->
	</div>
	<!-- END WRAPPER -->
	
	<!-- Javascript -->
	<!--<script src="assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="assets/js/bootstrap/bootstrap.js"></script>
	<script src="assets/js/plugins/modernizr/modernizr.js"></script>
	<script src="assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"></script>
	<script src="assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/king-common.js"></script>
	<script src="demo-style-switcher/assets/js/deliswitch.js"></script>
	<script src="assets/js/jquery-ui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>
	<script src="assets/js/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js"></script>
	<script src="assets/js/king-components.js"></script>-->
        <?= $this->Html->script('jquery/jquery-2.1.0.min.js') ?>
        <?= $this->Html->script('bootstrap/bootstrap.js') ?>
        <?= $this->Html->script('plugins/modernizr/modernizr.js') ?>
        <?= $this->Html->script('plugins/bootstrap-tour/bootstrap-tour.custom.js') ?>
        <?= $this->Html->script('plugins/jquery-slimscroll/jquery.slimscroll.min.js') ?>
        <?= $this->Html->script('king-common.js') ?>
        <?= $this->Html->script('deliswitch.js') ?>
        <?= $this->Html->script('jquery-ui/jquery-ui-1.10.4.custom.min.js') ?>
        <?= $this->Html->script('plugins/fullcalendar/fullcalendar.min.js') ?>
        <?= $this->Html->script('plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js') ?>
        <?= $this->Html->script('king-components.js') ?>

	
</body>

</html>
