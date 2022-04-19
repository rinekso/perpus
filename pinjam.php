<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
if(!isset($_SESSION['member'])){
	echo"<script>alert('anda harus masuk dahulu')</script>";
	echo"<script>location='.?hal=login'</script>";
}
?>
<div class="batas">
<div class="isi">
<h2>Buku Yang Anda Pinjam</h2>
<table width="100%" border="0" cellpadding="5">
  <tr align="center" bgcolor="#83c92b" style="color:#FFF;">
    <td width="3%" rowspan="2">No</td>
    <td width="36%" rowspan="2">Buku</td>
    <td colspan="2">Tanggal</td>
    <td width="18%" rowspan="2">Keterangan</td>
    </tr>
  <tr align="center" bgcolor="#83c92b" style="color:#FFF;">
    <td width="14%">Pinjam</td>
    <td width="25%">Kembali</td>
    </tr>
  <?php
  $r=mysql_query("select *from pinjam where n='' and nama='$_SESSION[member]'");
  $i=1;
  while($a=mysql_fetch_array($r)){
  ?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $a['buku'];?>(No Buku .<?php echo $a['no'];?>)</td>
    <td><?php echo $a['tanggal'];?></td>
    <td><?php echo $k=$a['kembali'];
	$tgl=date("d-M-Y");
	if(!empty($k)){
	$date1=strtotime($tgl);
	$date2=strtotime($k);
	$sel=$date2-$date1;
	$har=floor($sel/(60*60*24));
	if($har>0){
		echo"(Kurang $har hari lagi)";
	}elseif($har==0){
		echo"(Hari ini pengembalian)";
	}elseif($har<0){
		$har2=-$har;
		echo"(Terlambat $har2 hari)";
	}
	if($har==0){
	?>
    <a href="sistem.php?tag=panjang2&id=<?php echo $a['id'];?>" class="link">Perpanjangan?</a>
    <?php }elseif($har==1){?>
    <a href="sistem.php?tag=panjang2&id=<?php echo $a['id'];?>" class="link">Perpanjangan?</a>
    <?php }elseif($har==2){?>
    <a href="sistem.php?tag=panjang2&id=<?php echo $a['id'];?>" class="link">Perpanjangan?</a>
    <?php }}?>
    </td>
    <td><?php echo $kem=$a['keterangan'];?></td>
    <td width="4%"><?php
    if($kem=="belum diambil"){
	?><a href="sistem.php?tag=hapus&id=<?php echo $a['id'];?>" onclick="return confirm('apa anda yakin?')" class="tombol" style="padding:3px;">X</a><?php }?></td>
    </tr>
  <?php $i++;}?>
  </table>
</div>
</div>
</body>
</html>