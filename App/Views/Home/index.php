
<!DOCUMENT html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<meta charset="UTF-8"></meta>
<link rel="stylesheet" href="../style.css">
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
.container{
    position: relative;
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

<div class="container">
	<div class="row">
    <?php $pizza = $pizzas[0];?>
		<?php foreach ($pizza as $pizzaa) : ?>

			<div class="col s12 m6 l4">
				<div class="card z-depth-0">
					<img src="./assests/images/pizza.svg" class="pizza">
					<div class="card-content center">
						<h6><?php echo htmlspecialchars($pizzaa['title']); ?></h6>
						<ul class="grey-text">
							<?php foreach (explode(',', $pizzaa['ingredients']) as $ing) : ?>
								<li><?php echo htmlspecialchars($ing); ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="card-action right-align">
						<a class="brand-text" href="details?id=<?php echo $pizzaa['id'] ?>">more info</a>
					</div>
				</div>
			</div>

		<?php endforeach; ?>

	</div>
</div>
<footer class="section">
		<div class="center grey-text">&copy; Copyright 2021 Pizzas</div>
	</footer>
</body>
</html>