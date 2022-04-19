<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<div class="batas">
<div class="isi">
<h2>E-Book</h2>
<center>
<?php
$batas=8;
$p=@$_GET['p'];
if(empty($p)){
	$p=1;
}
$of=$batas*($p-1);
$r=mysql_query("select *from ebook order by id desc limit $of,$batas");
$jul=mysql_num_rows($r);
if($jul==0){
	echo"Data tidak ada";
}else{
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
<table width="100%" border="0"><tr><td></td></tr></table><br /><br />
<center>
<?php
$y=mysql_query("select *from ebook order by id desc");
$je=mysql_num_rows($y);
$jum=ceil($je/$batas);
for($u=1;$u<=$jum;$u++){
	if($u==$p){
		$cl="p_s";
	}else{
		$cl="p";
	}
?>
<a href=".?hal=ebook&p=<?php echo $u;?>" class="<?php echo $cl;?>"><?php echo $u;?></a>
<?php }?>
</center>
<?php }?>
</div>
</div>
</body>
</html>