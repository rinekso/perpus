<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<div class="batas">
<div class="isi">
<?php
$tipe=$_GET['t'];
$kat=$_GET['kat'];
?>
<h2 style="text-transform:capitalize;"><?php echo $tipe;?> <?php echo $kat;?></h2>
<center>
<?php
$batas=8;
$p=@$_GET['p'];
if(empty($p)){
	$p=1;
}
$of=$batas*($p-1);
$r=mysql_query("select *from buku where $tipe='$kat' order by id desc limit $of,$batas");
$jul=mysql_num_rows($r);
if($jul==0){
	echo"Data tidak ada";
}else{
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
<table width="100%" border="0"><tr><td></td></tr></table><br /><br />
<center>
<?php
$y=mysql_query("select *from buku where $tipe='$kat'");
$je=mysql_num_rows($y);
$jum=ceil($je/$batas);
for($u=1;$u<=$jum;$u++){
	if($u==$p){
		$cl="p_s";
	}else{
		$cl="p";
	}
?>
<a href=".?hal=kat&p=<?php echo $u;?>&kat=<?php echo $kat;?>&t=<?php echo $tipe;?>" class="<?php echo $cl;?>"><?php echo $u;?></a>
<?php }?>
</center>
<?php }?>
</div>
</div>
</body>
</html>