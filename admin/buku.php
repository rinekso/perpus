<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<h2>Buku</h2>
<a href=".?hal=buku" class="tombol" style="float:left;">Daftar Buku</a>
<a href=".?hal=buku&p=tambah" class="tombol" style="float:left;">Tambah Buku</a>
<a href=".?hal=buku&p=jumlah" class="tombol" style="float:left;">Tambah Jumlah Buku</a>
<a href=".?hal=buku&p=kategori" class="tombol" style="float:left;">Kategori</a>
<a href=".?hal=buku&p=penerbit" class="tombol" style="float:left;">Penerbit</a>
<a href=".?hal=buku&p=pengarang" class="tombol" style="float:left;">Pengarang</a>
<table width="100%" border="0"><tr><td></td></tr></table>
<?php
$p=@$_GET['p'];
if(empty($p)){
	include"daftar.php";
}else{
	include"$p.php";
}
?>
</body>
</html>