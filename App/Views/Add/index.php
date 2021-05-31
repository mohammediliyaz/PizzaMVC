<?php
use App\Models\Adddb;

$email = $title = $ingredients = '';
$errors = array('email' => '', 'title' => '', 'ingredients' => '');

if (isset($_POST['submit'])) {


	if (empty($_POST['email'])) {
		$errors['email'] = 'An email is required';
	} else {
		$email = $_POST['email'];
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors['email'] = 'Email must be a valid email address';
		}
	}


	if (empty($_POST['title'])) {
		$errors['title'] = 'A title is required';
	} else {
		$title = $_POST['title'];
		if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
			$errors['title'] = 'Title must be letters and spaces only';
		}
	}


	if (empty($_POST['ingredients'])) {
		$errors['ingredients'] = 'At least one ingredient is required';
	} else {
		$ingredients = $_POST['ingredients'];
		if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
			$errors['ingredients'] = 'Ingredients must be a comma separated list';
		}
	}



	if (!array_filter($errors)) {
		$email =  $_POST['email'];
		$title =  $_POST['title'];
		$ingredients =  $_POST['ingredients'];

		if (Adddb::setAll($email,$title,$ingredients)) {
			header('Location:/');
		} else {
			echo 'something went wrong!';
		}
	}
}

?>



<!DOCUMENT html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<meta charset="UTF-8"></meta>

<style type="text/css">
	  .brand{
	  	background: #cbb09c !important;
	  }
  	.brand-text{
  		color: #cbb09c !important;
  	}
      form{
  		max-width: 460px;
  		margin: 20px auto;
  		padding: 20px;
  	}
      .pizza{
      width: 100px;
      margin: 40px auto -30px;
      display: block;
      position: relative;
      top: -30px;
    }
  </style>
</head>
</head>
<body>
<nav class="white z-depth-0">
    <div class="container"><h1>

      <a href="/" class="brand-logo brand-text">Pizza</a></h1>
      <ul id="nav-mobile" class="right hide-on-small-and-down">
        <li><a href="add" class="btn brand z-depth-0">Add a Pizza</a></li>
      </ul>
    </div>
  </nav>
  <section class="container grey-text">
	<h4 class="center">Add a Pizza</h4>
	<form class="white" action="add" method="POST">
		<label>Your Email</label>
		<input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
		<div class="red-text"><?php echo $errors['email']; ?></div>
		<label>Pizza Title</label>
		<input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
		<div class="red-text"><?php echo $errors['title']; ?></div>
		<label>Ingredients (comma separated)</label>
		<input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
		<div class="red-text"><?php echo $errors['ingredients']; ?></div>
		<div class="center">
			<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
		</div>
	</form>
</section>
<footer class="section">
		<div class="center grey-text">&copy; Copyright 2021 Pizzas</div>
	</footer>
</body>
</html>