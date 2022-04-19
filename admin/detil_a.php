<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<div class="batas">
<?php
$id=$_GET['id'];
$r=mysql_query("select *from artikel where id='$id'");
$a=mysql_fetch_array($r);
?>
<h2><?php echo $a['judul'];?></h2>
<img src="../artikel/<?php echo $a['gambar'];?>" width="40%" style="float:left; padding:10px;" />
<i><?php echo $a['tanggal'];?></i><br />
<p align="justify"><?php echo $a['isi'];?></p>
<a href=".?hal=ubah_a&id=<?php echo $a['id'];?>" class="tombol">Ubah</a> <a href="b.php?tag=a_h&id=<?php echo $a['id'];?>" class="tombol">Hapus</a>
</div>
</body>
</html>