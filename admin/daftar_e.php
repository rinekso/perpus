<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<h2>Daftar E-Book</h2>
<table width="65%" border="0">
  <tr align="center" bgcolor="#83c92b" style="color:#FFF;">
    <td>No</td>
    <td>Nama</td>
    <td>Ukuran</td>
  </tr>
  <?php
  $r=mysql_query("select *from ebook order by id desc");
  $i=1;
  while($a=mysql_fetch_array($r)){
  ?>
  <tr>
    <td width="5%"><?php echo $i;?></td>
    <td><?php echo $a['nama'];?></td>
    <td width="25%"><?php echo number_format($a['besar']) ;?> KB</td>
    <td width="25"><a href=".?hal=ebook&p=detil_e&id=<?php echo $a['id'];?>" class="link">Detail</a></td>
    <td width="25"><a href="b.php?tag=e_h&id=<?php echo $a['id'];?>" onclick="return confirm('Apa anda yakin?')" class="link">Hapus</a></td>
    <td width="25"><a href=".?hal=ebook&p=ubah_e&id=<?php echo $a['id'];?>" class="link">Ubah</a></td>
  </tr>
  <?php $i++;}?>
</table>
</body>
</html>