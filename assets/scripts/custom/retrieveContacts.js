 // Ajax Code To retrieve contacts information 
 
  //var id = $("#company").val(); 
  
  $('#company').change(function(){
     
  //alert('Changed Company !');
  var value = $('select#company option').filter(":selected").val();
  //alert(value);
   $.getJSON("./api/retrieveContacts.php", { id : value },function(data) {
            
			var select = document.getElementById('contact');
			select.options.length = 0; 
			for (var i = 0; i < data.length; i++) {
						var d = data[i];
						select.options.add(new Option(d.First_Name,d.ContactID))
					}
          //alert('Select populated!');
        }, 
		
		'json');
  
  });
  
 
       