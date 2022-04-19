<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<div class="batas">
<div class="isi">
<h2>Detail Member</h2>
<?php
$r=mysql_query("select *from member where email='$_SESSION[member]'");
$a=mysql_fetch_array($r);
?>
<table width="70%" border="0">
  <tr>
    <td width="20%">Nama Lengkap</td>
    <td width="80%"><?php echo $a['depan'];?> <?php echo $a['belakang'];?></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><?php echo $a['email'];?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><?php echo $a['alamat'];?></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td><?php echo $a['lahir'];?></td>
  </tr>
  <tr>
    <td>Tanggal Daftar</td>
    <td><?php echo $a['tanggal'];?></td>
  </tr>
  <tr>
    <td>Foto KTP</td>
    <td><img src="ktp/<?php echo $a['ktp'];?>" width="100%" /></td>
  </tr>
  <tr>
    <td></td>
    <td><p><a href=".?hal=ubah_m&id=<?php echo $a['id'];?>" class="tombol">Perbarui Profil</a></p></td>
  </tr>
</table>
</div>
</div>
</body>
</html>