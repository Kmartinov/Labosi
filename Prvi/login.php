<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>ZKD</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="wrapper">
  <div class="header">
	<div class="logo">
		<img src="images/logo.png">
	</div>
	
	<div class="button">
	    <a href="login.html">
			<button type="button" class="btnLogout" >Odjava</button>
		</a>
	</div>
	
	<div class="user">
    	<h2>      
			<?php 
				$ime = $_GET['username']; 
				if ($ime == "") {
					echo 'Pozdrav!';
				}
				else {
					echo 'Pozdrav, '. $ime .'!'; 
				}
			?>
		</h2> 
	</div>
  </div>

<div class="content">
    <div class="menu">
		<div class="menu-item">
			<a href="#">Stavka</a>
		</div>
	  
		<div class="menu-item">
			<a href="#">Stavka</a>
		</div>
	  
		<div class="menu-item">
			<a href="#">Stavka</a>
		</div>
	  
		<div class="menu-item">
			<a href="#">Stavka</a>
		</div>
    </div>

    <div class="content-right">
		 
		<h3><a name="1">Osobni podaci:</a></h3>
		 
		<p>Martinović Kristian; 15.10.1992</p>
		 
		<h3><a name="2">Školovanje:</a></h3>
		 
		<p>Osnovna škola Rugvica </br>Srednja škola: Tehnička škola Ruđera Boškovića </br>Fakultet: TVZ</p>

        <h3><a name="3">Radno iskustvo:</a></h3>

        <p>MSAN,Svijet Medija,Amis,Njuskalo.hr</p>

        <h3><a name="4">Znanja i vještine:</a></h3>

        <p>Office Paket - Odlično</br>
			Movie Maker - Odlično </br>
			Google Sketch Up - Odlično </br>
			Html - Vrlo dobro </br>
			CSS - Vrlo dobro </br>
			C - Dobro </br>
			Instalacija i konfiguriranje OS-a - Odlično </br>
			Adobe Photoshop - Vrlo Dobro </br>
			Jezici: Njemački - napredno; Engleski - napredno </br>
			Mrežni servisi i usluge - Vrlo dobro </br>
		</p>		 
    </div>
</div>

<div class="site-footer">
	<p>Copyright &copy; ZKD, 2014</p>
</div>
</div>
</body>
</html>