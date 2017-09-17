<?php require 'teratimers.php'; ?>
<html>
	<head>
		<title>Timers</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script id="twitter-wjs" type="text/javascript" async defer src="//platform.twitter.com/widgets.js"></script>
	</head>
	<body>
		<?php include_once("analyticstracking.php") ?>
		<div id="headerDiv">
			<h1> Battleground Jackpot Timers</h1>
		</div>
		<div id="container">
			<div id="parentDiv">
				<div id="mainDiv">
					Loading..
				</div>
				<div id="gifDiv">
					<img src="walk.gif">
				</div>			
			</div>
			<div id="twitterTimeline">
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
	</body>	
</html>
