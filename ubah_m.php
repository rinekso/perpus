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
<h2>Ubah Profil</h2>
<?php
$id=$_GET['id'];
$r=mysql_query("select *from member where id='$id'");
$a=mysql_fetch_array($r);
?>
<form action="a.php?tag=ubah" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="100%" border="0">
    <tr>
      <td width="25%">Nama Depan</td>
      <td width="75%"><label>
        <input name="depan" placeholder="Nama Depan" value="<?php echo $a['depan'];?>" required="required" type="text" class="text" id="depan" />
      </label></td>
    </tr>
    <tr>
      <td>Nama Belakang</td>
      <td><label>
        <input name="belakang" placeholder="Nama Belakang" value="<?php echo $a['belakang'];?>" required="required" type="text" class="text" id="belakang" />
      </label></td>
    </tr>
    <tr>
      <td valign="top">Alamat</td>
      <td><label>
        <textarea name="alamat" class="textarea" id="alamat" placeholder="Alamat lengkap" required="required"><?php echo $a['alamat'];?></textarea>
        </label></td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td><label>
        <input name="lahir" placeholder="Tanggal Lahir" required="required" value="<?php echo $a['lahir'];?>" type="date" class="text" id="lahir" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input name="button" type="submit" class="tombol" id="button" value="Ubah" />
        </label></td>
    </tr>
  </table>
</form>
</div>
</div>
</body>
</html>