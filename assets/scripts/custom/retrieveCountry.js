 // Ajax Code To retrieve country information 
 
 var item = "";
        $.getJSON("./api/retrieveCountry.php", function(data) {
            
			var select = document.getElementById('country');
			select.options.length = 0; 
			for (var i = 0; i < data.length; i++) {
						var d = data[i];
						select.options.add(new Option(d.country, d.country_code))
					}
          
        }, 'json');