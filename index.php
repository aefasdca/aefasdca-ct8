<!DOCTYPE html>
<html>
<head>

	<!-- <base href="" target="_blank"> -->
	<meta charset="UTF-8">
	<title> AEFASDCA </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style id="responsive content">
	
		#whole-content {
			height: 70%;
			display: block;
			float: right;
			position: relatve;
		}

		* {
			box-sizing: border-box;
		}

		.main {
			margin-left: 15%;
			float: left;
			width: 65%;
			padding: 0 20px;
			overflow: hidden;
			position: auto;
			display: block;
		}

		.right {
			background-color: lightblue;
			float: left;
			width: 20%;
			padding: 10px 15px;
			margin-top: 7px;
			display: block;
		}

		@media only screen and (max-width:800px) {
			/* For tablets: */
  
			.main {
				margin-left: 0%
				width: 80%;
				padding: 0;
			}
	
			.right {
				width: 80%;
			}
  
		}

		@media only screen and (max-width:500px) {
			/* For mobile phones: */
  
			.main, .right {
				margin-left: 0%
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

		#navbar {
			width: 15%;
			background-color: #f1f1f1;
			position: fixed;
			height: 100%;
		}

		#navbar a {
			text-align: left;
			display: block;
			width: 100%;
			color: black;
			padding: 16px;
			text-decoration: none;
			float: none;
		}
 
		#navbar a.active {
			background-color: #04AA6D;
			color: white;
		}

		#navbar a:hover:not(.active) {
			background-color: #555;
			color: white;
		}

		@media only screen and (max-width: 800px) {
			
			#navbar {
				float: left;
				width: 100%;
				height: auto;
				position: static;
			}
			
			#navbar a {
				float: left;
				width: 25%;
			}
			
		}
		
		@media only screen and (max-width: 500px) {
			
			.navbar a {
				text-align: center;
				float: none;
			}
		}
		
	</style>

	<style id="responsive header">
	
		#header {
			position: static;
			top: 5px;
			display: block;
			width: 100%;
			float: top;
		}
		
		
		#source {
			display: block;
		}
	
	</style>

<body style="font-family:Verdana;">

	<div id="header" style="background-color:#f1f1f1;padding:15px;height:30%;">
		<h1> AEFASDCA </h1>
		<h3 id="source" ><a href="https://github.com/aefasdca/aefasdca-ct8" > Kod strony dostępny na GitHub </a></h3>
	</div>

	<div id="whole-content" style="overflow:auto">
		<div id="navbar">
			<a id="n1">  The Walk</a>
			<a id="n2">  Transport</a>
			<a id="n3">  History</a>
			<a id="n4">  Gallery</a>
		</div>
	
		<div id="main-content">
	
		<div class="main">
			<h2>The Walk</h2>
			<p>The walk from Monterosso to Riomaggiore will take you approximately two hours, give or take an hour depending on the weather conditions and your physical shape.</p>
			<img src="img_5terre.jpg" style="width:100%">
		</div>

		<div class="right">
			<h2>Data Powstania Projektu</h2>
			<p> 08.02.2022 </p>
			<h2>Cel Powstania Projektu</h2>
			<p>Strona na przedmioty: <br> Aplikacje Internetowe <br> Projektowanie Stron WWW </p>
			<h2>Założenia Projektu</h2>
			<p>Strona zawierać będzie zbiór wszystkich zadań na Aplikacje Internetowe oraz Projektowanie Stron WWW.</p>
			<p>Strona zawierać będzie zbiór wszystkich zadań na Aplikacje Internetowe oraz Projektowanie Stron WWW.</p>
			<p>Strona zawierać będzie zbiór wszystkich zadań na Aplikacje Internetowe oraz Projektowanie Stron WWW.</p>
			<p>Strona zawierać będzie zbiór wszystkich zadań na Aplikacje Internetowe oraz Projektowanie Stron WWW.</p>
			<p>Strona zawierać będzie zbiór wszystkich zadań na Aplikacje Internetowe oraz Projektowanie Stron WWW.</p>
		</div>
		
		</div>
	</div>
	
	<script>
	
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
			
			if (window.innerWidth > 800) {
			
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				
					document.getElementById("header").style.position = "none";
					document.getElementById("source").style.display = "none";
					document.getElementById("navbar").style.top = "0";
					document.getElementById("navbar").style.left = "0";
					document.getElementById("navbar").style.position = "float";
					document.getElementById("navbar").style.width = "100%";
					document.getElementById("navbar").style.height = "8%";
					document.getElementById("n1").style.float = "left";
					document.getElementById("n1").style.width = "25%";
					document.getElementById("n1").style.textAlign = "center";
					document.getElementById("n2").style.float = "left";
					document.getElementById("n2").style.width = "25%";
					document.getElementById("n2").style.textAlign = "center";
					document.getElementById("n3").style.float = "left";
					document.getElementById("n3").style.width = "25%";
					document.getElementById("n3").style.textAlign = "center";
					document.getElementById("n4").style.float = "left";
					document.getElementById("n4").style.width = "25%";
					document.getElementById("n4").style.textAlign = "center";
					document.getElementById("main-content").style.top = "10%";
				
				} else {
				
					document.getElementById("source").style.display = "block";
					document.getElementById("header").style.position = "static";
					document.getElementById("navbar").style.top = "24%";
					document.getElementById("navbar").style.left = "none";
					document.getElementById("navbar").style.position = "fixed";
					document.getElementById("navbar").style.width = "15%";
					document.getElementById("navbar").style.height = "100%";
					document.getElementById("n1").style.float = "none";
					document.getElementById("n1").style.width = "100%";
					document.getElementById("n1").style.textAlign = "left";
					document.getElementById("n2").style.float = "none";
					document.getElementById("n2").style.width = "100%";
					document.getElementById("n2").style.textAlign = "left";
					document.getElementById("n3").style.float = "none";
					document.getElementById("n3").style.width = "100%";
					document.getElementById("n3").style.textAlign = "left";
					document.getElementById("n4").style.float = "none";
					document.getElementById("n4").style.width = "100%";
					document.getElementById("n4").style.textAlign = "left";
					document.getElementById("main-content").style.top = "10%";
					
				}
			}			
			}

	</script>



</body>
</html>

