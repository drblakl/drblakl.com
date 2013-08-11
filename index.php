<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Minecraft mod development">
		<meta name="author" content="drblakl.com">

		<title>drblakl.com - Adventures in Minecraft Modding</title>

		<!-- Bootstrap core CSS -->
		<link href="/css/bootstrap.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="/css/navbar.css" rel="stylesheet">
		<script>
			$('#myTab a').click(function (e) {
			  e.preventDefault();
			  $(this).tab('show');
			})
		</script>
	</head>

	<body>

		<div class="container">
			<!-- Static navbar -->
			<div class="navbar">
			<div class="container">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">drblakl.com</a>
				<div class="nav-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#home" data-toggle="tab">Home</a></li>
						<li><a href="#about" data-toggle="tab">About</a></li>
						<li><a href="#contact" data-toggle="tab">Contact</a></li>
					</ul>
					<ul class="nav navbar-nav pull-right"></ul>
				</div><!--/.nav-collapse -->
			</div>
			</div>

			<!-- Main component for a primary marketing message or call to action -->
			<img src="/img/mclogo.png" class="pull-left"/>
			<div class="jumbotron">
				<h1>Minecraft coding adventures!</h1>
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane fade in active" id="home">
						<p>Check back for status updates and information related to minecraft mods currently in development</p>
					</div>
					<div class="tab-pane fade" id="about">
						<p>I am in the process of learning all about minecraft mod development.  My successes and failures will be noted here.</p>
					</div>
					<div class="tab-pane fade" id="contact">
						<p>You can reach me at <a href='mailto:drblakl@drblakl.com'>drblakl@drblakl.com</a></p>
					</div>
				</div>
			</div>
		</div> <!-- /container -->

		<!-- Bootstrap core JavaScript ================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="/js/jquery.js"></script>
		<script src="/js/bootstrap.js"></script>
	</body>
</html>