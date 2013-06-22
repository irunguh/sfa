 $('#header_notification_bar2').click(function()
		 {
		   //we call a php function to update the status of the notification to 1, seen
		   console.log("Update notification initiated! Value of id to update is"+$('#notify').val());
		   //
		   //var id = 1 ;
		//    id: $('#username').val(),
		     $.ajax({
				      type: "POST",
					  url: './api/updateNotification.php',
					  data: {
					   id: $('#notify').val(),
					  },
					  success: function(data){
					       $.gritter.add({
												// (string | mandatory) the heading of the notification
												title: 'Notification update Success',
												// (string | mandatory) the text inside the notification
												text: 'Notification updated successfully status 2-seen',
												// (string | optional) the image to display on the left
												image: 'http://a0.twimg.com/profile_images/59268975/jquery_avatar_bigger.png',
												// (bool | optional) if you want it to fade out on its own or just sit there
												sticky: false,
												// (int | optional) the time you want it to be alive for before fading out
												time: ''
											});
					  
					  }
				   }); 
		 });