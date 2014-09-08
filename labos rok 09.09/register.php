<?php

$konekcija=mysqli_connect("localhost","root","","data");

mysqli_set_charset($konekcija, "utf8");
if (mysqli_connect_errno())
	{
		echo "Došlo je do greške prilikom spajanja na bazu podataka: " . mysqli_connect_error(); 
		//greška ukoliko se nije uspijesno spojeno na bazu
	}

$username = $_GET["kor_ime"];
$password = $_GET["lozinka"];
$realname = $_GET["pravo_ime"];

$query = mysqli_query($konekcija, "SELECT kor_ime FROM korisnici WHERE kor_ime='$username'");

if (mysqli_num_rows($query) != 0)
	{
		echo "Korisnicko ime je zauzeto. Vratite se na <a href=\"registration.html\">formu 
		za registraciju</a> i izaberite drugo korisnicko ime.";
	}
	else
	{
		$query = mysqli_query($konekcija, "INSERT INTO korisnici(kor_ime, lozinka, pravo_ime) VALUES('$username', 
			'$password', '$realname')");
		echo "Uspjesno ste se registrirali!";
		header( "refresh:5;url=login.html" );
	}
?>