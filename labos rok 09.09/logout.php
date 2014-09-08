<?php
	session_start();
	session_destroy();
	echo "Odlogirali ste se. Preusmjerit cemo vas na <a href=login.html>pocetnu stranicu</a>";
?>