<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="format.css" type="text/css" />
</head>
<body>
<?php
include"slide.php";
?>
<div class="batas">
<div class="isi">
<h2>Buku Terbaru</h2>
<center>
<?php
$r=mysql_query("select *from buku order by id desc limit 4");
while($a=mysql_fetch_array($r)){
?>
<div class="buku">
	<a href=".?hal=detil_b&id=<?php echo $a['id'];?>"><img src="cover/<?php echo $a['cover'];?>" width="100%" height="250" /></a><p>
<center>
    <?php
	$id=$a['id'];
	$rr=mysql_query("select *from rating where id_b='$id'");
	$jr=mysql_num_rows($rr);
	if($jr==0){
		echo"Belum diberi rating";
	}else{
		$t=mysql_query("select sum(rat) as tot from rating where id_b='$id'");
		$y=mysql_fetch_array($t);
		$tot=$y['tot'];
		$rat=ceil($tot/$jr);
		for($i=1;$i<=$rat;$i++){
	?>
    <img src="img/bintang.png" />
    <?php }}?>
    </center></p>
</div>
<?php }?>
</center>
<table border="0" width="100%"><tr><td></td></tr></table>
<h2>Buku Paling Sering Dipinjam</h2>
<center>
<?php
$r=mysql_query("select *from buku order by pinjam desc limit 4");
while($a=mysql_fetch_array($r)){
?>
<div class="buku">
	<a href=".?hal=detil_b&id=<?php echo $a['id'];?>"><img src="cover/<?php echo $a['cover'];?>" width="100%" height="250" /></a><p>
<center>
    <?php
	$id=$a['id'];
	$rr=mysql_query("select *from rating where id_b='$id'");
	$jr=mysql_num_rows($rr);
	if($jr==0){
		echo"Belum diberi rating";
	}else{
		$t=mysql_query("select sum(rat) as tot from rating where id_b='$id'");
		$y=mysql_fetch_array($t);
		$tot=$y['tot'];
		$rat=ceil($tot/$jr);
		for($i=1;$i<=$rat;$i++){
	?>
    <img src="img/bintang.png" />
    <?php }}?>
    </center></p>
</div>
<?php }?>
</center>
<table border="0" width="100%"><tr><td></td></tr></table>
<h2>E-Book Paling Disukai</h2>
<center>
<?php
$r=mysql_query("select *from ebook order by suka desc limit 4");
while($a=mysql_fetch_array($r)){
?>
<div class="buku">
	<?php echo $a['nama'];?>
	<img src="ebook/<?php echo $a['cover'];?>" width="100%" height="200" /><p>
<center>
<a href="e.php?pdf=<?php echo $a['pdf'];?>" class="tombol" target="_blank">Baca</a> <a href=".?hal=detil_e&id=<?php echo $a['id'];?>" class="tombol">Detail</a>
</center></p>
</div>
<?php }?>
</center>
<table border="0" width="100%"><tr><td></td></tr></table>
<h2>Artikel Terkini</h2>
<table width="100%" border="0">
<?php
$r=mysql_query("select *from artikel order by id desc limit 2");
while($a=mysql_fetch_array($r)){
?>
  <tr>
    <td width="22%" rowspan="2" valign="top"><img src="artikel/<?php echo $a['gambar'];?>" width="100%" /></td>
    <td width="78%" height="20"><h3><?php echo $a['judul'];?></h3>
    <i><?php echo $a['tanggal'];?></i><br />
    <?php echo substr($a['isi'],0,250);?></td>
  </tr>
  <tr>
    <td><p><a href=".?hal=detil_a&id=<?php echo $a['id'];?>" class="tombol">Selengkapnya</a></p></td>
  </tr>
<?php }?>
</table>
</div>
</div>
</body>
</html>