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
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">
  <div class="card bg-success">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0 ">
        <button class="btn btn-block btn-lg btn-link collapsed"
		data-toggle="collapse"
		data-target="#collapseOne"
		aria-expanded="false"
		aria-controls="collapseOne">
		Q: When should I vaccinate my puppy/kitten?
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body bg-danger">
	      <b>Answer:</b>Vaccinations should begin at 6 weeks of age.
      </div>
    </div>
  </div>

  <div class="card bg-success">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-block btn-lg btn-link collapsed"
		data-toggle="collapse"
		data-target="#collapseTwo"
		aria-expanded="false"
		aria-controls="collapseTwo">
		Q: When should I spay/neuter my pet?
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body bg-danger">
	      <b>Answer:</b> Typically, pets should be spayed/neutered at 6 months of age.
      </div>
    </div>
  </div>
</div>
</div>
</body>
<footer>
	<?php include "footer.html"?>
</footer>
</html>
