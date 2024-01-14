function validate () {
	let firstName = document.getElementById("firstName").value;
	let password = document.getElementById("password").value;

	if (password.trim().length < 8) {
		alert("Password should be more than 8 characters");
		return false;
	}

	if (firstName.trim().length < 5 || firstName == "") {
		alert("Name should be more than 5 characters and cannot be null");
		return false;
	}

	return true;
}