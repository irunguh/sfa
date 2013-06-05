 $.ajax({
				      type: "POST",
					  url: './api/saveWorkplanClocking.php',
					  data: {
					   work_clock: $('#work_clock').val(),
					  },
					  success: function(data){
					   if(data === 'successful')
					   { 
					 //  alert(meeting_date);
					    //window.location.replace('dashboard.php?page=company_table&success=1');
						//jQuery('#form_wizard_workplan').hide();
						//jQuery('#success_save_workplan').show();
					//	alert($('#meeting_date').val());
					//alert(data[2]);
					alert('Saved');
					   }
					   else {
					        //$('.alert-invalid', $('.login-form')).show();
							alert(data);
	            
					   }
					  }
				   });