<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="../format.css" type="text/css" />
</head>
<body>
<h2>Tambah Jumlah Buku</h2>
<form id="form1" name="form1" method="post" action=".?hal=buku&p=jumlah">
  <label>
    <select name="b" class="text" id="b">
      <option selected="selected" disabled="disabled">Pilih Judul Buku</option>
      <?php
	$r=mysql_query("select *from buku order by judul");
	while($a=mysql_fetch_array($r)){
	?>
      <option value="<?php echo $a['judul'];?>"><?php echo $a['judul'];?></option>
      <?php }?>
    </select>
  </label>
  <label>
    <input name="button" type="submit" class="tombol" id="button" value="Pilih" />
  </label>
</form><br />
<?php
$b=@$_GET['b'];
if(empty($b)){
	$b=@$_POST['b'];
}
if(empty($b)){
	echo"Pilih judul buku terlebih dahulu";
}else{
?>
<form id="form2" name="form2" method="post" action="b.php?tag=j_t">
  <table width="80%" border="0" cellpadding="5">
    <tr bgcolor="#83c92b" align="center" style="color:#fff;">
      <td colspan="2"><?php echo $b;?></td>
      <td width="50" rowspan="2" bgcolor="#fff">&nbsp;</td>
      <td width="387" rowspan="2">Tambah No.Buku<br />
        <label>
        <?php
		$t=mysql_query("select *from jumlah where buku='$b' order by no desc limit 1");
		$y=mysql_fetch_array($t);
		$jum=$y['no']+1;
		?>
          <input name="no" value="<?php echo $jum;?>" type="number" class="text" id="textfield" />
        </label>
        <label>
          <input type="submit" name="button2" id="button2" value="Tambah" />
        </label>
      </p>
      <input name="b" type="hidden" id="b" value="<?php echo $b;?>" /></td>
    </tr>
    <tr bgcolor="#83c92b" align="center" style="color:#fff;">
      <td width="20">No</td>
      <td width="404">Nomor Buku</td>
    </tr>
<?php
$r=mysql_query("select *from jumlah where buku='$b' order by no");
$i=1;
while($a=mysql_fetch_array($r)){
?>
    <tr>
      <td><?php echo $i;?></td>
      <td>Buku dengan nomor .<?php echo $a['no'];?></td>
      <td><a href="b.php?tag=j_h&id=<?php echo $a['id'];?>&b=<?php echo $b;?>" onclick="return confirm('apa anda yakin?')" class="tombol" style="padding:3px;">X</a></td>
    </tr>
<?php $i++;}?>
  </table>
</form>
<?php }?>
</body>
</html>