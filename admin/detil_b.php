<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<div class="batas">
<h2>Detail Buku</h2>
<?php
$id=$_GET['id'];
$r=mysql_query("select *from buku where id='$id'");
$a=mysql_fetch_array($r);
?>
<table width="80%" border="0">
  <tr>
    <td width="33%" rowspan="9" valign="top"><img src="../cover/<?php echo $a['cover'];?>" style="max-height:300px;" /></td>
    <td width="16%">Judul</td>
    <td width="51%"><?php echo $a['judul'];?></td>
  </tr>
  <tr>
    <td>Kategori</td>
    <td><?php echo $a['kategori'];?></td>
  </tr>
  <tr>
    <td>Penerbit</td>
    <td><?php echo $a['penerbit'];?></td>
  </tr>
  <tr>
    <td>Pengarang</td>
    <td><?php echo $a['pengarang'];?></td>
  </tr>
  <tr>
    <td>Sinopsis</td>
    <td><?php echo $a['sinopsis'];?></td>
  </tr>
  <tr>
    <td>Jumlah</td>
    <td><?php echo $a['jumlah'];?></td>
  </tr>
  <tr>
    <td>Lokasi</td>
    <td><?php echo $a['lokasi'];?></td>
  </tr>
  <tr>
    <td>Harga</td>
    <td><?php echo $a['harga'];?></td>
  </tr>
  <tr>
    <td></td>
    <td><p><a href=".?hal=ubah_b&id=<?php echo $a['id'];?>" class="tombol">Ubah</a> <a href="b.php?tag=b_h&id=<?php echo $a['id'];?>" onclick="return confirm('apa anda yakin?')" class="tombol">Hapus</a></p></td>
  </tr>
</table>
</div>
</body>
</html>