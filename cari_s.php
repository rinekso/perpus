<?php
include"konek.php";
$c=$_POST['c'];
$tip=$_POST['tip'];
header("location:.?hal=cari&c=$c&tip=$tip");
?>