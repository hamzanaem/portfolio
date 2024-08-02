$(function(){
	jQuery('.dixa-chat').on('click', function() {
		jQuery('#wellcome-chat').removeClass('active');
		jQuery('#custom-chat').removeClass('chat-active');
		jQuery('.cus-chat-button').addClass('chat-active');
		_dixa_.invoke("setWidgetOpen", true);
		return false;
	});
	
	jQuery('.elevio-chat').on('click', function() {
		jQuery('#wellcome-chat').removeClass('active');
		jQuery('#custom-chat').removeClass('chat-active');
		jQuery('.cus-chat-button').removeClass('chat-active');
		window._elev.open();
		return false;
	});
	
	today = new Date();
	dayIndex = today.getDay();
	
	// Get curren date in denmark format
	var utc = today.getTime() + (today.getTimezoneOffset() * 60000);
	var denmark = new Date(utc + (3600000*2));
	var currentTime = denmark.getTime();
	
	var todayDate = denmark.getFullYear()+'/'+(denmark.getMonth()+1)+'/'+denmark.getDate();
	
	var timeOne = jQuery('.cus-chat-button .date-field').attr('data-pre');
	//console.log(timeOne);
	
	var timeTwo = jQuery('.cus-chat-button .date-field').attr('data-post');
	//console.log(timeTwo);
	
	var timeThree = jQuery('.cus-chat-button .date-field').attr('data-weekend');
	//console.log(timeTwo);
	
	// Monday, Tuesday, Wednesday
	if(dayIndex > 0 && dayIndex < 4) {
		
		var mtw = timeOne.split('-');
		//console.log(mtw); 
		// Get chat start time from backend
		if(mtw[0]) {
			var chatTimeStart = new Date(todayDate+" "+mtw[0]+":00");
			var cStartTime = chatTimeStart.getTime();
		}
		// Get chat end time from backend
		if(mtw[1]) {
			var chatTimeEnd = new Date(todayDate+" "+mtw[1]+":00");
			var cEndTime = chatTimeEnd.getTime();
		}
		
		if(currentTime > cStartTime && currentTime < cEndTime) {
			
		} else {
			jQuery('.cus-chat-button .online').css('display','none');
			jQuery('.chat-holder .online').css('display','none');
		}
	
	// Thursday, Friday
	} else if (dayIndex > 3 && dayIndex < 6) {
		
		var tf = timeTwo.split('-');
		//console.log(tf); 
		
		if(tf[0]) {
			var chatTimeStart = new Date(todayDate+" "+tf[0]+":00");
			var cStartTime = chatTimeStart.getTime();
			console.log(cStartTime);
		}
		// Get chat end time from backend
		if(tf[1]) {
			var chatTimeEnd = new Date(todayDate+" "+tf[1]+":00");
			var cEndTime = chatTimeEnd.getTime();
			console.log(cEndTime);
		}
		
		if(currentTime > cStartTime && currentTime < cEndTime) {
			
		} else {
			jQuery('.cus-chat-button .online').css('display','none');
			jQuery('.chat-holder .online').css('display','none');
		}
	// Saturday and Sunday
	} else {
		var ss = timeThree.split('-');
		//console.log(tf); 
		
		if(ss[0]) {
			var chatTimeStart = new Date(todayDate+" "+ss[0]+":00");
			var cStartTime = chatTimeStart.getTime();
		}
		// Get chat end time from backend
		if(ss[1]) {
			var chatTimeEnd = new Date(todayDate+" "+ss[1]+":00");
			var cEndTime = chatTimeEnd.getTime();
		}
		
		if(currentTime > cStartTime && currentTime < cEndTime) {
			
		} else {
			jQuery('.cus-chat-button .online').css('display','none');
			jQuery('.chat-holder .online').css('display','none');
		}
	}
	
	
});
$(function(){
	jQuery('.cus-chat-button a.close-ico').click(function () {
        return false;
    });
	jQuery('.cus-chat-button a').click(function () {
		if(jQuery('.cus-chat-button').hasClass('chat-active')) {
			jQuery('#custom-chat').removeClass('chat-active');
			jQuery('.cus-chat-button').removeClass('chat-active');
			jQuery('#chat-window').removeClass('active');
			_dixa_.invoke("setWidgetOpen", false);
		} else {
			jQuery('#wellcome-chat').removeClass('active');
			jQuery('.cus-chat-button').addClass('chat-active');
			jQuery('#custom-chat').addClass('chat-active');
		}
		return false;
	});
	
	jQuery('#custom-chat .close-icon a, #chat-window .close-icon a').click(function () {
		jQuery('#custom-chat').removeClass('chat-active');
		jQuery('#chat-window').removeClass('active');
		jQuery('.cus-chat-button').removeClass('chat-active');
		return false;
	});
	
	jQuery('#wellcome-chat .dixa-chat-agent').click(function () {
		jQuery('#wellcome-chat').removeClass('active');
		jQuery('#chat-window').addClass('active');
		jQuery('.cus-chat-button').addClass('chat-active');
		return false;
	});
	
	jQuery('#wellcome-chat .close-btn a').click(function () {
		jQuery('#wellcome-chat').removeClass('active');
		return false;
	});
	
}); 