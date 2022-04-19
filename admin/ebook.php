<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<h2>E-Book</h2>
<a href=".?hal=ebook" class="tombol" style="float:left;">Daftar E-Book</a>
<a href=".?hal=ebook&p=tambah_e" class="tombol" style="float:left;">Tambah E-Book</a>
<table width="100%" border="0"><tr><td></td></tr></table>
<?php
$p=@$_GET['p'];
if(empty($p)){
	include"daftar_e.php";
}else{
	include"$p.php";
}
?>
</body>
</html>