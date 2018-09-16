jQuery(document).ready(function($){
	var regInput = "^([a-z éèêñçîì]{2,30})$/gi";
	var regPhone = '^([+(\d]{1})(([\d+() -.]){5,16})([+(\d]{1})$/g';
	var regMail = '^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$';
	
	var inputFirst = $('#firstNameLarge');
	var inputLast = $('#lastNameLarge');
	var inputPhone = $('#phoneLarge');
	var inputMail = $('#emailLarge');
	var inputPass = $('#passLarge');

$('input[name=users_last]').on('keyup', function(e){
	var userLast = $('input[name=users_last]').val();
	var regInput = "^([a-z éèêñçîì]{2,30})$/gi";
	if (!userLast.match(regInput)) {
		if (!document.getElementById('verifLast')) {
				return $(this).after("<p class='alert alert-danger' id='verifLast'>Votre nom doit être compris entre 2 et 30 caractères et être composé uniqument de lettres.</p>");
		}
	} else {
		
		if (document.getElementById('verifLast')) {
			return $('p[id=verifLast]').remove();
		}
	}
});

});