//Shows or hides content windows when clicked
$( window ).on( "load", function(){
$('.headers').bind('click', function(e){
	e.preventDefault();
	
	if ($(this).attr('id') == "headerDiv" ){
	
	$('#parentDiv').stop().slideToggle(500, function(){
		if ($('#parentDiv').is(':hidden')){
		$('#contentDivider').hide();			
		$('#headerDiv').hide().html("<h1>Click to see BG Timers!</h1>").fadeIn(500);	
		$('#contentDivider').show();	
		}else {
		$('#contentDivider').hide();		
		$('#headerDiv').hide().html("<h1>Battleground Jackpot Timers</h1>").fadeIn(500);					
		}		
	});	

	$('#contentDivider').stop().animate({width: 'toggle'});
	}
	
	if ($(this).attr('id') == "headerDiv2" ){		
		
		$('#twitterTimeline').stop().slideToggle(500, function(){
		if ($('#twitterTimeline').is(':hidden')){
		$('#contentDivider2').hide();			
		$('#headerDiv2').hide().html("<h1>Click to see Tera EU twitter!</h1>").fadeIn(500);	
		$('#contentDivider2').show();	
		}else {
		$('#contentDivider2').hide();		
		$('#headerDiv2').hide().html("<h2>Close twitter tab</h2>").fadeIn(500);					
		}		
	});	
	$('#contentDivider2').stop().animate({width: 'toggle'});
	}
})

})
