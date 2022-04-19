<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="../format.css" type="text/css" />
</head>
<body>
<h2>Tambah Artikel</h2>
<form action="b.php?tag=a_t" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="70%" border="0">
    <tr>
      <td width="21%">Judul</td>
      <td width="79%"><label>
        <input name="judul" required="required" type="text" class="text" id="judul" />
      </label></td>
    </tr>
    <tr>
      <td>Gambar</td>
      <td><input name="gambar" required="required" type="file" class="text" id="gambar" /></td>
    </tr>
    <tr>
      <td>Isi</td>
      <td><label>
        <textarea name="isi" required="required" cols="45" rows="5" class="textarea" id="isi"></textarea>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input name="button" type="submit" class="tombol" id="button" value="Tambah" />
      </label></td>
    </tr>
  </table>
</form>
<h2>Atur Artikel</h2>
<table width="100%" border="0">
<?php
$r=mysql_query("select *from artikel order by id desc");
while($a=mysql_fetch_array($r)){
?>
  <tr>
    <td width="22%" rowspan="2" valign="top"><img src="../artikel/<?php echo $a['gambar'];?>" width="100%" /></td>
    <td width="78%" height="20"><h3><?php echo $a['judul'];?></h3>
    <i><?php echo $a['tanggal'];?></i><br />
    <?php echo substr($a['isi'],0,250);?></td>
  </tr>
  <tr>
    <td><a href=".?hal=detil_a&id=<?php echo $a['id'];?>" class="tombol">Selengkapnya</a><a href=".?hal=ubah_a&id=<?php echo $a['id'];?>" class="tombol">Ubah</a><a href="b.php?tag=a_h&id=<?php echo $a['id'];?>" class="tombol" onclick="return confirm('apa anda yakin?')">Hapus</a></td>
  </tr>
<?php }?>
</table>
</body>
</html>