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
<?php
$id=$_GET['id'];
$r=mysql_query("select *from artikel where id='$id'");
$a=mysql_fetch_array($r);
?>
<h2><?php echo $a['judul'];?></h2>
<img src="artikel/<?php echo $a['gambar'];?>" width="40%" style="float:left; padding:10px;" />
<i><?php echo $a['tanggal'];?></i><br />
<p align="justify"><?php echo $a['isi'];?></p>
<table width="100%" border="0"><tr><td></td></tr></table>
<h2>Komentar</h2>
<i>Jumlah Komentar : <?php 
$t=mysql_query("select *from komen where id_b='$id' and t='a'");
$d=mysql_num_rows($t);
echo $d;
?></i><br />
<br />
<?php
while($s=mysql_fetch_array($t)){
?>
<b><?php echo $s['email'];?></b><br />
<i><?php echo $s['tanggal'];?></i><br />
<?php echo $s['komen'];?><br />
<hr style="border:#999 dashed  1px;" width="100%" />
<?php }?>
<h2>Tambah Komentar</h2>
<form id="form1" name="form1" method="post" action="komen.php?t=a">
  <table width="60%" border="0">
    <?php
	if(!isset($_SESSION['member'])){
	?>
    <tr>
      <td width="25%">Email</td>
      <td width="75%"><label>
        <input name="email" type="text" class="text" id="email" />
      </label></td>
    </tr>
    <?php }else{?>
    <tr>
      <td>Oleh</td>
      <td><?php echo $_SESSION['member'];?></td>
    </tr>
    <?php }?>
    <tr>
      <td>Komentar</td>
      <td><label>
        <textarea name="komen" cols="45" rows="5" class="textarea" id="komen"></textarea>
      </label></td>
    </tr>
    <tr>
      <td><input name="id" type="hidden" id="id" value="<?php echo $id;?>" /></td>
      <td><label>
        <input name="button" type="submit" class="tombol" id="button" value="Komentar" />
      </label></td>
    </tr>
  </table>
</form>
</div>
</div>
</body>
</html>