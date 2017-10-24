<!DOCTYPE html>
<html>
<head>
	<title>ALI ILHAM</title>
</head>
<body>
<?php
require_once 'coba.php';
$mobil = new mobil('TOYOTA','BIRU','RP:1.000.000.000','2000 CC');
 	echo "<center>mereknya : ".$mobil->get_merek();
 	echo "<br>warna Nya : ".$mobil->get_warna();
 	echo "<br>harganya: ".$mobil->get_harga();
 	echo "<br>CC Nya : ".$mobil->get_cc();
 	echo "<br>";
?>
</body>
</html>