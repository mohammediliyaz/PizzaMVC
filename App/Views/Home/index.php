<?php require('C:\xampp\htdocs\pizzaMVC\App\templates\header.php'); ?>
<div class="container">
	<div class="row">
    <?php $pizza = $pizzas[0];?>
		<?php foreach ($pizza as $pizzaa) : ?>

			<div class="col s12 m6 l4">
				<div class="card z-depth-0">
					<img src="./assests/images/pizza.svg" class="pizza">
					<div class="card-content center">
						<span class="pizzatitle"><?php echo htmlspecialchars($pizzaa['title']); ?></span>
						<ul class="grey-text">
							<?php foreach (explode(',', $pizzaa['ingredients']) as $ing) : ?>
								<li class="pizzatitle"><?php echo htmlspecialchars($ing); ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="card-action right-align moreinfotitle">
						<a class="brand-text" href="details?id=<?php echo $pizzaa['id'] ?>">more info</a>
					</div>
				</div>
			</div>

		<?php endforeach; ?>

	</div>
</div>
<?php require('C:\xampp\htdocs\pizzaMVC\App\templates\footer.php'); ?>