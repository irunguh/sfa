 // Ajax Code To retrieve country information 
 
 var item = "";
        $.getJSON("./api/retrieveSize.php", function(data) {
            
			var select = document.getElementById('company_size');
			select.options.length = 0; 
			for (var i = 0; i < data.length; i++) {
						var d = data[i];
						select.options.add(new Option(d.Company_Size,d.Company_SizeID))
					}
          
        }, 'json');