/**************************
			 Validate
	**************************/
	// http://bassistance.de/jquery-plugins/jquery-plugin-validation/
	// http://docs.jquery.com/Plugins/Validation/
	// http://docs.jquery.com/Plugins/Validation/validate#toptions
	
	$('#contact-form').validate({
		rules: {
			name: {
				minlength: 2,
				required: true
			},
			last: {
				minlength: 2,
				required: true
			},
			email: {
				required: true,
				email: true
			},
			message: {
				minlength: 2,
				required: true
			},
			phone: {
				minlength: 9,
				required: true,
				number:  true
				
			},
			amount: {
				required: true,
				number:  true
				
			},
			city: {
				minlength: 2,
				required: true
				
			}
			,
			aim: {
				minlength: 5,
				required: true
				
			}
			,
			target: {
				minlength: 5,
				required: true
				
			}
			,
			message: {
				minlength: 15,
				required: true
				
			}
		
			
		},
	
		highlight: function(label) {
			$(label).closest('.control-group').addClass('error');
		},
		success: function(label) {
			label
			.text('mmm OK looKs great!').addClass('valid')
			.closest('.control-group').addClass('success');
		}
	});	  