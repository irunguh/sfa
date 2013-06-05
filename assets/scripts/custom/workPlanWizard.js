var WorkPlanWizard = function () {


    return {
        //main function to initiate the module
        init: function () {
            if (!jQuery().bootstrapWizard) {
                return;
            }

            // default form wizard
            $('#form_wizard_workplan').bootstrapWizard({
                'nextSelector': '.button-next',
                'previousSelector': '.button-previous',
                onTabClick: function (tab, navigation, index) {
                    alert('on tab click disabled');
                    return false;
                },
                onNext: function (tab, navigation, index) {
				
				     var validator = $("#workplan_form").validate({
						rules: {        	        		
							company: {
								required: true
							},
							meeting_date: {
								required: true
							},
							contact: {
								required: true
							},
							start_time: {
								required: true
							},
							work_activity_type: {
								required: true
							},
							end_time: {
								required: true
							},
							work_address: {
								required: false
							},
							proposed_activity: {
								required: false
							}
						},  
						 invalidHandler: function (event, validator) { //display error alert on form submit              
							//success2.hide();
							$('#myerror').show();
							//App.scrollTo(error1, -200);
						},                              
						messages: {
							company: " Enter a Name",
							meeting_date: " Ente meeting date",
							contact: " Select Contact",
							start_time: " Enter Start Time",
							work_activity_type: " Select Activity type",
							end_time: " Enter work End time",
							work_address: "Provide Work Address",
							proposed_activity: "Enter Proposed Actvivity Details",
						}
						,

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
                }
						
					});
					/////////>>>>>>
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
								$('.step-title', $('#form_wizard_workplan')).text('Step ' + (index + 1) + ' of ' + total);
								// set done steps
								jQuery('li', $('#form_wizard_workplan')).removeClass("done");
								var li_list = navigation.find('li');
								for (var i = 0; i < index; i++) {
									jQuery(li_list[i]).addClass("done");
								}

								if (current == 1) {
									$('#form_wizard_workplan').find('.button-previous').hide();
								} else {
									$('#form_wizard_workplan').find('.button-previous').show();
								}

								if (current >= total) 
								{
									$('#form_wizard_workplan').find('.button-next').hide();
									$('#form_wizard_workplan').find('.button-submit').hide();
								} 
								else 
								{
									$('#form_wizard_workplan').find('.button-next').show();
									$('#form_wizard_workplan').find('.button-submit').hide();
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
								$('.step-title', $('#form_wizard_workplan')).text('Step ' + (index + 1) + ' of ' + total);
								// set done steps
								jQuery('li', $('#form_wizard_workplan')).removeClass("done");
								var li_list = navigation.find('li');
								for (var i = 0; i < index; i++) {
									jQuery(li_list[i]).addClass("done");
								}

								if (current == 1) {
									$('#form_wizard_workplan').find('.button-previous').hide();
								} else {
									$('#form_wizard_workplan').find('.button-previous').show();
								}

								if (current >= total) 
								{
									$('#form_wizard_workplan').find('.button-next').hide();
									$('#form_wizard_workplan').find('.button-submit-workplan').show();
								} 
								else 
								{
									$('#form_wizard_workplan').find('.button-next').show();
									$('#form_wizard_workplan').find('.button-submit-workplan').hide();
								}
								App.scrollTo($('.page-title'));
					  
					  /////
					  
					 }
					//////>>>>>>
				
                  
					
                },
                onPrevious: function (tab, navigation, index) {
                    var total = navigation.find('li').length;
                    var current = index + 1;
                    // set wizard title
                    $('.step-title', $('#form_wizard_workplan')).text('Step ' + (index + 1) + ' of ' + total);
                    // set done steps
                    jQuery('li', $('#form_wizard_workplan')).removeClass("done");
                    var li_list = navigation.find('li');
                    for (var i = 0; i < index; i++) {
                        jQuery(li_list[i]).addClass("done");
                    }

                    if (current == 1) {
                        $('#form_wizard_workplan').find('.button-previous').hide();
                    } else {
                        $('#form_wizard_workplan').find('.button-previous').show();
                    }

                    if (current >= total) {
                        $('#form_wizard_workplan').find('.button-next').hide();
                        $('#form_wizard_workplan').find('.button-submit-workplan').show();
                    } else {
                        $('#form_wizard_workplan').find('.button-next').show();
                        $('#form_wizard_workplan').find('.button-submit-workplan').hide();
                    }

                    App.scrollTo($('.page-title'));
                },
                onTabShow: function (tab, navigation, index) {
                    var total = navigation.find('li').length;
                    var current = index + 1;
                    var $percent = (current / total) * 100;
                    $('#form_wizard_workplan').find('.bar').css({
                        width: $percent + '%'
                    });
                }
            });

            $('#form_wizard_workplan').find('.button-previous').hide();
            $('#form_wizard_workplan .button-submit-workplan').click(function () {
               
			     $.ajax({
				      type: "POST",
					  url: './api/saveWorkPlan.php',
					  data: {
					   company: $('#company').val(),
					   contact: $('#contact').val(),
					   meeting_date: $('#meeting_date').val(),
					   start_time: $('#start_time').val(),
					   end_time: $('#end_time').val(),
					   proposed_activity: $('textarea#proposed_activity').val(),
					   work_address: $('textarea#work_address').val(),
					   work_activity_type: $('#work_activity_type').val()
					  },
					  success: function(data){
					   if(data === 'successful')
					   { 
					 //  alert(meeting_date);
					    //window.location.replace('dashboard.php?page=company_table&success=1');
						jQuery('#form_wizard_workplan').hide();
						jQuery('#success_save_workplan').show();
					//	alert($('#meeting_date').val());
					//alert(data[2]);
					   }
					   else {
					        //$('.alert-invalid', $('.login-form')).show();
							alert(data);
	            
					   }
					  }
				   });
			   
			   
            }).hide();
        }

    };

}();