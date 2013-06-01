 // Ajax Code To retrieve contacts information 
 
 var item = "";
        $.getJSON("./api/retrieveContacts.php", function(data) {
            
			var select = document.getElementById('contact');
			select.options.length = 0; 
			for (var i = 0; i < data.length; i++) {
						var d = data[i];
						select.options.add(new Option(d.First_Name,d.ContactID))
					}
          
        }, 'json');