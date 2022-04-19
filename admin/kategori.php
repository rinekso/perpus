<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="../format.css" type="text/css" />
<body>
<div id="batas">
<h2>Kategori</h2>
<form id="form1" name="form1" method="post" action="b.php?tag=k_t&t=kategori">
  <label>
    Tambah kategori:
    <input name="kat" type="text" class="text" id="kat" />
  </label>
  <label>
    <input name="button" type="submit" class="tombol" id="button" value="Tambah" />
  </label>
</form>
<h2>Tambah Kategori</h2>
<table width="65%" border="0">
<?php
$r=mysql_query("select *from kategori order by kat");
$i=1;
while($a=mysql_fetch_array($r)){
?>
  <tr>
    <td width="5%"><?php echo $i;?></td>
    <td width="43%"><?php echo $a['kat'];?></td>
    <td width="52%"><a href="b.php?tag=k_h&id=<?php echo $a['id'];?>&t=kategori" onclick="return confirm('Semua buku yang berhubungan dengan kategori <?php echo $a['kat'];?> akan terhapus. Apa anda yakin?')" class="link">Hapus</a></td>
  </tr>
<?php $i++; }?>
</table>
</div>
</body>
</html>