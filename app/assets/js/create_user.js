$(document).ready(function() {
	const addUser = $("#add-user");
	const username = $("#username");
	const password = $("#password");
	const confirmPassword = $("#confirm-password");
	const email = $("#email");
	const firstname = $("#firstname");
	const lastname = $("#lastname");
	const address = $("#home-address");

	function validateRegistrationForm() {
		let errors = 0;

		//username should be grater than or equal to 8 characters
		if (username.val().length < 8) {
			username.next().text("Please provide a valid username with at least eight (8) characters");
			errors++;
		} else {
			username.next().text("");
		}

		//password should be grater than or equal to 8 chars
		if (password.val().length < 8 ) {
			password.next().text("Please provide a password with at least eight (8) characters");
			errors++;
		} else {
			password.next().text("");
		}

		// email should follow the email format
		if (!email.val().includes("@")) {
			email.next().text("Please provide a valid email");
			errors++;
		} else {	
			email.next().text("");
		}

		// address should not be empty
		if (address.val() == "") {
			address.next().text("Please provide an address");
			errors++;	
		} else {
			address.next().text("");
		}

		// first name
		if (firstname.val() == "") {
			firstname.next().text("Please provide a first name");
			errors++;	
		} else {
			firstname.next().text("");
		}

		// last name
		if (lastname.val() == "") {
			lastname.next().text("Please provide a last name");
			errors++;	
		} else {
			lastname.next().text("");
		}

		// password confirmation
		if (confirmPassword.val() !== password.val()) {
			confirmPassword.next().text("Password mismatch");
			errors++;
		} else {
			confirmPassword.next().text("");
		}

		if (errors > 0) {
			return false;
		} else {
			return true;
		}

		console.log(errors);
	}

	addUser.click(function(e) {
		e.preventDefault();
		// validate registration form
		// if true, add user
		// else, error
		if (validateRegistrationForm()) {
			let usernameVal = username.val();
			let passwordVal = password.val();
			let firstnameVal = firstname.val();
			let lastnameVal = lastname.val();
			let emailVal = email.val();
			let addressVal = address.val();

			$.ajax({
				"url": "../controllers/create_users.php",
				"type": "POST",
				"data": {
					"username" : usernameVal,
					"password": passwordVal,
					"firstname": firstnameVal,
					"lastname": lastnameVal,
					"email": emailVal,
					"home-address": addressVal
				},
				"success": function (jsondata) {
					if (jsondata == "user exists") {
						username.next().text("Username already exists");
					} else {
						$("#main").html(`<h1> You have successfully registered </h1>`);
					}
				}
			});

		}

	});
});