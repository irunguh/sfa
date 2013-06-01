var WorkPlanWizard = function () {


    return {
        //main function to initiate the module
        init: function () {
            if (!jQuery().bootstrapWizard) {
                return;
            }

            // default form wizard
            $('#form_wizard_3').bootstrapWizard({
                'nextSelector': '.button-next',
                'previousSelector': '.button-previous',
                onTabClick: function (tab, navigation, index) {
                    alert('on tab click disabled');
                    return false;
                },
                onNext: function (tab, navigation, index) {
                    var total = navigation.find('li').length;
                    var current = index + 1;
                    // set wizard title
                    $('.step-title', $('#form_wizard_3')).text('Step ' + (index + 1) + ' of ' + total);
                    // set done steps
                    jQuery('li', $('#form_wizard_3')).removeClass("done");
                    var li_list = navigation.find('li');
                    for (var i = 0; i < index; i++) {
                        jQuery(li_list[i]).addClass("done");
                    }

                    if (current == 1) {
                        $('#form_wizard_3').find('.button-previous').hide();
                    } else {
                        $('#form_wizard_3').find('.button-previous').show();
                    }

                    if (current >= total) {
                        $('#form_wizard_3').find('.button-next').hide();
                        $('#form_wizard_3').find('.button-submit-workplan').show();
                    } else {
                        $('#form_wizard_3').find('.button-next').show();
                        $('#form_wizard_3').find('.button-submit-workplan').hide();
                    }
                    App.scrollTo($('.page-title'));
                },
                onPrevious: function (tab, navigation, index) {
                    var total = navigation.find('li').length;
                    var current = index + 1;
                    // set wizard title
                    $('.step-title', $('#form_wizard_3')).text('Step ' + (index + 1) + ' of ' + total);
                    // set done steps
                    jQuery('li', $('#form_wizard_3')).removeClass("done");
                    var li_list = navigation.find('li');
                    for (var i = 0; i < index; i++) {
                        jQuery(li_list[i]).addClass("done");
                    }

                    if (current == 1) {
                        $('#form_wizard_3').find('.button-previous').hide();
                    } else {
                        $('#form_wizard_3').find('.button-previous').show();
                    }

                    if (current >= total) {
                        $('#form_wizard_3').find('.button-next').hide();
                        $('#form_wizard_3').find('.button-submit-workplan').show();
                    } else {
                        $('#form_wizard_3').find('.button-next').show();
                        $('#form_wizard_3').find('.button-submit-workplan').hide();
                    }

                    App.scrollTo($('.page-title'));
                },
                onTabShow: function (tab, navigation, index) {
                    var total = navigation.find('li').length;
                    var current = index + 1;
                    var $percent = (current / total) * 100;
                    $('#form_wizard_3').find('.bar').css({
                        width: $percent + '%'
                    });
                }
            });

            $('#form_wizard_3').find('.button-previous').hide();
            $('#form_wizard_3 .button-submit-workplan').click(function () {
               
			     $.ajax({
				      type: "POST",
					  url: './api/saveWorkPlan.php',
					  data: {
					   company: $('#company').val(),
					   contact: $('#contact').val(),
					   meeting_date: $('#meeting_date').val(),
					   start_time: $('#start_time').val(),
					   end_time: $('#end_time').val(),
					   proposed_activity: $('#proposed_activity').val(),
					   work_address: $('#work_address').val(),
					   work_activity_type: $('#work_activity_type').val()
					  },
					  success: function(data){
					   if(data === 'successful')
					   { 
					 //  alert(meeting_date);
					    //window.location.replace('dashboard.php?page=company_table&success=1');
						jQuery('#form_wizard_3').hide();
						jQuery('#success_save').show();
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