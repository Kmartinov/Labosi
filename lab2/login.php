<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>ZKD</title>
  <link rel="stylesheet" href="style.css" />
  <script type="text/javascript">
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
</script>
</head>
<body>
<?php  
	session_start();
	
	$name='kiki';
	$pass='kiki123';
    $ime = $_GET['username'];
	$lozinka = $_GET['password'];
	if($ime != $name && $lozinka != $pass){
	echo "
	<script type='text/javascript'>
		alert('Pogrešno korisničko ime ili lozinka, pokušajte ponovno!');
		window.location = 'login.html';
    </script>";
	}
	$_SESSION['session'] =  $ime;					
?>
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
			<a href="pacijenti.php">Pacijenti</a>
		</div>
	  
		<div class="menu-item">
			<a href="unos-pacijenta.php">Unos pacijenta</a>
		</div>
	  
		<div class="menu-item">
			<a href="#">Stavka</a>
		</div>
	  
		<div class="menu-item">
			<a href="#">Stavka</a>
		</div>
    </div>

    <div class="content-right">
	
		<div>
			<h3><a href="#" onclick="toggle_visibility('slika');" style="display: block;">Reklama</a></h3>
		</div>
		
		<div id="slika" style="display: none;">
			<img src="images/pioneer.png" />
		</div>
		 
		<div>
			<h3><a href="#" onclick="toggle_visibility('osobniPodaci');">Osobni podaci:</a></h3>
		</div>
		
		<div id="osobniPodaci" style="display: block;">
			<p>Martinović Kristian; 15.10.1992</p>
		</div>
		
		<div>
		<h3><a href="#" onclick="toggle_visibility('skolovanje');">Školovanje:</a></h3>
		</div>
		
		<div id="skolovanje" style="display: block;">
			<p>Osnovna škola Rugvica </br>Srednja škola: Tehnička škola Ruđera Boškovića </br>Fakultet: TVZ</p>
		</div>
		
		<div>
        <h3><a href="#" onclick="toggle_visibility('radnoIskustvo');">Radno iskustvo:</a></h3>
		</div>
		
        <div id="radnoIskustvo" style="display: block;">
			<p>MSAN,Svijet Medija,Amis,Njuskalo.hr</p>
		</div>

		<div>
        <h3><a href="#" onclick="toggle_visibility('znanjaIVjestine');">Znanja i vještine:</a></h3>
		</div>
		
		<div id="znanjaIVjestine" style="display: block;">
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
</div>

<div class="site-footer">
	<p>Copyright &copy; ZKD, 2014</p>
</div>
</div>
</body>
</html>