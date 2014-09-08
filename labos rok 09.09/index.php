<!DOCTYPE html>
<?php
session_start();

if(isset($_SESSION['views']))
$_SESSION['views']=$_SESSION['views']+1;
else
$_SESSION['views']=1;
echo "Views=". $_SESSION['views'];
?> 
<html>
	<head>
		<meta charset="UTF-8">
		<title>ZKD j.d.o.o.</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/grid.css" />
		<link rel="stylesheet" href="css/normalize.css" />
	</head>
	<body>
		<header>
			<img class="logo" src="img/logo.png" alt="Zdravko Dren logo">
			<div class="button_odjava">
			<label><span class="label_color"><?php echo $_GET['KORISNICKO_IME']; ?></span></label>
						<a href="logout.php"><button>ODJAVA</button></a>
						</div>
					</header>
					<nav>
						<ul>
							<li><a href="#">Menu</a></li>
							<li><a href="#">Menu</a></li>
							<li><a href="#">Menu</a></li>
							<li><a href="#">Menu</a></li>
							<li><a href="#">Menu</a></li>
			</ul>
		</nav>
		<div class="content">
			<div class="content_info">
				<a name="osobnipodaci"><h2>OSOBNI PODACI</h2></a>
				<div id="osobnipodaci">
				<p>Ime i prezime: Kristian Martinović</p>
				<p>Mjesto i datum rođenja: Munchen, Republika Njemačka, 15.10.1992</p></div>
				<a name="skolovanjepodaci"><h2>PODACI O ŠKOLOVANJU</h2></a>
				<div id="skolovanjepodaci"><p>Osnovna škola: Osnovna škola Rugvica</p>
				<p>Srednja škola: Tehnička škola Ruđera Boškovića</p>
				<p>Fakultet: Tehničko veleučilište u Zagrebu</p></div>
				<a name="radpodaci"><h2>PODACI O RADNOM ISKUSTVU</h2></a>
				<div id="radpodaci"><p>MSAN - servis računala</p>
				<p>Europatrade - servis računala i televizora</p></div>
				<a name="znanja"><h2>ZNANJA I VJEŠTINE</h2></a>
				<div id="znanja"><p>Engleski jezik,Njemački jezik,poznavanje Windows OS-a, MS Office paket, programski jezici C, C#, C++ i Java, hardverski dio računala</p></div>
			</div>
		</div>
		<footer>
			<span class="footer_text">COPYRIGHT ZKD, 2014</span>
		</footer>
	</body>
</html>