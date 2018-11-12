<DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MR Direct</title>

	<style>

		.container { 
			width: 1000px;
			margin: 10px auto;
			padding: 15px 0;
			border: 1px solid black;

		}
		.square{
			width: 92px;
			height: 92px;
			background-color: #254595;
			border: 4px solid #254595;
			border-top-color: red;
			top: 15% ;
			left: 0%;
			/*animation: move 4s linear, spin  2s linear 4s;*/
			animation: move 4s linear, spin 2s linear 4s;
		}

		@keyframes move {
			0% { margin-left: 0px; }
			10% { margin-left: 89px; }
			20% { margin-left: 178px; }
			30% { margin-left: 267px; }
			40% { margin-left: 356px; }
			50% { margin-left: 445px; }
			60% { margin-left: 534px; }
			70% { margin-left: 623px; }
			80% { margin-left: 712px; }
			90% { margin-left: 801px; }
			100% {margin-left: 900px; }
/*			100% { right: 100px; }
*/		}
		@keyframes spin {
			0% { margin-left: 900px; transform:rotate(0deg);}
			10% { margin-left: 801px; transform:rotate(36deg);}
			20% { margin-left: 712px; transform:rotate(72deg);}
			30% { margin-left: 623px; transform:rotate(144deg);}
			40% { margin-left: 534px; transform:rotate(180deg);}
			50% { margin-left: 445px; transform:rotate(216deg);}
			60% { margin-left: 356px; transform:rotate(252deg);}
			70% { margin-left: 267px; transform:rotate(288deg);}
			80% { margin-left: 178px; transform:rotate(324deg);}
			90% { margin-left: 89px; transform:rotate(345deg);}
			100% { margin-left: 0px; transform:rotate(360deg);}
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="square"></div>
	</div>
	
	
</body>
</html>