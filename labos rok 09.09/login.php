<?php

session_start();

if(empty($_GET["username"]))
	die("Korisnicko ime mora biti uneseno. Kliknite <a href=\"login.html\">ovdje</a> za login.");

if(empty($_GET["password"]))
	die("Lozinka mora biti unesena. Kliknite <a href=\"login.html\">ovdje</a> za login.");

$username=$_GET["username"];
$pass=$_GET["password"];

$konekcija=mysqli_connect("localhost","root","","data");
mysqli_set_charset($konekcija, "utf8");
// provjeri konekciju
if (mysqli_connect_errno())
	{
		echo "Došlo je do greške prilikom spajanja na bazu podataka: " . mysqli_connect_error(); 
		//ispiši grešku ukoliko konekcija nije uspostavljena
	}

$query = mysqli_query($konekcija, "SELECT kor_ime, lozinka FROM korisnici WHERE kor_ime='$username'");
$row = mysqli_fetch_row($query);

$korisnicko_ime=$row[0];
$zaporka=$row[1];

$_SESSION['user'] = $_GET['username'];

if( ($username==$korisnicko_ime && $pass==$zaporka))
	{
		header("Location: index.html?username=".urlencode($korisnicko_ime));
	}
	else
	{
		die("Netocni uneseni podatci. Klikni <a href=\"login.html\">ovdje</a> za login ili 
			<a href=\"registration.html\">ovdje</a> za registraciju.");
	}
?>