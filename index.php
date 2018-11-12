<DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MR Direct</title>

	

	<!-- MR Direct test #4 -->
	<!-- 	Write a PHP snippet, along with requisite CSS, that will arrange between zero and sixteen divs into a square grid with internal grid lines only.  -->

  <!-- Declaring the number of divs in the grid -->
  <?php $numDivs = 7; ?>

	
	<style>
		.container {
			width: 80%;
			margin: 0 auto;
			background: black;
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
			grid-column-gap: 1px;
			grid-row-gap: 1px;
		}

		.container div {
			background: white;
			padding: 5px;
			text-align: center;

		}
	</style>

</head>
<body>

	<div class="container">
		<?php for( $i = 0; $i < $numDivs; $i++)	: ?>
			<div><?php echo $i+1; ?></div>
		<?php endfor; ?>
	</div>
	
</body>
</html>