<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>ZKD</title>
  <link rel="stylesheet" href="style.css" />
  <script type="text/javascript">

</script>
</head>
<body>
<?php  
	session_start();
	
    $ime = $_GET['username'];
	$lozinka = $_GET['password'];
	$con = mysqli_connect("localhost","root","lozinka123","zkd");
    if (mysqli_connect_errno()) {
		echo "Ne mogu se spojiti na MySQL server: " . mysqli_connect_error();
    }
	mysqli_query($con,"SET NAMES 'utf8'");
	mysqli_query($con,"SET CHARACTER_SET 'utf8'");
	
	$result = mysqli_query($con,"SELECT * FROM korisnici");
	
	$num=0;
	
	while($row = mysqli_fetch_array($result)) { 
		if($ime==$row['username'] && $lozinka==$row['password']){
            $num=1;
		} 
	} 
	
	if($num){		
	}
	else {
		echo "
			<script type='text/javascript'>
				alert('Pogrešno korisničko ime ili lozinka, pokušajte ponovno!');
				window.location = 'login.html';
			</script>";
	}
					
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
			if($num){
				echo 'Pozdrav, '. $ime .'!'; 
			}
			else {
				echo "
					<script type='text/javascript'>
						alert('Pogrešno korisničko ime ili lozinka, pokušajte ponovno!');
						window.location = 'login.html';
					</script>";
			}

			mysqli_close($con);
							
			$_SESSION['session'] =  $ime;
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