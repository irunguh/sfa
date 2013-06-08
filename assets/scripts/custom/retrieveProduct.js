 // Ajax Code To retrieve country information 
 
 var item = "";
        $.getJSON("./api/retrieveProduct.php", function(data) {
            
			var select = document.getElementById('product');
			select.options.length = 0; 
			for (var i = 0; i < data.length; i++) {
						var d = data[i];
						select.options.add(new Option(d.Product_Name,d.ProductID))
					}
          
        }, 'json');