<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<div class="batas">
<h2>Ubah Artikel</h2>
<?php
$id=$_GET['id'];
$r=mysql_query("select *from artikel where id='$id'");
$a=mysql_fetch_array($r);
?>
<form action="b.php?tag=a_u" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="70%" border="0">
    <tr>
      <td width="21%">Judul</td>
      <td width="79%"><label>
        <input name="judul" value="<?php echo $a['judul'];?>" required="required" type="text" class="text" id="judul" />
      </label></td>
    </tr>
    <tr>
      <td>Gambar</td>
      <td><img src="../artikel/<?php echo $a['gambar'];?>" width="50" style="float:left; margin-right:5px;" /><input name="gambar" type="file" class="text" id="gambar" /><br />
      pilih gambar untuk mengubah gambar artikel</td>
    </tr>
    <tr>
      <td>Isi</td>
      <td><label>
        <textarea name="isi" required="required" cols="45" rows="5" class="textarea" id="isi"><?php echo $a['isi'];?></textarea>
      </label></td>
    </tr>
    <tr>
      <td><input name="id" type="hidden" id="id" value="<?php echo $id;?>" /></td>
      <td><label>
        <input name="button" type="submit" class="tombol" id="button" value="Ubah" />
      </label></td>
    </tr>
  </table>
</form>
</div>
</body>
</html>