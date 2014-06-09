<?php
     include ("includes/session.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="images/favicon.ico" />
	<title>SmartPoll - Dashboard</title>

	<!-- Bootstrap -->
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles -->
	<link href="css/dashbord.css" rel="stylesheet">
	<style type="text/css">

	</style>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->

		</head>
		<body>

			<!-- Navbar header-->
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<span class="navbar-brand" >SmartPoll</span>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a id="dashboard-btn" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Dashboard <b class="caret"></b></a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dashboard-btn">
									<li role="presentation">
										<a role="menuitem" tabindex="-1" href="polls.php">Polls</a>
									</li>
									<li role="presentation">
										<a role="menuitem" tabindex="-1" href="insert-poll.php">Insert Poll</a>
									</li>
									<li role="presentation" class="divider"></li>
									<li role="presentation">
										<a role="menuitem" tabindex="-1" href="results.php">Results</a>
									</li>
								</ul>
							</li>
							<li><a href="#" class="changePassword">Change Password</a></li>
							<li><a href="files/user_guide.pdf">Help</a></li>
							<li><a href="includes/sessionExit.php" onclick="return confirm('Are you sure?')">Logout</a></li>
						</ul>
					</div>
				</div>
			</div>


			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-3 col-md-2 sidebar">
						<ul class="nav nav-sidebar">
							<li ><a href="index.php">Dashboard</a></li>
							<li><a href="polls.php">Polls</a></li>
							<li><a href="insert-poll.php">Insert Poll</a></li>
							<li class="active"><a href="">Results</a></li> 
						</ul>

					</div>
					<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
						<h1 class="page-header">Polls</h1>
						
						<!--Div to list data from database -->
						<div id="output"></div>

					</div>
				</div>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

						</div>
						<div class="modal-body">

							<div class="login-panel panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Change Password</h3>
								</div>
								<div class="panel-body">
									<form id="form-login" role="form" method="post">
										<fieldset>
											<div class="form-group">
												<input class="form-control" placeholder="Password" id="password" name="password" type="password" required="">
											</div>
											<div class="form-group">
												<input class="form-control" placeholder="New Password" id="newPassword" name="newPassword" type="password" required="">
											</div>
											<div class="form-group">
												<input class="form-control" placeholder="Confirm New Password" id="confirmNewPassword" name="confirmNewPassword" type="password" required="">
											</div>
											<div class="message">

											</div>
											<input type="submit" class="btn btn-lg btn-primary btn-block" value="Change" name="" placeholder="">
										</fieldset>

									</form>

								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal for pie chart -->
			<div class="modal fade" id="modalPieChart" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="modalTitle">Pie Chart</h4>
						</div>
						<div class="modal-body">
							
							<div id="pieChart" style="min-width: 500px; height: 400px; margin: 0 auto"></div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>


			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="../bootstrap/js/jquery-2.1.1.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="../bootstrap/js/bootstrap.min.js"></script>
			<script src="Highcharts/js/highcharts.js"></script>
			<script src="Highcharts/js/modules/exporting.js"></script>

			<!-- Custom Scripts -->
			<script src="js/showResults.js" type="text/javascript"></script>
			<script src="js/changePassword.js"></script>
			<script src="js/showPieChart.js"></script>
		</body>
		</html>
