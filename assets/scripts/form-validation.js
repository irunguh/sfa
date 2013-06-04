var FormValidation = function () {


    return {
        //main function to initiate the module
        init: function () {

            // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation
			 
			var mycompany = document.getElementById("#company_form");
            var error2 = $('.alert-error', mycompany);
            var success2 = $('.alert-success', mycompany);
			/////////////////////
			mycompany.validate({
	            errorElement: 'span', //default input error message container
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
                    success2.hide();
                    error2.show();
                    App.scrollTo(error1, -200);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.help-inline').removeClass('ok'); // display OK icon
                    $(element)
                        .closest('.control-group').removeClass('success').addClass('error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change dony by hightlight
                    $(element)
                        .closest('.control-group').removeClass('error'); // set error class to the control group
                },

                success: function (label) {
                    label
                        .addClass('valid').addClass('help-inline ok') // mark the current input as valid and display OK icon
                    .closest('.control-group').removeClass('error').addClass('success'); // set success class to the control group
                },

                submitHandler: function (form) {
                    success2.show();
                    error2.hide();
                } 
				   });
            //apply validation on chosen dropdown value change, this only needed for chosen dropdown integration.
            $('.chosen, .chosen-with-diselect', form2).change(function () {
                form2.validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input
            });

        }

    };

}();