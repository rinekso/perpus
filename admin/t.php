<?php
$t=@$_GET['tag'];
include"../konek.php";
$nama="slide$t";
session_start();
move_uploaded_file($_FILES['gam']['tmp_name'],"../img/$nama.png");
header("location:.?hal=tampil");
?>