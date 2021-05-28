<?php
use App\Models\Detailsdb;



if (isset($_POST['delete'])) {

    $id_to_delete = $_POST['id_to_delete'];


    if (Detailsdb::setAll($id_to_delete)) {
        header('Location:/');
    } else {
        echo 'something went wrong!';
    }

}



if (isset($_GET['id'])) {

    $result = Detailsdb::getAll($_GET['id']);
    $pizza = $result[0];

}

?>

<!DOCTYPE html>
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
<body class="grey lighten-4">
<nav class="white z-depth-0">
    <div class="container"><h1>

      <a href="/" class="brand-logo brand-text">Pizza</a></h1>
      <ul id="nav-mobile" class="right hide-on-small-and-down">
        <li><a href="add" class="btn brand z-depth-0">Add a Pizza</a></li>
      </ul>
    </div>
  </nav>
  <h4 class="center grey-text">Pizzas!</h4>


<div class="container center">
	<?php if ($pizza) : ?>
		<h4><?php echo $pizza['title']; ?></h4>
		<p>Created by <?php echo $pizza['email']; ?></p>
		<p><?php echo date($pizza['created_at']); ?></p>
		<h5>Ingredients:</h5>
		<p><?php echo $pizza['ingredients']; ?></p>

		<form action="details" method="POST">
			<input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']; ?>">
			<input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
		</form>

	<?php else : ?>
		<h5>No such pizza exists.</h5>
	<?php endif ?>
</div>



</html>