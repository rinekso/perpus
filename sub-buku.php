<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="format.css" type="text/css" />
</head>
<style>
.kot{
	width:200px;
	float:left;
	margin:5px;
}
</style>
<body>
<div class="batas"><br /><br /><br /><br /><br />
<table class="kot" border="0">
  <tr>
    <td><h2 style="margin-bottom:0px;">Kategori</h2></td>
  </tr>
  <tr>
    <td><a href=".?hal=buku" class="link">Semua</a></td>
  </tr>
  <?php
  include"konek.php";
  $r=mysql_query("select *from kategori order by kat");
  while($a=mysql_fetch_array($r)){
  ?>
  <tr>
    <td><a href=".?hal=kat&t=kategori&kat=<?php echo $a['kat'];?>" class="link"><?php echo $a['kat'];?></a></td>
  </tr>
  <?php }?>
</table>
<table class="kot" border="0">
  <tr>
    <td><h2 style="margin-bottom:0px;">Penerbit</h2></td>
  </tr>
  <?php
  include"konek.php";
  $r=mysql_query("select *from penerbit order by kat");
  while($a=mysql_fetch_array($r)){
  ?>
  <tr>
    <td><a href=".?hal=kat&t=penerbit&kat=<?php echo $a['kat'];?>" class="link"><?php echo $a['kat'];?></a></td>
  </tr>
  <?php }?>
</table>
<table class="kot" border="0">
  <tr>
    <td><h2 style="margin-bottom:0px;">Pengarang</h2></td>
  </tr>
  <?php
  include"konek.php";
  $r=mysql_query("select *from pengarang order by kat");
  while($a=mysql_fetch_array($r)){
  ?>
  <tr>
    <td><a href=".?hal=kat&t=pengarang&kat=<?php echo $a['kat'];?>" class="link"><?php echo $a['kat'];?></a></td>
  </tr>
  <?php }?>
</table>

</div>
</body>
</html>