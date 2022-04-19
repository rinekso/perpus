<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<div class="batas">
<div class="isi">
<h2>Detail E-Book</h2>
<?php
$id=$_GET['id'];
$r=mysql_query("select *from ebook where id='$id'");
$a=mysql_fetch_array($r);
?>
<table width="100%" border="0">
  <tr>
    <td width="14%">Nama</td>
    <td colspan="3"><?php echo $a['nama'];?></td>
    </tr>
  <tr>
    <td>Ukuran</td>
    <td colspan="3"><?php echo $a['besar'];?> KB</td>
    </tr>
  <tr>
    <td>Keterangan</td>
    <td colspan="3"><?php echo $a['ket'];?></td>
    </tr>
  <tr>
    <td>Dibaca</td>
    <td>
    <?php
	$y=mysql_query("select *from look where id_e='$id'");
	echo $j=mysql_num_rows($y);
	?> Kali
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><p><a href="e.php?pdf=<?php echo $a['pdf'];?>" class="tombol" target="_blank">Baca</a></p></td>
    <td width="50" valign="middle" style="background:#92FE6D; font-size:20px; font-family:Arial; padding:0px;">
	<a href="a.php?tag=like&id=<?php echo $a['id'];?>"><img src="img/like.png" title="Like" width="30" style="float:left;" /></a>
    <?php
	$y=mysql_query("select *from suka where id_e='$id' and ket='y'");
	echo $j=mysql_num_rows($y);
	?>
	</td>
    <td width="50" valign="middle" style="background:#92FE6D; font-size:20px; font-family:Arial; padding:0px;">
    <a href="a.php?tag=dislike&id=<?php echo $a['id'];?>"><img src="img/dislike.png" title="Dislike" width="30" style="float:left; margin:0px;" /></a>
    <?php
	$y=mysql_query("select *from suka where id_e='$id' and ket='n'");
	echo $j=mysql_num_rows($y);
	?>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
</div>
</body>
</html>