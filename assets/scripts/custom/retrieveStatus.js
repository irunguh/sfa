 // Ajax Code To retrieve country information 
 
 var item = "";
        $.getJSON("./api/retrieveStatus.php", function(data) {
            
			var select = document.getElementById('company_status');
			select.options.length = 0; 
			for (var i = 0; i < data.length; i++) {
						var d = data[i];
						select.options.add(new Option( d.Company_Status,d.Company_StatusID))
					}
          
        }, 'json');