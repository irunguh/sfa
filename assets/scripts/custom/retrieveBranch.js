 // Ajax Code To retrieve branch information 
 
 var item = "";
        $.getJSON("./api/retrieveBranch.php", function(data) {
            
			var select = document.getElementById('company_branch_name');
			select.options.length = 0; 
			for (var i = 0; i < data.length; i++) {
						var d = data[i];
						select.options.add(new Option(d.Branch_Name,d.BranchID))
					}
          
        }, 'json');