$(document).ready(function(){
	$("#register-form").validate({
		submitHandler : function(form) {
		    $('#submit_btn').attr('disabled','disabled');
			$('#submit_btn').button('loading');
			form.submit();
		},
		rules : {
			name : {
				required : true
			},
			email : {
				required : true,
				email: true,
				remote: {
					url: "usuario-comprobar-email.php",
					type: "post",
					data: {
						email: function() {
							return $( "#email" ).val();
						}
					}
				}
			},
			password : {
				required : true
			},
			confirm_password : {
				required : true,
				equalTo: "#password"
			}
		},
		messages : {
			name : {
				required : "Por favor, introduzca su nombre."
			},
			email : {
				required : "Por favor, introduzca su email.",
				remote : "Email ya existente."
			},
			password : {
				required : "Por favor, introduzca una contraseña."
			},
			confirm_password : {
				required : "Por favor, confirme la contraseña.",
				equalTo: "Las contraseñas no coinciden."
			}
		},
		errorPlacement : function(error, element) {
			$(element).closest('div').find('.help-block').html(error.html());
		},
		highlight : function(element) {
			$(element).closest('div').removeClass('has-success').addClass('has-error');
		},
		unhighlight: function(element, errorClass, validClass) {
			 $(element).closest('div').removeClass('has-error').addClass('has-success');
			 $(element).closest('div').find('.help-block').html('');
		}
	});
});