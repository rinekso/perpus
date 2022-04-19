<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<h2>Ubah E-Book</h2>
<?php
$id=$_GET['id'];
$r=mysql_query("select *from ebook where id='$id'");
$a=mysql_fetch_array($r);
?>
<form action="b.php?tag=e_u" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="70%" border="0">
    <tr>
      <td width="21%">Nama</td>
      <td width="79%"><label>
        <input name="nama" value="<?php echo $a['nama'];?>" required="required" type="text" class="text" id="judul" />
      </label></td>
    </tr>
    <tr>
      <td valign="bottom">Cover</td>
      <td valign="bottom"><img src="../ebook/<?php echo $a['cover'];?>" width="60" height="80" style="margin:5px;" /><br />
        <input type="file" name="cover" class="text" id="cov" /></td>
    </tr>
    <tr>
      <td>Keterangan</td>
      <td><label>
        <textarea name="ket" required="required" cols="45" rows="5" class="textarea" id="isi"><?php echo $a['ket'];?></textarea>
      </label></td>
    </tr>
    <tr>
      <td><input name="id" type="hidden" id="id" value="<?php echo $id;?>" />
        <input name="nama2" type="hidden" id="nama2" value="<?php echo $a['nama'];?>" /></td>
      <td><input name="button" type="submit" class="tombol" id="button" value="Ubah" /></td>
    </tr>
  </table>
</form>
</body>
</html>