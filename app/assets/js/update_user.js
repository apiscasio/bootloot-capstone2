$(document).ready(function(){


	function validateUpdateForm() {
		let user_id = $("#user_id").val();
		let username = $("#username").val();
		let firstname = $("#firstname").val();
		let lastname = $("#lastname").val();
		let email = $("#email").val();
		let address = $("#address").val();
		let old_password = $("#old_password").val();
		let new_password = $("#new_password").val();
		let confirm_password = $("#confirm_password").val();


		let errors = 0;

		if(username.length < 1) {
			$("#username").next().text("Please provide valid username");
			errors++;
		} else {
			$("#username").next().text("");
		}

		if(firstname.length == 0) {
			$("#firstname").next().text("Please provide valid firstname");
			errors++;
		} else {
			$("#firstname").next().text("");
		}

		if(lastname.length == 0) {
			$("#lastname").next().text("Please provide valid lastname");
			errors++;
		} else {
			$("#lastname").next().text("");
		}

		// if(email.includes("@")) {
		// 	$("#email").next().text("Please provide valid email");
		// 	errors++;
		// } else {
		// 	$("#email").next().text("");
		// }

		if(address.length == 0) {
			$("#address").next().text("Please provide valid address");
			errors++;
		} else {
			$("#address").next().text("");
		}

		if(new_password != confirm_password) {
			$("#confirm_password").next().text("Passwords should match");
			errors++;
		} else {
			$("#confirm_password").next().text("");
		}


		if(old_password == new_password) {
			$("#confirm_password").next().text("new passwords can't be the same as old password");
			errors++;
		} else {
			$("#confirm_password").next().text("");
		}
		if(errors>0){
			return false;
		} else {
			return true;
		}

	}




$("#update_user").on("click", function(){
	
	if (validateUpdateForm()){

		let user_id = $("#user_id").val();
		let username = $("#username").val();
		let firstname = $("#firstname").val();
		let lastname = $("#lastname").val();
		let email = $("#email").val();
		let address = $("#address").val();
		let old_password = $("#old_password").val();
		let new_password = $("#new_password").val();
		let confirm_password = $("#confirm_password").val();

		$.ajax({

			"url": "../controllers/update_user.php",
			"type":"POST",
			"data": {
				"user_id": user_id,
				"username": username,
				"firstname": firstname,
				"lastname": lastname,
				"email": email,
				"address": address,
				"old_password": old_password,
				"new_password": new_password,

			},
			"success": function (dataFromController) {
				if(dataFromController == "success") {
					$("#update.status").text("you have succesfully edited your profille");
				} 

				if(dataFromController == "incorrect") {
					$("#update.status").text("incorrect old password");
				} 

			}
	});

}


});

});