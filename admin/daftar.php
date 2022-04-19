<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<h2>Daftar Buku</h2>
<table width="80%" border="0">
<?php
$r=mysql_query("select *from buku order by judul");
$i=1;
while($a=mysql_fetch_array($r)){
?>
  <tr>
    <td width="20"><?php echo $i;?></td>
    <td width="40%"><?php echo $jud=$a['judul'];?></td>
    <td width="44"><a href=".?hal=detil_b&id=<?php echo $a['id'];?>" class="link">Detail</a></td>
    <td width="44"><a href=".?hal=ubah_b&id=<?php echo $a['id'];?>" class="link">Ubah</a></td>
    <td width="44"><a href="b.php?tag=b_h&id=<?php echo $a['id'];?>" onclick="return confirm('apa anda yakin?')" class="link">Hapus</a></td>
    <td align="right">Jumlah Buku = <?php
    $t=mysql_query("select *from jumlah where buku='$jud'");
	echo $j=mysql_num_rows($t);
	?></td>
  </tr>
<?php $i++;}?>
</table>
</body>
</html>