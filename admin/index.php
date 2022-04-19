<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AdminPerpus.net</title>
<link rel="shortcut icon" href="../img/icon.png" />
<link rel="stylesheet" href="../format.css" type="text/css" />
</head>
<script src="../js/jquery-2.1.1.js"></script>
<script>
function nontif(){
	$('.non').load("non.php");
	$('.non2').load("non2.php");
	setTimeout("nontif()",0);
}
nontif();
</script>
<body>
<?php
session_start();
if(!isset($_SESSION['admin'])){
	header("location:login.php");
}
include"../konek.php";
?>
<div id="menu_atas">
	<div class="batas">
    	<a href="." class="menu_link">HOME</a>
    	<a href=".?hal=buku" class="menu_link">BUKU</a>
    	<a href=".?hal=ebook" class="menu_link">E-BOOK</a>
    	<a href=".?hal=artikel" class="menu_link">ARTIKEL</a>
    	<a href="nontif.php?t=member" class="menu_link">MEMBER
        <span class="non"></span>
        </a>
    	<a href="nontif.php?t=pinjam" class="menu_link">PEMINJAMAN
        <span class="non2"></span>
        </a>
   		<a href="a.php?tag=keluar" class="menu_link">KELUAR</a>
    </div>
</div>
<div id="menu_atas2">
	<div class="batas"><img src="../img/icon.png" class="icon" /><span style="float:left; font-size:18px; margin-top:10px;"><?php echo date("d-F-Y");?></span>
    <a href=".?hal=tamu" class="masuk">Buku Tamu</a>
    </div>
</div>
<div id="men"></div>
<div class="batas">
<?php
$hal=@$_GET['hal'];
if(empty($hal)){
	include"home.php";
}else{
	include"$hal.php";
}
?>
</div>
</body>
</html>