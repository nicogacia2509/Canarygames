<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
	</head>

// Define a function to handle sign-in
function signIn() {
  // Get the input values from the form
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  
  // Check if the email and password are valid (replace this with your own validation code)
  if (email === "example@email.com" && password === "password123") {
    // If the credentials are valid, display a success message
    alert("Sign-in successful!");
  } else {
    // If the credentials are not valid, display an error message
    alert("Invalid email or password. Please try again.");
  }
}

// Add an event listener to the sign-in button
const signInBtn = document.getElementById("sign-in-btn");
signInBtn.addEventListener("click", signIn);

 </html>
