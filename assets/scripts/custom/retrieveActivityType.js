 // Ajax Code To retrieve activity type contacts information 
 
 var item = "";
        $.getJSON("./api/retrieveActivityType.php", function(data) {
            
			var select = document.getElementById('work_activity_type');
			select.options.length = 0; 
			for (var i = 0; i < data.length; i++) {
						var d = data[i];
						select.options.add(new Option(d.Activity_Type,d.Activity_TypeID))
					}
          
        }, 'json');