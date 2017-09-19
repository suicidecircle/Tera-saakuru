<?php require 'teratimers.php'; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>Timers</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script id="twitter-wjs" type="text/javascript" async defer src="//platform.twitter.com/widgets.js"></script>
	</head>
	<body>
		<?php include_once("analyticstracking.php") ?>

		<div id="container">
			<div id="headerDiv" class="headers">
						<h1>Click to see BG Timers!</h1>
			</div>
			<div id="contentDivider" class="dividers"></div>
			<div id="parentDiv" class="hidden">
				<div id="mainDiv">
					Loading..
				</div>				
				<div id="gifDiv">
					<img src="walk.gif ">
				</div>			
			</div>	
			
			<div id="headerDiv2" class="headers">
				<h1>Click to see Tera EU twitter!</h1>
			</div>	
			<div id="contentDivider2" class="dividers"></div>
			<div id="twitterTimeline" class="hidden">
				<a class="twitter-timeline" 
					data-height="900" 
					data-theme="dark" 
					data-link-color="#E95F28"
					data-chrome="nofooter noborders noscrollbar"	
					href="https://twitter.com/TeraEurope">
					Tweets by TeraEurope
				</a> 
				<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
		</div>
		<script src="\jquery\jquery-3.2.1.min.js"></script>	
		<script src="toggleContents.js"></script>	
	</body>	
</html>
