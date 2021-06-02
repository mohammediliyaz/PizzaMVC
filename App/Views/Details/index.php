<?php

use App\Controllers\Details;


if (isset($_POST['delete'])) {

    $id_to_delete = $_POST['id_to_delete'];


    if (Detailsdb::setAll($id_to_delete)) {
        header('Location:/');
    } else {
        echo 'something went wrong!';
    }

}



if (isset($_GET['id'])) {

  $results = Details->indexAction($_GET['id']);
    // $result = Detailsdb::getAll($_GET['id']);
    $pizza = $result[0];

}

?>

<?php

require('C:\xampp\htdocs\pizzaMVC\App\templates\header.php'); ?>

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

<?php require('C:\xampp\htdocs\pizzaMVC\App\templates\footer.php'); ?>