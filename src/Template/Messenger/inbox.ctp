<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>Inbox | KingAdmin - Admin Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="KingAdmin - Bootstrap Admin Dashboard Theme">
	<meta name="author" content="The Develovers">
        
	<!--[if lte IE 9]>
		<link href="assets/css/main-ie.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/main-ie-part2.css" rel="stylesheet" type="text/css"/>
	<![endif]-->

	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/kingadmin-favicon144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/kingadmin-favicon114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/kingadmin-favicon72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/ico/kingadmin-favicon57x57.png">
	<link rel="shortcut icon" href="assets/ico/favicon.png">
</head>

<body class="sidebar-fixed topnav-fixed ">
	<!-- WRAPPER -->
	<div id="wrapper" class="wrapper">
		
		<!-- MAIN CONTENT WRAPPER -->
		<div id="main-content-wrapper" class="content-wrapper ">
			<!-- main -->
			<div class="content">
				<div class="main-header" style="margin-bottom: 15px;">
					<h2>Inbox</h2>
					<em>3 unread messages</em>
				</div>
				<div class="main-content">
					<!-- INBOX -->
					<div class="inbox">
						<div class="row">
							<div class="col-lg-10 col-lg-offset-2">
								<!-- search box -->
								<form class="searchbox">
									<div class="input-group input-group-sm">
										<input type="search" class="form-control">
										<span class="input-group-btn">
							<button class="btn btn-primary" type="button"><i class="fa fa-search"></i> Search</button>
						</span>
									</div>
								</form>
								<!-- end search box -->
							</div>
						</div>
						<div class="top">
							<div class="row">
								<div class="col-lg-2">
									<button class="btn btn-primary btn-block btn-compose"><i class="fa fa-pencil"></i> COMPOSE</button>
								</div>
								<div class="col-lg-10">
									<div class="top-menu">
										<label class="control-inline fancy-checkbox fancy-checkbox-all">
											<input type="checkbox">
											<span>&nbsp;</span>
										</label>
										<ul class="list-inline top-menu-group1 hide">
											<li>
												<button type="button" class="btn"><i class="fa fa-trash-o"></i> DELETE</button>
											</li>
											<li>
												<button type="button" class="btn"><i class="fa fa-warning"></i> SPAM</button>
											</li>
											<li>
												<div class="btn-group">
													<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-folder"></i> MOVE <span class="caret"></span>
													</button>
													<ul class="dropdown-menu">
														<li><a href="#">My Folder</a></li>
														<li><a href="#">My Other Folder</a></li>
													</ul>
												</div>
											</li>
										</ul>
										<ul class="list-inline top-menu-group2">
											<li class="top-menu-label hide">
												<div class="btn-group">
													<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-tags"></i> LABEL <span class="caret"></span>
													</button>
													<ul class="dropdown-menu">
														<li><a href="#">Blog Comments</a></li>
														<li><a href="#">New Users</a></li>
														<li><a href="#">Password</a></li>
													</ul>
												</div>
											</li>
											<li class="top-menu-more">
												<div class="btn-group">
													<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-list"></i> MORE <span class="caret"></span>
													</button>
													<ul class="dropdown-menu">
														<li class="mark-all"><a href="#">Mark All As Read</a></li>
														<li class="hide mark-read"><a href="#">Mark As Read</a></li>
														<li class="hide mark-unread"><a href="#">Mark As Unread</a></li>
														<li class="hide add-star"><a href="#">Add Star</a></li>
													</ul>
												</div>
											</li>
										</ul>
										<div class="navigation">
											<button type="button" class="btn btn-link hidden-sm hidden-md hidden-lg inbox-nav-toggle"><i class="fa fa-bars"></i></button>
											<div class="pager-wrapper">
												<span class="info">Showing 1-10 of 32</span>
												<ul class="pager">
													<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
													<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- /top-menu -->
								</div>
							</div>
							<!-- /row -->
						</div>
						<!-- /top -->
						<div class="bottom">
							<div class="row">
								<!-- inbox left menu -->
								<div class="col-xs-12 col-sm-3 col-lg-2 inbox-left-menu">
									<h3 class="sr-only">Inbox Menu</h3>
									<ul class="list-unstyled left-menu">
										<li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox <span class="badge pull-right">32</span></a></li>
										<li><a href="#"><i class="fa fa-external-link"></i> Sent</a></li>
										<li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
									</ul>
								</div>
								<!-- end inbox left menu -->
								<!-- right main content, the messages -->
								<div class="col-xs-12 col-sm-9 col-lg-10">
									<div class="messages">
										<table class="table-condensed message-table">
											<colgroup>
												<col class="col-check">
												<col class="col-star">
												<col class="col-from">
												<col class="col-title">
												<col class="col-attachment">
												<col class="col-timestamp">
											</colgroup>
											<tbody>
												<tr>
													<td>
														<label class="fancy-checkbox">
															<input type="checkbox">
															<span>&nbsp;</span>
														</label>
													</td>
													<td><i class="fa fa-star-o"></i></td>
													<td><span class="from">Alice</span></td>
													<td><span class="message-label label2">New User</span>
														<span class="title">New User Registration</span> <span class="preview">- A new user has been registered on your site but not yet activated. You can activate this user on </span></td>
													<td><span class="icon-attachment"><i class="fa fa-paperclip"></i></span></td>
													<td><span class="timestamp">12:01 PM</span></td>
												</tr>
												<tr class="unread">
													<td>
														<label class="fancy-checkbox">
															<input type="checkbox">
															<span>&nbsp;</span>
														</label>
													</td>
													<td><i class="fa fa-star-o"></i></td>
													<td><span class="from">Jordan Smith</span></td>
													<td><span class="title">Can I Change My Username?</span> <span class="preview">- I've been wondering if we actually can change our username on the front-end. This should be</span></td>
													<td><span class="icon-attachment"><i class="fa fa-paperclip"></i></span></td>
													<td><span class="timestamp">10:46 AM</span></td>
												</tr>
												<tr class="unread">
													<td>
														<label class="fancy-checkbox">
															<input type="checkbox">
															<span>&nbsp;</span>
														</label>
													</td>
													<td><i class="fa fa-star-o"></i></td>
													<td><span class="from">Michael Doe</span></td>
													<td><span class="message-label label3">Password</span>
														<span class="title">Request For New Password</span> <span class="preview">- Hi Stacy, I try to reset maybe you can check some of my example. I was't really understand why this is happening ...</span></td>
													<td>&nbsp;</td>
													<td><span class="timestamp">09:22 AM</span></td>
												</tr>
												<tr>
													<td>
														<label class="fancy-checkbox">
															<input type="checkbox">
															<span>&nbsp;</span>
														</label>
													</td>
													<td><i class="fa fa-star-o"></i></td>
													<td><span class="from">Blog</span></td>
													<td><span class="message-label label1">Blog Comments</span>
														<span class="title">New Comment on Post</span> <span class="preview">- A new comment on a blog post awating for moderation. Please consider that you can</span></td>
													<td>&nbsp;</td>
													<td><span class="timestamp">Dec 16</span></td>
												</tr>
												<tr class="unread">
													<td>
														<label class="fancy-checkbox">
															<input type="checkbox">
															<span>&nbsp;</span>
														</label>
													</td>
													<td><i class="fa fa-star-o"></i></td>
													<td><span class="from">Stella Roger</span></td>
													<td><span class="title">User Setting Updates</span> <span class="preview">- Hello Stacy, I figured out that weeks ago the user setting has been updated. But unfortunately</span></td>
													<td><span class="icon-attachment"><i class="fa fa-paperclip"></i></span></td>
													<td><span class="timestamp">Dec 11</span></td>
												</tr>
												<tr>
													<td>
														<label class="fancy-checkbox">
															<input type="checkbox">
															<span>&nbsp;</span>
														</label>
													</td>
													<td><i class="fa fa-star-o"></i></td>
													<td><span class="from">Blog</span></td>
													<td><span class="message-label label1">Blog Comments</span>
														<span class="title">New Comment on Post</span> <span class="preview">- A new comment on a blog post awating for moderation. Please consider that you can</span></td>
													<td>&nbsp;</td>
													<td><span class="timestamp">Dec 11</span></td>
												</tr>
												<tr>
													<td>
														<label class="fancy-checkbox">
															<input type="checkbox">
															<span>&nbsp;</span>
														</label>
													</td>
													<td><i class="fa fa-star-o"></i></td>
													<td><span class="from">Blog</span></td>
													<td><span class="message-label label1">Blog Comments</span>
														<span class="title">New Comment on Post</span> <span class="preview">- A new comment on a blog post awating for moderation. Please consider that you can</span></td>
													<td><span class="icon-attachment"><i class="fa fa-paperclip"></i></span></td>
													<td><span class="timestamp">Dec 10</span></td>
												</tr>
												<tr>
													<td>
														<label class="fancy-checkbox">
															<input type="checkbox">
															<span>&nbsp;</span>
														</label>
													</td>
													<td><i class="fa fa-star-o"></i></td>
													<td><span class="from">Stella Roger</span></td>
													<td><span class="title">User Setting Updates</span> <span class="preview">- Hello Stacy, I figured out that weeks ago the user setting has been updated. But unfortunately</span></td>
													<td><span class="icon-attachment"><i class="fa fa-paperclip"></i></span></td>
													<td><span class="timestamp">Dec 9</span></td>
												</tr>
												<tr>
													<td>
														<label class="fancy-checkbox">
															<input type="checkbox">
															<span>&nbsp;</span>
														</label>
													</td>
													<td><i class="fa fa-star-o"></i></td>
													<td><span class="from">Jordan Smith</span></td>
													<td><span class="title">Can I Change My Username?</span> <span class="preview">- I've been wondering if we actually can change our username on the front-end. This should be</span></td>
													<td>&nbsp;</td>
													<td><span class="timestamp">10:46 AM</span></td>
												</tr>
												<tr>
													<td>
														<label class="fancy-checkbox">
															<input type="checkbox">
															<span>&nbsp;</span>
														</label>
													</td>
													<td><i class="fa fa-star-o"></i></td>
													<td><span class="from">Michael Doe</span></td>
													<td><span class="message-label label3">Password</span>
														<span class="title">Help, Can't Login</span> <span class="preview">- It's been 3 days I can't login to the site, I did receive admin email about</span></td>
													<td>&nbsp;</td>
													<td><span class="timestamp">09:22 AM</span></td>
												</tr>
												<tr>
													<td>
														<label class="fancy-checkbox">
															<input type="checkbox">
															<span>&nbsp;</span>
														</label>
													</td>
													<td><i class="fa fa-star-o"></i></td>
													<td><span class="from">Blog</span></td>
													<td><span class="message-label label1">Blog Comments</span>
														<span class="title">New Comment on Post</span> <span class="preview">- A new comment on a blog post awating for moderation. Please consider that you can</span></td>
													<td><span class="icon-attachment"><i class="fa fa-paperclip"></i></span></td>
													<td><span class="timestamp">Dec 10</span></td>
												</tr>
												<tr>
													<td>
														<label class="fancy-checkbox">
															<input type="checkbox">
															<span>&nbsp;</span>
														</label>
													</td>
													<td><i class="fa fa-star-o"></i></td>
													<td><span class="from">Stella Roger</span></td>
													<td><span class="title">User Setting Updates</span> <span class="preview">- Hello Stacy, I figured out that weeks ago the user setting has been updated. But unfortunately</span></td>
													<td><span class="icon-attachment"><i class="fa fa-paperclip"></i></span></td>
													<td><span class="timestamp">Dec 9</span></td>
												</tr>
												<tr>
													<td>
														<label class="fancy-checkbox">
															<input type="checkbox">
															<span>&nbsp;</span>
														</label>
													</td>
													<td><i class="fa fa-star-o"></i></td>
													<td><span class="from">Alice</span></td>
													<td><span class="message-label label2">New User</span>
														<span class="title">New User Registration</span> <span class="preview">- A new user has been registered on your site but not yet activated. You can activate this user on </span></td>
													<td><span class="icon-attachment"><i class="fa fa-paperclip"></i></span></td>
													<td><span class="timestamp">12:01 PM</span></td>
												</tr>
												<tr class="unread">
													<td>
														<label class="fancy-checkbox">
															<input type="checkbox">
															<span>&nbsp;</span>
														</label>
													</td>
													<td><i class="fa fa-star-o"></i></td>
													<td><span class="from">Jordan Smith</span></td>
													<td><span class="title">Can I Change My Username?</span> <span class="preview">- I've been wondering if we actually can change our username on the front-end. This should be</span></td>
													<td><span class="icon-attachment"><i class="fa fa-paperclip"></i></span></td>
													<td><span class="timestamp">10:46 AM</span></td>
												</tr>
												<tr>
													<td>
														<label class="fancy-checkbox">
															<input type="checkbox">
															<span>&nbsp;</span>
														</label>
													</td>
													<td><i class="fa fa-star-o"></i></td>
													<td><span class="from">Jordan Smith</span></td>
													<td><span class="title">Can I Change My Username?</span> <span class="preview">- I've been wondering if we actually can change our username on the front-end. This should be</span></td>
													<td>&nbsp;</td>
													<td><span class="timestamp">10:46 AM</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<!-- end right main content, the messages -->
							</div>
						</div>
					</div>
					<!-- END INBOX -->
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

</body>

</html>
