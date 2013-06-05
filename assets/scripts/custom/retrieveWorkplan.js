 // Ajax Code To retrieve country information 
 
 var item = "";
        $.getJSON("./api/retrieveWorkPlan.php", function(data) {
            
			var select = document.getElementById('work_clock');
			select.options.length = 0; 
			for (var i = 0; i < data.length; i++) {
						var d = data[i];
						select.options.add(new Option(d.Proposed_Activity,d.WorkPlanID))
					}
          
        }, 'json');