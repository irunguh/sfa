var Submit = function () {
 return {
  //Initiate module
   init: function () {
       $('#company_form').validate({
	            errorElement: 'span', //default input error message container
                errorClass: 'help-inline', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                rules: {
                    username: {
                        minlength: 2,
                        required: true,
						username: true
                    },
                    company_name: {
                        required: true,
                        company_name: true
                    },
                    company_address: {
                        required: true,
                        company_address: true
                    },
                    company_office_number1: {
                        required: true,
                        company_office_number1: true
                    },
                    company_email: {
                        required: true,
                        company_email: true
                    },
                    company_website: {
                        required: true,
                        company_website: true
                    },
                    company_location_no: {
                        minlength: 5,
                    },
                    company_type: {
                        required: true
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success1.hide();
                    error1.show();
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
                    success1.show();
                    error1.hide();
                }
				   });
					
					
	            }
	        });
   
 }();
 

