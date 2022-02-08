<!DOCTYPE html>
<html>
<head>

	<!-- <base href="" target="_blank"> -->
	<meta charset="UTF-8">
	<title> AEFASDCA </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style id="responsive">

		* {
			box-sizing: border-box;
		}

		.main {
			float: left;
			width: 60%;
			padding: 0 20px;
			overflow: hidden;
		}

		.right {
			background-color: lightblue;
			float: left;
			width: 20%;
			padding: 10px 15px;
			margin-top: 7px;
		}

		@media only screen and (max-width:800px) {
			/* For tablets: */
  
			.main {
				width: 80%;
				padding: 0;
			}
	
			.right {
				width: 100%;
			}
  
		}

		@media only screen and (max-width:500px) {
			/* For mobile phones: */
  
			.main, .right {
				width: 100%;
			}
		}

	</style>

	<style id="text_appearance">

		#header {
			text-align: center;
		}

	</style>
	
	<style id="responsive navbar"> 

		.navbar {
			margin: 0;
			padding: 0;
			width: 200px;
			background-color: #f1f1f1;
			position: fixed;
			height: 100%;
			overflow: auto;
		}

		.navbar a {
			display: block;
			color: black;
			padding: 16px;
			text-decoration: none;
		}
 
		.navbar a.active {
			background-color: #04AA6D;
			color: white;
		}

		.navbar a:hover:not(.active) {
			background-color: #555;
			color: white;
		}

		@media only screen and (max-width: 700px) {
			
			.navbar {
				width: 100%;
				height: auto;
				position: relative;
			}
			
			.navbar a {float: left;}
				div.content {margin-left: 0;}
			}
		}
		
		@media only screen and (max-width: 400px) {
			
			.navbar a {
				text-align: center;
				float: none;
			}
		}
		
	</style>

<body style="font-family:Verdana;">

<div id="header" style="background-color:#f1f1f1;padding:15px;">

  <h1> AEFASDCA </h1>
  <h3 href="https://github.com/aefasdca/aefasdca-ct8" > Kod strony dostępny na GitHub </h3>
  
</div>

	<div style="overflow:auto">
		<div class="navbar">
			<a class="menuitem">The Walk</a>
			<a class="menuitem">Transport</a>
			<a class="menuitem">History</a>
			<a class="menuitem">Gallery</a>
		</div>

		<div class="main">
			<h2>The Walk</h2>
			<p>The walk from Monterosso to Riomaggiore will take you approximately two hours, give or take an hour depending on the weather conditions and your physical shape.</p>
			<img src="img_5terre.jpg" style="width:100%">
		</div>

		<div class="right">
			<h2>What?</h2>
			<p>Cinque Terre comprises five villages: Monterosso, Vernazza, Corniglia, Manarola, and Riomaggiore.</p>
			<h2>Where?</h2>
			<p>On the northwest cost of the Italian Riviera, north of the city La Spezia.</p>
			<h2>Price?</h2>
			<p>The Walk is free!</p>
		</div>
	</div>

</body>
</html>

