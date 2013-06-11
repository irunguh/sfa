 // Ajax Code To retrieve country information 
 
 var item = "";
        $.getJSON("./api/retrieveProduct.php", function(data) {
            
			//var select = document.getElementsByName('product')[0];
			var elements = document.getElementsByName('product');
			
			//try a loop
			for(var el = 0; el < elements.length; el++)
			{
			  select = elements[el];
			  //
			  //select.options.length = 0; 
				for (var i = 0; i < data.length; i++) 
				{
							var d = data[i];
							select.options.add(new Option(d.Product_Name,d.ProductID))
				}
			  //
			}
			
          
        }, 'json');