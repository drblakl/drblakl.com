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
		<link href="/css/navbar.css" rel="stylesheet">
		<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?skin=desert"></script>
		<link href="/css/prettify.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="/js/prettify.js"></script>

		<!-- Bootstrap core JavaScript ================================================== -->
		<script src="/js/jquery.js"></script>
		<script src="/js/bootstrap.js"></script>
		<script>

			$(document).ready(function() {
				$('#myTab a').click(function (e) {
				  e.preventDefault();
				  $(this).tab('show');
				})

				// Get Blog Contents and store within blog div
				getBlog();
			});

			function getBlog(){
				rssurl = "/blog/?feed=rss2";

				$.get(rssurl, function(data) {
					var $xml = $(data);
					$xml.find("item").each(function() {
						var $this = $(this),
							item = {
								title: $this.find("title").text(),
								link: $this.find("link").text(),
								description: $this.find("description").text(),
								pubDate: new Date($this.find("pubDate").text()),
								author: $this.find("author").text(),
								content: $this.find("encoded").text(),
								contentIE: $this.find("content\\:encoded").text()
						}

						var content = getInternetExplorerVersion() != -1 ? item.contentIE : item.content;
						$('#blog').html($('#blog').html() + '<div class="panel panel-primary">'
								+ '<div class="panel-heading"><h3 class="panel-title">' + item.title + ' - ' + getDateWithoutTime(item.pubDate) + '</h3></div>'
								+ '<div class="panel-body">' + content + '</div></div>'
						);
					});
				}).always(function(){prettyPrint();});
			}

			function getDateWithoutTime(dateToFormat){
				var splitDate = dateToFormat.toString().split(" ");
				return splitDate[0] + " " + splitDate[1] + " " + splitDate[2] + " " + splitDate[3];
			}

			function getInternetExplorerVersion()
			// Returns the version of Internet Explorer or a -1
			// (indicating the use of another browser).
			{
			  var rv = -1; // Return value assumes failure.
			  if (navigator.appName == 'Microsoft Internet Explorer')
			  {
				var ua = navigator.userAgent;
				var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
				if (re.exec(ua) != null)
				  rv = parseFloat( RegExp.$1 );
			  }
			  return rv;
			}
			function checkVersion()
			{
			  var msg = "You're not using Internet Explorer.";
			  var ver = getInternetExplorerVersion();

			  if ( ver > -1 )
			  {
				if ( ver >= 8.0 ) 
				  msg = "You're using a recent copy of Internet Explorer."
				else
				  msg = "You should upgrade your copy of Internet Explorer.";
			  }
			  alert( msg );
			}
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
						<div class="blog" id="blog"></div>
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
	</body>
</html>
