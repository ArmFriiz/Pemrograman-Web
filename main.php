<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="CSS/Style.css">

	<title>Kalkulator Online</title>
</head>
<body>
<!-- Header -->
	<div class="Header" align="center">
		<header>
			<strong>
				<font size="5" face="Courier New, Courier, mono">
					Kalkulator Online
				</font>
			</strong>
			<a href="PHP/tampilan.php" style="float:right;">Report</a>
		</header>
	</div>

<!-- Isi -->
	<div class="main">

<!-- Web -->
		<div class="web">
<!-- Kalkulator -->
		<div class="item">
	<pre>
		<center><h2>Kalkulator</h2></center>
	</pre>
			<div class="Kalkulator">
				<?php
					include("HTML/Kalkulator.html")
				?>
 			</div>
		</div>

<!-- Keterangan -->
		<div class="item">
		<div class="keterangan">
	<pre>			
	Tata Cara Penggunaan Kalkulator
	 1. User memasukkan nilai pertama pada kalkulator
	 2. User memilih perhitungan aritmatika yang akan dilakukan
	 3. User memasukkan nilai kedua pada kalkulator
	</pre>
		</div>
		</div>
		</div>

<!-- Sub Web -->
		<div class="subweb">
<!-- Kalender -->
		<div class="item">
	<pre>
		<center><h2>Kalender</h2></center>
			<div class="Kalender">
				<?php
					include("PHP/Pweb Kalender.php")
				?>			
	</pre>
			</div>
		</div>
		</div>
	
	</div>

<br><br><br>
<!-- Footer -->
	<div class="Footer">
		<footer>
			<?php
				include("HTML/ftr.html")
			?>
		</footer>
	</div>

</body>
</html>

<style type="text/css">
html, body{
	background-image: url("Source/bg.jpg");
	background-size: cover;
	height: 100%;
	width: 100%;
	background-position: center;
}
</style>