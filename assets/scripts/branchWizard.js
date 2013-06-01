var BranchWizard = function () {


    return {
        //main function to initiate the module
        init: function () {
            if (!jQuery().bootstrapWizard) {
                return;
            }

            // default form wizard
            $('#form_wizard_2').bootstrapWizard({
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
                    $('.step-title', $('#form_wizard_2')).text('Step ' + (index + 1) + ' of ' + total);
                    // set done steps
                    jQuery('li', $('#form_wizard_2')).removeClass("done");
                    var li_list = navigation.find('li');
                    for (var i = 0; i < index; i++) {
                        jQuery(li_list[i]).addClass("done");
                    }

                    if (current == 1) {
                        $('#form_wizard_2').find('.button-previous').hide();
                    } else {
                        $('#form_wizard_2').find('.button-previous').show();
                    }

                    if (current >= total) {
                        $('#form_wizard_2').find('.button-next').hide();
                        $('#form_wizard_2').find('.button-submit').show();
                    } else {
                        $('#form_wizard_2').find('.button-next').show();
                        $('#form_wizard_2').find('.button-submit').hide();
                    }
                    App.scrollTo($('.page-title'));
                },
                onPrevious: function (tab, navigation, index) {
                    var total = navigation.find('li').length;
                    var current = index + 1;
                    // set wizard title
                    $('.step-title', $('#form_wizard_2')).text('Step ' + (index + 1) + ' of ' + total);
                    // set done steps
                    jQuery('li', $('#form_wizard_2')).removeClass("done");
                    var li_list = navigation.find('li');
                    for (var i = 0; i < index; i++) {
                        jQuery(li_list[i]).addClass("done");
                    }

                    if (current == 1) {
                        $('#form_wizard_2').find('.button-previous').hide();
                    } else {
                        $('#form_wizard_2').find('.button-previous').show();
                    }

                    if (current >= total) {
                        $('#form_wizard_2').find('.button-next').hide();
                        $('#form_wizard_2').find('.button-submit').show();
                    } else {
                        $('#form_wizard_2').find('.button-next').show();
                        $('#form_wizard_2').find('.button-submit').hide();
                    }

                    App.scrollTo($('.page-title'));
                },
                onTabShow: function (tab, navigation, index) {
                    var total = navigation.find('li').length;
                    var current = index + 1;
                    var $percent = (current / total) * 100;
                    $('#form_wizard_2').find('.bar').css({
                        width: $percent + '%'
                    });
                }
            });

            $('#form_wizard_2').find('.button-previous').hide();
            $('#form_wizard_2 .button-submit').click(function () {
               
			     $.ajax({
				      type: "POST",
					  url: './api/saveBranch.php',
					  data: {
					   branch_username: $('#branch_username').val(),
					   company_branch_name: $('#company_branch_name').val(),
					   branch_name: $('#branch_name').val(),
					   branch_address: $('#branch_address').val(),
					   company_state: $('#company_state').val(),
					   company_country: $('#company_country').val()
					  },
					  success: function(data){
					   if(data === 'successful')
					   { 
					   
					    //window.location.replace('dashboard.php?page=company_table&success=1');
						alert('Save Successful');
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