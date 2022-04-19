<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
mysql_query("update pinjam set status='1'");
?>
<h2>Peminjaman</h2>
<a href=".?hal=pinjam" class="tombol" style="float:left;">Buku Yang Dipinjam</a>
<a href=".?hal=pinjam&p=laporan" class="tombol" style="float:left;">Laporan Pinjam</a>
<a href=".?hal=pinjam&p=denda" class="tombol" style="float:left;">Denda</a>
<a href=".?hal=pinjam&p=pinjam_l" class="tombol" style="float:left;">Pinjam</a>
<table width="100%" border="0"><tr><td></td></tr></table>
<?php
$p=@$_GET['p'];
if(empty($p)){
	include"pinjam_s.php";
}else{
	include"$p.php";
}
?>
</body>
</html>