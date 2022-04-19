<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<h2>Member</h2>
<a href=".?hal=buat" class="tombol">Tambah Member</a>
<h3>Member Saat Ini</h3>
<table width="70%" border="0">
<?php
$r=mysql_query("select *from member");
$i=1;
while($a=mysql_fetch_array($r)){
?>
  <tr>
    <td width="20"><?php echo $i;?></td>
    <td><a href=".?hal=detil_m&id=<?php echo $a['id'];?>" class="link"><?php echo $a['depan'];?></a></td>
    <td width="200"><a href="a.php?tag=hapus&id=<?php echo $a['id'];?>" onclick="return confirm('apa anda yakin?')" class="link">Hapus Member</a>
    </td>
  </tr>
<?php $i++;}?>
</table>
</body>
</html>