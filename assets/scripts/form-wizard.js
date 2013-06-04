var FormWizard = function () {
    return {
        //main function to initiate the module
        init: function () {
            if (!jQuery().bootstrapWizard) {
                return;
            }
            // default form wizard
            $('#form_wizard_1').bootstrapWizard({
                'nextSelector': '.button-next',
                'previousSelector': '.button-previous',
                onTabClick: function (tab, navigation, index) {
                    alert('on tab click disabled');
                    return false;
                },
                onNext: function (tab, navigation, index) {
				   
                    ///////////////////////////
					 var validator = $("#company_form").validate({
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
								required: true
							},
							company_email: {
								required: true
							},
							company_website: {
								required: true
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
						 invalidHandler: function (event, validator) { //display error alert on form submit              
							//success2.hide();
							$('#myerror').show();
							//App.scrollTo(error1, -200);
						},                              
						messages: {
							username: " Enter a Name",
							company_name: " Enter Company Name",
							company_address: " Please Enter Address",
							company_office_number1: " Enter Office Number",
							company_email: " Enter a Valid Company Email"
						}
					});
					
					/////////////////////////////////
					 if(!validator.form()){ // validation perform
						//$('form#company_form').attr({action: 'mycontroller'});			
					
						////////
						
						////////
					//	alert('Some Fields Missing');
						//window.location.replace('dashboard.php?page=company');
						//$('#tab2').hide();
						$('#myerror2').show();
						/////
						var total = navigation.find('li').length;
								var current = index + 1;
								// set wizard title
								$('.step-title', $('#form_wizard_1')).text('Step ' + (index + 1) + ' of ' + total);
								// set done steps
								jQuery('li', $('#form_wizard_1')).removeClass("done");
								var li_list = navigation.find('li');
								for (var i = 0; i < index; i++) {
									jQuery(li_list[i]).addClass("done");
								}

								if (current == 1) {
									$('#form_wizard_1').find('.button-previous').hide();
								} else {
									$('#form_wizard_1').find('.button-previous').show();
								}

								if (current >= total) 
								{
									$('#form_wizard_1').find('.button-next').hide();
									$('#form_wizard_1').find('.button-submit').hide();
								} 
								else 
								{
									$('#form_wizard_1').find('.button-next').show();
									$('#form_wizard_1').find('.button-submit').hide();
								}
								App.scrollTo($('.page-title'));
							
					} 
			    
					 if(validator.form()){
					   $('form#company_form').attr({action: 'mycontroller'});	
					  //////
					// $('#tab1').show();
					 //alert('Something');
					  //////
					  $('#myerror2').hide();
					      var total = navigation.find('li').length;
								var current = index + 1;
								// set wizard title
								$('.step-title', $('#form_wizard_1')).text('Step ' + (index + 1) + ' of ' + total);
								// set done steps
								jQuery('li', $('#form_wizard_1')).removeClass("done");
								var li_list = navigation.find('li');
								for (var i = 0; i < index; i++) {
									jQuery(li_list[i]).addClass("done");
								}

								if (current == 1) {
									$('#form_wizard_1').find('.button-previous').hide();
								} else {
									$('#form_wizard_1').find('.button-previous').show();
								}

								if (current >= total) 
								{
									$('#form_wizard_1').find('.button-next').hide();
									$('#form_wizard_1').find('.button-submit').show();
								} 
								else 
								{
									$('#form_wizard_1').find('.button-next').show();
									$('#form_wizard_1').find('.button-submit').hide();
								}
								App.scrollTo($('.page-title'));
					  
					  /////
					  
					 }
								
					
					
				////////////////////////////
					
                },
                onPrevious: function (tab, navigation, index) {
                    var total = navigation.find('li').length;
                    var current = index + 1;
                    // set wizard title
                    $('.step-title', $('#form_wizard_1')).text('Step ' + (index + 1) + ' of ' + total);
                    // set done steps
                    jQuery('li', $('#form_wizard_1')).removeClass("done");
                    var li_list = navigation.find('li');
                    for (var i = 0; i < index; i++) {
                        jQuery(li_list[i]).addClass("done");
                    }

                    if (current == 1) {
                        $('#form_wizard_1').find('.button-previous').hide();
						//
						
                    } 
					else {
                        $('#form_wizard_1').find('.button-previous').show();
                    }

                    if (current >= total) 
					{
                        $('#form_wizard_1').find('.button-next').hide();
                        $('#form_wizard_1').find('.button-submit').show();
                    } 
					else {
                        $('#form_wizard_1').find('.button-next').show();
                        $('#form_wizard_1').find('.button-submit').hide();
                    }

                    App.scrollTo($('.page-title'));
                },
                onTabShow: function (tab, navigation, index) {
                    var total = navigation.find('li').length;
                    var current = index + 1;
                    var $percent = (current / total) * 100;
                    $('#form_wizard_1').find('.bar').css({
                        width: $percent + '%'
                    });
                }
            });

            $('#form_wizard_1').find('.button-previous').hide();
            $('#form_wizard_1 .button-submit').click(function () {
               
			     $.ajax({
				      type: "POST",
					  url: './api/saveCompany.php',
					  data: {
					   username: $('#user').val(),
					   company_name: $('#company_name').val(),
					   company_address: $('#company_address').val(),
					   company_office_number1: $('#company_office_number1').val(),
					   company_office_number2: $('#company_office_number2').val(),
					   company_email: $('#company_email').val(),
					   company_website: $('#company_website').val(),
					   company_location_no: $('#company_location_no').val(),
					   company_size: $('#company_size').val(),
					   company_type: $('#company_type').val(),
					   company_status: $('#company_status').val(),
					   company_state: $('#company_state').val(),
					   country: $('#country').val()
					  },
					  success: function(data){
					   if(data === 'successful')
					   { 
					   
					    //window.location.replace('dashboard.php?page=company_table&success=1');
						jQuery('#form_wizard_1').hide();
						jQuery('#success_save').show();
					   }
					   if(data === 'error') 
					   {
							//alert('Save Failed. An Error occured');
							 alert(data);
	            
					   } 
					
					   
					  }
				   });
			   
			   
            }).hide();
        }

    };

}();