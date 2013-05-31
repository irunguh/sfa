var Save = function () {
    
    return {
        //main function to initiate the module
        init: function () {
        	
           $(this).validate({
	            errorElement: 'label', //default input error message container
	            errorClass: 'help-inline', // default input error message class
	            focusInvalid: false, // do not focus the last invalid input
	            rules: {
	                username: {
	                    required: true
	                },
	                company_name: {
	                    required: true
	                },
	                company_address: {
	                    required: true
	                },
	                company_office_number1: {
	                    required: true
	                },
	                company_office_number2: {
	                    required: false
	                },
	                company_email: {
	                    required: true
	                },
	                company_website: {
	                    required: false
	                },
	                company_location_no: {
	                    required: true
	                },
	                company_size: {
	                    required: true
	                },
	                company_type: {
	                    required: true
	                },
					company_status: {
	                    required: false
	                },
					company_state: {
	                    required: true
	                },
	                country: {
	                    required: false
	                }
	            },

	            messages: {
	                username: {
	                    required: "Please Enter a valid Username."
	                },
	                company_name: {
	                    required: "Company Name is Required."
	                }
					,
	                company_address: {
	                    required: "Address is Required."
	                }
					,
	                company_office_number1: {
	                    required: "Office Number is Required."
	                }
					,
	                company_email: {
	                    required: "Email is Required."
	                }
					,
	                company_location_no: {
	                    required: "Location is Required."
	                }
					,
	                company_size: {
	                    required: "Size is Required."
	                }
					,
	                company_type: {
	                    required: "Type is Required."
	                }
					,
	                company_state: {
	                    required: "State is Required."
	                }
	            },

	            invalidHandler: function (event, validator) { //display error alert on form submit   
	                $('.alert-error', $('#create_company')).show();
	            },

	            highlight: function (element) { // hightlight error inputs
	                $(element)
	                    .closest('.control-group').addClass('error'); // set error class to the control group
	            },

	            success: function (label) {
	                label.closest('.control-group').removeClass('error');
	                label.remove();
	            },

	            errorPlacement: function (error, element) {
	                error.addClass('help-small no-left-padding').insertAfter(element.closest('.input-icon'));
	            },

	            submitHandler: function (form) {
	               // window.location.href = "index.php";
				   
				   $.ajax({
				      type: "POST",
					  url: 'session.php',
					  data: {
					   username: $("#user").val(),
					   password: $("#pass").val()
					  },
					  success: function(data){
					   if(data === 'Correct')
					   { 
					   // window.location.replace('dashboard.php');
					   }
					   else {
					       //$('#login_error', $('.login-form')).show();
							alert(data);
	            
					   }
					  }
				   });
					
					
	            }
	        });
		   /////////////////
	        $('#create_company inputs').keypress(function (e) {
	            if (e.which == 13) {
	                if ($('#create_company').validate().form()) {
	                    window.location.href = "dashboard.php";
						//alert('Login Accepted');
	                }
	                return false;
	            }
	        });

	       

	     
	       

	       
        }

    };

}();