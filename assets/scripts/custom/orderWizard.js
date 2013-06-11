var OrderWizard = function () {


    return {
        //main function to initiate the module
        init: function () {
            if (!jQuery().bootstrapWizard) {
                return;
            }

            // default form wizard
            $('#form_wizard_order').bootstrapWizard({
                'nextSelector': '.button-next',
                'previousSelector': '.button-previous',
                onTabClick: function (tab, navigation, index) {
                    alert('on tab click disabled');
                    return false;
                },
                onNext: function (tab, navigation, index) {
				 //////////////////////
                   var validator = $("#company_orders_form").validate({
						rules: {        	        		
							username: {
								required: true
							},
							company: {
								required: true
							},
							company_branch_name: {
								required: true
							},
							product: {
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
							company: " Select Company",
							company_branch_name: " Select Branch"
							
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
				////////////////////////////////
				   if(!validator.form()){
				      	$('#myerror2').show();
						/////
						var total = navigation.find('li').length;
								var current = index + 1;
								// set wizard title
								$('.step-title', $('#form_wizard_order')).text('Step ' + (index + 1) + ' of ' + total);
								// set done steps
								jQuery('li', $('#form_wizard_order')).removeClass("done");
								var li_list = navigation.find('li');
								for (var i = 0; i < index; i++) {
									jQuery(li_list[i]).addClass("done");
								}

								if (current == 1) {
									$('#form_wizard_order').find('.button-previous').hide();
								} else {
									$('#form_wizard_order').find('.button-previous').show();
								}

								if (current >= total) 
								{
									$('#form_wizard_order').find('.button-next').hide();
									$('#form_wizard_order').find('.button-submit').hide();
								} 
								else 
								{
									$('#form_wizard_order').find('.button-next').show();
									$('#form_wizard_order').find('.button-submit').hide();
								}
								App.scrollTo($('.page-title'));
				   }
				   if(validator.form()){
				     $('form#company_orders_form').attr({action: 'mycontroller'});	
					  //////
					// $('#tab1').show();
					 //alert('Something');
					  //////
					  $('#myerror2').hide();
					      var total = navigation.find('li').length;
								var current = index + 1;
								// set wizard title
								$('.step-title', $('#form_wizard_order')).text('Step ' + (index + 1) + ' of ' + total);
								// set done steps
								jQuery('li', $('#form_wizard_order')).removeClass("done");
								var li_list = navigation.find('li');
								for (var i = 0; i < index; i++) {
									jQuery(li_list[i]).addClass("done");
								}

								if (current == 1) {
									$('#form_wizard_order').find('.button-previous').hide();
								} else {
									$('#form_wizard_order').find('.button-previous').show();
								}

								if (current >= total) 
								{
									$('#form_wizard_order').find('.button-next').hide();
									$('#form_wizard_order').find('.button-submit').show();
								} 
								else 
								{
									$('#form_wizard_order').find('.button-next').show();
									$('#form_wizard_order').find('.button-submit').hide();
								}
								App.scrollTo($('.page-title'));
					  
				   }
				////////////////////////////////
                },
                onPrevious: function (tab, navigation, index) {
                    var total = navigation.find('li').length;
                    var current = index + 1;
                    // set wizard title
                    $('.step-title', $('#form_wizard_order')).text('Step ' + (index + 1) + ' of ' + total);
                    // set done steps
                    jQuery('li', $('#form_wizard_order')).removeClass("done");
                    var li_list = navigation.find('li');
                    for (var i = 0; i < index; i++) {
                        jQuery(li_list[i]).addClass("done");
                    }

                    if (current == 1) {
                        $('#form_wizard_order').find('.button-previous').hide();
                    } else {
                        $('#form_wizard_order').find('.button-previous').show();
                    }

                    if (current >= total) {
                        $('#form_wizard_order').find('.button-next').hide();
                        $('#form_wizard_order').find('.button-submit').show();
                    } else {
                        $('#form_wizard_order').find('.button-next').show();
                        $('#form_wizard_order').find('.button-submit').hide();
                    }

                    App.scrollTo($('.page-title'));
                },
                onTabShow: function (tab, navigation, index) {
                    var total = navigation.find('li').length;
                    var current = index + 1;
                    var $percent = (current / total) * 100;
                    $('#form_wizard_order').find('.bar').css({
                        width: $percent + '%'
                    });
                }
            });

            $('#form_wizard_order').find('.button-previous').hide();
            $('#form_wizard_order .button-submit').click(function () {
			   
			   
			    //alert($('#product').val());
               
			     $.ajax({
				      type: "POST",
					  url: './api/saveOrder.php',
					  data: {
					   username: $('#username').val(),
					   company: $('#company').val(),
					   branch: $('#company_branch_name').val(),
					   product: $("#confirm_product").val()
					
					  },
					  success: function(data){
					  /* if(data === 'successful')
					   { 
					 //  alert(meeting_date);
					    //window.location.replace('dashboard.php?page=company_table&success=1');
						//jQuery('#form_wizard_order').hide();
						//jQuery('#success_save_workplan').show();
						alert('Order Saved');
					   }
					   else {
					        //$('.alert-invalid', $('.login-form')).show();
							alert(data);
							console.log("Log>>>"+$("#confirm_product").val());
	            
					   } */
					   alert('Order Submitted');
					  }
				   });
			   
			   
            }).hide();
        }

    };

}();