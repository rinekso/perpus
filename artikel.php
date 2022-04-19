<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="format.css" type="text/css" />
</head>
<body>
<div class="batas">
<div class="isi">
<h2>Artikel</h2>
<table width="100%" border="0">
<?php
$batas=5;
$p=@$_GET['p'];
if(empty($p)){
	$p=1;
}
$of=$batas*($p-1);
$r=mysql_query("select *from artikel order by id desc limit $of,$batas");
$jul=mysql_num_rows($r);
if($jul==0){
	echo"Data tidak ada";
}else{
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
<table width="100%" border="0"><tr><td></td></tr></table><br /><br />
<center>
<?php
$y=mysql_query("select *from artikel order by id desc");
$je=mysql_num_rows($y);
$jum=ceil($je/$batas);
for($u=1;$u<=$jum;$u++){
	if($u==$p){
		$cl="p_s";
	}else{
		$cl="p";
	}
?>
<a href=".?hal=artikel&p=<?php echo $u;?>&c=<?php echo $c;?>" class="<?php echo $cl;?>"><?php echo $u;?></a>
<?php }?>
</center>
<?php }?>
</div>
</div>
</body>
</html>