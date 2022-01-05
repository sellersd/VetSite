 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Double Springs Veterinary Clinic</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<header>
	<?php include "header.html"?>
</header>

<body>

Complete the form to contact us.

<div class="container">
	<form method="post" name="contactus" action="scripts/send_email.php">
		<div class="form-group">
			<label for="usr">Name:</label>
			<input type="text" class="form-control" id="usr" name="usr">
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" name="email">

		</div>
		<div class="form-group">
			<label for="comment">Message:</label>
			<textarea class="form-control" rows="5" id="comment"></textarea>

		</div>
	<div class="row">
		<div class="col-sm-11">
		</div>
		<div class="col-sm-1">
			<button type="submit" class="btn btn-success float-right">Submit</button>
		</div>

	</div>
</div>


</body>

<footer>
	<?php include "footer.html"?>
</footer>
</html>
