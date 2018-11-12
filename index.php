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
  <?php $numDivs = 7; $i = 0;?>

	
	<style>

		body {
			font-family: Arial, Helvetica, sans-serif;
		}

		.container {
			width: 80%;
			margin: 0 auto;
			background: black;
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
			grid-column-gap: 2px;
			grid-row-gap: 2px;
		}

		.container div {
			background: white;
			padding: 1em;
			text-align: center;

		}

		.container .two {
			grid-column: 2/4;
		}

	</style>

</head>
<body>
	<h1>Attempt using CSS Grid</h1>
		<hr>
	<div class="container">

		<!-- This works perfectly for multiples of 3 -->
		<!-- Leaves the black void for anything else -->
		<?php for( $i = 0; $i < $numDivs; $i++)	: ?>
			<div><?php echo $i+1; ?></div>
		<?php endfor; ?>


		<!-- Comment this code out to see the before option -->
		<!-- This is the hack I used to remove the unused rows from the grid -->
		<!-- if $i ends up in the first column and a div with a class of two so it spans to the last row -->
		<!-- if it ends in the second column just add another div -->
			<?php if (in_array($i, [ 1, 4, 7, 10, 13, 16])): ?>
				<div class="two"></div>
			<?php endif ?>

			<?php if (in_array($i, [ 2,5,8,11,14])): ?>
				<div ></div>
			<?php endif ?>
		
		<!-- comment -->

		

	</div>
	
</body>
</html>