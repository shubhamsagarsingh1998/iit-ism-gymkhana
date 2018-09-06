$(document).ready(function(){
	$(".owl-carousel").owlCarousel({
		loop: true,
		autoplay: true,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2
			},
			768: {
				items: 3
			}
		}
	});

	$("#awards").click(function(){
		$("#awards").removeClass("active");
		$("#newsletters").removeClass("active");
		$("#awards").addClass("active");

		$("#newsletters-content").css("display", "none");
		$("#awards-content").css("display", "block");
	});

	$("#newsletters").click(function(){
		$("#awards").removeClass("active");
		$("#newsletters").removeClass("active");
		$("#newsletters").addClass("active");

		$("#awards-content").css("display", "none");
		$("#newsletters-content").css("display", "block");
	});

	$('.feedback-form form').submit(function(event){
		event.preventDefault();

		var isNameValid = validateName(event.target.name.value);
		var isContactValid = validateContact(event.target.contact.value);
		var isEmailValid = validateEmail(event.target.email.value);
		var isFeedbackValid = validateFeedback(event.target.feedback.value);

		if(isNameValid && isContactValid && isEmailValid && isFeedbackValid){
			$.ajax({
				url: 'requests/feedback-submit.php',
				type: 'POST',
				data: {
					name: isNameValid,
					contact: event.target.contact.value,
					email: event.target.email.value,
					feedback: isFeedbackValid,
				},
				success: function(data){
					if(data==1){
						$('.feedback-form p').addClass('alert-success');
						$('.feedback-form p').text('Feedback submitted successfully');
						$('.feedback-form input, .feedback-form textarea').val('');
					}
					else{
						$('.feedback-form p').addClass('alert-danger');
						$('.feedback-form p').text(data);
					}
					setTimeout(function(){
						$('.feedback-form p').removeClass('alert-success');
						$('.feedback-form p').removeClass('alert-danger');
						$('.feedback-form p').text('');
					}, 3000);
				}
			});
		}
		else displayInvalidMessage(isNameValid, isContactValid, isEmailValid, isFeedbackValid);
	});
});

function validateName(name){
	name = name.replace(/^\s+|\s+$/g, '');
	name = name.replace(/\s\s+/g, ' ');
	if(name == '') return false;
	else return name;
};

function validateContact(contact){
	return contact.match(/^\d{10}$/);
};

function validateEmail(email){
	return email.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
};

function validateFeedback(feedback){
	feedback = feedback.replace(/^\s+|\s+$/g, '');
	feedback = feedback.replace(/\s\s+/g, ' ');
	if(feedback == '') return false;
	else return feedback;
};

function displayInvalidMessage(isNameValid, isContactValid, isEmailValid, isFeedbackValid){
	$('.feedback-form p').removeClass('alert-danger');
	$('.feedback-form p').text('');
	if(!(isNameValid && isContactValid && isEmailValid && isFeedbackValid)){
		$('.feedback-form p').addClass('alert-danger');
		if(!isNameValid) $('.feedback-form p').append(' Invalid Name.');
		if(!isContactValid) $('.feedback-form p').append(' Invalid Contact.');
		if(!isEmailValid) $('.feedback-form p').append(' Invalid E-mail.');
		if(!isFeedbackValid) $('.feedback-form p').append(' Invalid Feedback.');
	};
}
