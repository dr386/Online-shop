$(document).ready(function() {

	$("#FormField_1_input").focus();

	$("#register_form").submit(
		function (e) {
			let isValid = true;

			// Value must be entered into each text boxes
			$("#register_form input:text").each(function () {
				if ($(this).val().trim() == "") {
					isValid = false;
					$(this).next().text("This Field is required.");
				} else {
					$(this).next().text("");
				}
			});

			// The email address must match the pattern
            let email = $("#email").val().trim();
            let emailRegex = /\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b/;
			if (!emailRegex.test(email)) {
				$("#email").next().text("You must enter a valid email.");
				isValid = false;
			} else {
				$("#email").next().text("");
            }
            
            // The password address must match the pattern
			let password = $("#password").val().trim();
			let cfmPassword = $("#cfm_password").val().trim();
            let passwordRegex = /^(?=.*\d).{7,}$/;
			if (!passwordRegex.test(password)) {
				$("#password").next().text("Passwords must be at least 7 characters and contain at least one numeric character.");
				isValid = false;
			} else {
				$("#password").next().text("");
			}
			if(password != cfmPassword) {
				$("#cfm_password").next().text("Passwords must be the same.");
				isValid = false;
			} else {
				$("#cfm_password").next().text("");
			}
			
            let phone = $("#phone").val().trim();
            let phoneRegex = /^\d{10}$/;
			if (!phoneRegex.test(phone)) {
				$("#phone").next().text("You must enter a valid phone number.");
				isValid = false;
			} else {
				$("#phone").next().text("");
            }

			if (!isValid) e.preventDefault();
		} // end function
	); // end submit	
}); // end ready