<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script>
$(document).ready(function(){
	$(".pdf").hide();
	$(".x").hide();
	$("#baca").click(function(){
		$(".pdf").slideToggle();
		$(".x").fadeIn();
	});
	$(".x").click(function(){
		$(".pdf").slideUp();
		$(".x").fadeOut();
	});
});
</script>
<body>
<h2>Detail E-Book</h2>
<?php
$id=$_GET['id'];
$r=mysql_query("select *from ebook where id='$id'");
$a=mysql_fetch_array($r);
?>
<div class="pdf">
	<div class="kanan" style="width:27px; margin-top:-50px;"><a href="#" class="x">X</a></div>
    <object data="../ebook/<?php echo $a['pdf'];?>" width="100%" height="100%"></object>
</div>
<table width="100%" border="0">
  <tr>
    <td width="20%">Nama</td>
    <td width="80%"><?php echo $a['nama'];?></td>
  </tr>
  <tr>
    <td>Ukuran</td>
    <td><?php echo $a['besar'];?> KB</td>
  </tr>
  <tr>
  	<td valign="bottom">Cover</td>
    <td valign="bottom"><img src="../ebook/<?php echo $a['cover'];?>" width="100" height="150" style="margin:5px;" /></td>
  </tr>
  <tr>
    <td>Keterangan</td>
    <td><?php echo $a['ket'];?></td>
  </tr>
  <tr>
    <td>File pdf</td>
    <td><p><a href="#" id="baca" class="tombol">Baca</a></p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>