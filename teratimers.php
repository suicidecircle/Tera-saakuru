<?php include 'schedule.php'; ?>
<script type="text/javascript">

window.onload = function() {
	
	var mainDiv = document.getElementById("mainDiv");
	var noticeSound = new Audio('listen.mp3');
	var bgEvents = {};	
	var days = 1;
	var hours = 1;
	var minutes = 1;
	var rseconds = 1;
			

//Parsing remaining time into days, hours, minutes and seconds			
function parseTime(x) {
		
		let today = new Date();
		let ts = Date.parse(today);
		let nts = (ts/1000);
				
		let seconds = (x - nts);	
		let count=seconds;
		minutes = Math.floor((count/60));
		hours = Math.floor((minutes/60));
		days = Math.floor((hours/24));
		hours = hours-(days*24);
		minutes = minutes-(days*24*60)-(hours*60);
		rseconds = seconds-(days*24*60*60)-(hours*60*60)-(minutes*60);
}	

//Displaying the current events and their state 	
function showEventTimers(){
		
		mainDiv.innerHTML="";
		Object.keys(bgEvents).forEach(function(key) {
			parseTime(bgEvents[key]);	
			if(days < 0){
				var sinceHours = (hours - 23) * (-1);
				var sinceMins = (minutes - 59) * (-1);
				var sinceSecs = (rseconds - 59) * (-1);				
				
				if (sinceHours < 5) {
					if ((key == "Skyring Solo" || key == "Skyring Team" || "Skyring Solo #2") && (sinceHours < 2)){
						bgEvents[key] = key + " started " +  sinceHours + ":" + sinceMins + ":" + sinceSecs + " hours ago.";
						mainDiv.innerHTML +="<div class='active'>" + bgEvents[key] + "<div>"+"<br> ";
					}else if ((key == "Fraywind" || key == "Corsairs" || key === "Gridiron") && (sinceHours < 3)) {
						bgEvents[key] = key + " started " +  sinceHours + ":" + sinceMins + ":" + sinceSecs + " hours ago.";
						mainDiv.innerHTML += "<div class='active'>" + bgEvents[key] + "<div>" + "<br> ";
					}else if ((key == "Skyring Solo" || key == "Skyring Team"  || "Skyring Solo #2") && (sinceHours => 2)) {
						bgEvents[key] = key + " is now over. Event ended " +  (sinceHours - 2) + " hour(s) " + sinceMins + " minutes " + sinceSecs + " seconds ago.";
						mainDiv.innerHTML += "<div class='passive'>" + bgEvents[key] + "<div>" + "<br> ";
					}else {
						bgEvents[key] = key + " is now over. Event ended " +  (sinceHours - 3) + " hour(s) " + sinceMins + " minutes " + sinceSecs + " seconds ago.";
						mainDiv.innerHTML += "<div class='passive'>" + bgEvents[key] + "<div>" + "<br> ";
					}
				}
			}else {
				bgEvents[key] = hours + " hour(s) " + minutes + " minutes " + rseconds + " seconds.";
				mainDiv.innerHTML += "<br>" + key + " starts in " + bgEvents[key];
			}	
		});	
}	
	
// Checks the current day and fetches the appropriate Unix timestamp
function showBgTime(){
			
	var date = new Date();
	var weekday = date.getDay();
		
	  switch(weekday){

		case 0:	
		bgEvents = {};
		bgEvents = {
		"Skyring Solo": <?php echo $skyringSoloSunday; ?>,
		Corsairs  : <?php echo $corsairSunday; ?>,
		Fraywind  : <?php echo $fraywindSunday; ?>,
		"Skyring Team": <?php echo $skyringTeamSunday; ?>	
		};		
		showEventTimers();			
		break;

		case 1:
		bgEvents = {};
		bgEvents = {
		"Skyring Team": <?php echo $skyringTeamMonday; ?>,
		"Skyring Solo"  : <?php echo $skyringSoloMonday; ?>,
		Fraywind  : <?php echo $fraywindMonday; ?>,
		"Skyring Solo #2"  : <?php echo $skyringSoloMonday2; ?>	
		};		
		showEventTimers();	
		break;

		case 2:
		bgEvents = {};
		bgEvents = {
		"Skyring Solo": <?php echo $skyringSoloTuesday; ?>,
		"Skyring Solo #2"  : <?php echo $skyringSoloTuesday2; ?>,
		Gridiron  : <?php echo $gridironTuesday; ?>,
		"Skyring Solo #3"  : <?php echo $skyringSoloTuesday3; ?>	
		};		
		showEventTimers();	
		break;

		case 3:
		bgEvents = {};
		bgEvents = {
		"Skyring Solo": <?php echo $skyringSoloWednesday; ?>,
		"Skyring Solo #2"  : <?php echo $skyringSoloWednesday2; ?>,
		Corsairs : <?php echo $corsairsWednesday; ?>,
		"Skyring Solo #3"  : <?php echo $skyringSoloWednesday3; ?>		
		};		
		showEventTimers();	
		break;

		case 4:
		bgEvents = {};
		bgEvents = {
		"Skyring Solo": <?php echo $skyringSoloThursday; ?>,
		"Skyring Solo #2"  : <?php echo $skyringSoloThursday2; ?>,
		Fraywind  : <?php echo $fraywindThursday; ?>,
		"Skyring Solo": <?php echo $skyringSoloThursday3; ?>		
		};		
		showEventTimers();	
		break;

		case 5:
		bgEvents = {};
		bgEvents = {
		"Skyring Solo": <?php echo $skyringSoloFriday; ?>,
		"Skyring Solo #2"  : <?php echo $skyringSoloFriday2; ?>,
		Gridiron  : <?php echo $gridironFriday; ?>,
		"Skyring Team" : <?php echo $skyringTeamFriday; ?>
		};		
		showEventTimers();	

		break;

		case 6:	
		bgEvents = {};
		bgEvents = {
		"Skyring Solo": <?php echo $skyringSoloSaturday; ?>,
		Corsairs  : <?php echo $corsairSaturday; ?>,
		Fraywind  : <?php echo $fraywindSaturday; ?>,
		"Skyring Team" : <?php echo $skyringTeamSaturday; ?>,
		"Skyring Solo": <?php echo $skyringSoloSaturday2; ?>
		};		
		showEventTimers();	
		break;
	  }
	}
	
	var interval = setInterval( function() {
	 
		showBgTime();
	  
	}, 1000);
};
</script>