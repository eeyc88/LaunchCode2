<?php
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</head>
<body>
<div class="row">
	<div class="col"></div>
	<div class="col">
		<div class="container">
			<h1>LOGIN</h1>
			 <form action="validation.php/&quot;&gt;&lt;script&gt;alert('hacked')&lt;/script&gt;" method="POST" class="needs-validation" novalidate>
			  <div class="form-group">
			    <label for="uname">Username:</label>
			    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
			    <div class="valid-feedback">Valid.</div>
			    <div class="invalid-feedback">Please fill out this field.</div>
			  </div>
			  <div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
			    <div class="valid-feedback">Valid.</div>
			    <div class="invalid-feedback">Please fill out this field.</div>
			  </div>
			  <div class="form-group form-check">
			    <label class="form-check-label">
			      <input class="form-check-input" type="checkbox" name="remember" required> I'm not a robot.
			      <div class="valid-feedback">Valid.</div>
			      <div class="invalid-feedback">Check this checkbox to continue.</div>
			    </label>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>

			<script>
			// Disable form submissions if there are invalid fields
			(function() {
			  'use strict';
			  window.addEventListener('load', function() {
			    // Get the forms we want to add validation styles to
			    var forms = document.getElementsByClassName('needs-validation');
			    // Loop over them and prevent submission
			    var validation = Array.prototype.filter.call(forms, function(form) {
			      form.addEventListener('submit', function(event) {
			        if (form.checkValidity() === false) {
			          event.preventDefault();
			          event.stopPropagation();
			        }
			        form.classList.add('was-validated');
			      }, false);
			    });
			  }, false);
			})();
			</script> 
		</div>
	</div>
	<div class="col"></div>
</div>
</body>
</html>
