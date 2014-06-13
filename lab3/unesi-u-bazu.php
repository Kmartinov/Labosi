<?php
$con = mysqli_connect("localhost","root","lozinka123","zkd");
if (mysqli_connect_errno()) {
	echo "Ne mogu se spojiti na MySQL server: " . mysqli_connect_error();
}

$name = mysqli_real_escape_string($con, $_POST['name']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$gender = mysqli_real_escape_string($con, $_POST['gen']);
$phone = mysqli_real_escape_string($con, $_POST['mobitel']);
$address = mysqli_real_escape_string($con, $_POST['adresa']);
$city = mysqli_real_escape_string($con, $_POST['mjesto']);

$sql="INSERT INTO pacijenti (ime, prezime, spol, datumrodenja, mobitel, adresa, mjesto)
VALUES ('$name', '$lastname', '$gender', '', '$phone', '$address', '$city')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?> 