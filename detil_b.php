<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<div class="batas">
<div class="isi">
<h2>Detail Buku</h2>
<?php
$id=$_GET['id'];
$r=mysql_query("select *from buku where id='$id'");
$a=mysql_fetch_array($r);
?>
<table width="80%" border="0">
  <tr>
    <td width="30%" rowspan="11" valign="top"><img src="cover/<?php echo $a['cover'];?>" width="100%" /></td>
    <td height="21"><a href="sistem.php?tag=pinjam&id=<?php echo $id;?>" class="tombol">Pinjam</a></td>
    <td><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="19%" height="21">Judul</td>
    <td width="51%"><?php echo $ju=$a['judul'];?></td>
  </tr>
  <tr>
    <td height="21">Kategori</td>
    <td><?php echo $a['kategori'];?></td>
  </tr>
  <tr>
    <td height="21">Penerbit</td>
    <td><?php echo $a['penerbit'];?></td>
  </tr>
  <tr>
    <td height="21">Pengarang</td>
    <td><?php echo $a['pengarang'];?></td>
  </tr>
  <tr>
    <td height="21">Sinopsis</td>
    <td><?php echo $a['sinopsis'];?></td>
  </tr>
  <tr>
    <td height="21">Jumlah</td>
    <td><?php $tt=mysql_query("select *from jumlah where buku='$ju' and pinjam=''");
	echo $jad=mysql_num_rows($tt);
	?></td>
  </tr>
  <tr>
    <td height="21">Lokasi</td>
    <td><?php echo $a['lokasi'];?></td>
  </tr>
  <tr>
    <td height="21" valign="top">Rating</td>
    <td>
    <?php
	$id=$a['id'];
	$rr=mysql_query("select *from rating where id_b='$id'");
	$jr=mysql_num_rows($rr);
	if($jr==0){
		echo"Belum diberi rating";
	}else{
		$t=mysql_query("select sum(rat) as tot from rating where id_b='$id'");
		$y=mysql_fetch_array($t);
		$tot=$y['tot'];
		$rat=ceil($tot/$jr);
		for($i=1;$i<=$rat;$i++){
	?>
    <img src="img/bintang.png" />
    <?php }}?><br />
<?php if(isset($_SESSION['member'])){?>
<form id="form1" name="form1" method="post" action="rat.php">
  <label>
    <select name="rat" size="1" id="rat">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </label>
  <label>
    <input type="submit" name="button" id="button" value="Beri Rating" />
  </label>
  <input name="id" type="hidden" id="id" value="<?php echo $id;?>" />
</form><?php }?></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
  </tr>
</table>
<table width="100%" border="0"><tr><td></td></tr></table>
<h2>Komentar</h2>
<i>Jumlah Komentar : <?php 
$t=mysql_query("select *from komen where id_b='$id' and t='b'");
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
<form id="form1" name="form1" method="post" action="komen.php?t=b">
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