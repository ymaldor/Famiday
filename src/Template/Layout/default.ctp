<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
	<head>
		<?= $this->Html->charset() ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			<?= $this->fetch('title') ?>
		</title>
		<?= $this->Html->meta('icon') ?>
		
		<?= $this->fetch('meta') ?>
		<?= $this->fetch('css') ?>
		<?= $this->fetch('script') ?>
		<?= $this->fetch('assets') ?>
		<!-- CSS -->
		<?= $this->Html->css('bootstrap.min.css') ?>
		<?= $this->Html->css('font-awesome.min.css') ?>
		<?= $this->Html->css('main.min.css') ?>
		
		<?= $this->Html->css('calendar.css') ?>
		<!--[if lte IE 9]>
			<?= $this->Html->css('main-ie.css') ?>
			<?= $this->Html->css('main-ie-part2.css') ?>
		<![endif]-->
		<!-- JS -->
		<?= $this->Html->script('jquery/jquery-2.1.0.min.js') ?>
		<?= $this->Html->script('bootstrap/bootstrap.js') ?>
		<?= $this->Html->script('plugins/modernizr/modernizr.js') ?>
		<?= $this->Html->script('plugins/bootstrap-tour/bootstrap-tour.custom.js') ?>
		<?= $this->Html->script('plugins/jquery-slimscroll/jquery.slimscroll.min.js') ?>
		<?= $this->Html->script('king-common.js') ?>
		<?= $this->Html->script('jquery-ui/jquery-ui-1.10.4.custom.min.js') ?>
		<?= $this->Html->script('plugins/fullcalendar/fullcalendar.js') ?>
		<?= $this->Html->script('plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js') ?>
		<?= $this->Html->script('king-components.js') ?>
		<?= $this->Html->script('plugins/summernote/summernote.min.js') ?>
		<?= $this->Html->script('plugins/select2/select2.min.js') ?>
		<?= $this->Html->script('king-page.js') ?>
		
		
		
	</head>

	<?php if(!isset($inscription)) { echo '
		<body class="sidebar-fixed topnav-fixed fullcalendar">
		<div id="wrapper" class="wrapper">';

			include("top_bar.php"); 
			include("left_bar.php");
			
			echo'<div id="main-content-wrapper" class="content-wrapper">
				<div class="content"> '; } ?>
					<?= $this->fetch("content") ?>
	<?php if(!isset($inscription)) { echo ' 
				</div>
				
				<footer class="footer">
					<p>&copy; 2016 The Develovers</p>
				</footer>
			</div>
		</div>
	</body> '; } ?>
	
	<?= $this->Flash->render() ?>
	
</html>