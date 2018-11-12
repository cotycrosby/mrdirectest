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
  <?php $numDivs = 16; $i = 0;?>

	
	<style>

		body {
			font-family: Arial, Helvetica, sans-serif;
			margin: 0;
			padding: 0;
		}

		h1 { 
			text-align:  center;
			padding: 5px;
			background: #252525;
			color: #e5e5e5; 
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


		/*Using the table layout*/

		table.nohack {
			border-collapse: collapse;
			width: 80%;
			margin: 10px auto;
		}

		table.nohack tr td {
			border: 2px solid black;
			padding: 1em;
			text-align: center;
		}

		table.nohack tr:first-child td { border-top: none; }
		table.nohack tr td:last-child { border-right: none; }
		table.nohack tr td:first-child { border-left: none; }
		table.nohack tr:last-child td { border-bottom: none; }


		table.hack { 
			border-collapse: collapse;
			width: 80%;
			margin: 10px auto; 
		}
		table.hack tr td {
			border: 2px solid black;
			padding: 1em;
			text-align: center;
		}

		table.hack tr td.rm-left { border-left: none; }
		table.hack tr td.rm-right { border-right: none; }
		table.hack tr td.rm-top { border-top: none; }
		table.hack tr td.rm-bottom { border-bottom: none; }


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

	<h1>Attempt using a table </h1>
	<table class='nohack'>

		<?php for( $i = 0; $i < $numDivs; $i++)	: ?>

			<tr>

				<td><?php echo $i; ?></td>

				<?php $i++; ?>
				<?php if ($i < $numDivs): ?>
					<td><?php echo $i; ?></td>
				<?php endif ?>

				<?php $i++; ?>
				<?php if ($i < $numDivs): ?>
					<td><?php echo $i; ?></td>
				<?php endif ?>
				
			</tr>
			
		<?php endfor; ?>


		<!-- This ended up working even worse than the grid -->
		
	</table>

	<!-- I normally wouldn't inline a function like this... but I'm trying to keep each attempt self contained -->
	<?php 
		function getClassString($i, $divs)
		{
			$classString = "";

			if( in_array($i, [0, 1, 2]) ){
				$classString .= " rm-top";
			}

			if (in_array($i, [0, 3, 6, 9, 12, 15])) {
				$classString .= " rm-left";
			}

			if (in_array($i, [2, 5, 8, 11, 14])) {
				$classString .= " rm-right";
			}

			if( ($i + 3) > $divs ){
				echo "$i ";
				$classString .= " rm-bottom";
			}

			echo $classString;

		}
	?>
	<h1>Second Table attempt using helper classes</h1>
	<table class="hack">
		
		<?php $i = 0; ?>
		
		<?php while($i < $numDivs): ?>
			<tr>
				

				<td class="<?php echo getClassString($i, $numDivs); ?>"><?php echo $i+1 ?></td>
				<?php $i++; ?>

				<?php if ($i < $numDivs): ?>
					<td class="<?php echo getClassString($i, $numDivs); ?>"><?php echo $i+1 ?></td>
				<?php endif ?>
				<?php $i++; ?>

				<?php if ($i < $numDivs): ?>
					<td class="<?php getClassString($i, $numDivs); ?>"><?php echo $i+1 ?></td>
				<?php endif ?>
				<?php $i++; ?>
			</tr>
		<?php endwhile; ?>
	</table>
	<br><br>
	
</body>
</html>