<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<h2>Buku Yang Anda Pinjam</h2>
<table width="100%" border="0" cellpadding="5">
  <tr align="center" bgcolor="#83c92b" style="color:#FFF;">
    <td width="3%" rowspan="2">No</td>
    <td width="29%" rowspan="2">Buku</td>
    <td width="12%" rowspan="2">Peminjam</td>
    <td colspan="2">Tanggal</td>
    <td width="19%" rowspan="2">Keterangan</td>
    </tr>
  <tr align="center" bgcolor="#83c92b" style="color:#FFF;">
    <td width="12%">Pinjam</td>
    <td width="21%">Kembali</td>
    </tr>
  <?php
  $r=mysql_query("select *from pinjam where n=''");
  $i=1;
  while($a=mysql_fetch_array($r)){
  ?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $a['buku'];?>(No Buku .<?php echo $a['no'];?>)</td>
    <td><?php echo $a['nama'];?></td>
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
    <a href="../sistem.php?tag=panjang&id=<?php echo $a['id'];?>" class="link">Perpanjangan?</a>
    <?php }elseif($har==1){?>
    <a href="../sistem.php?tag=panjang&id=<?php echo $a['id'];?>" class="link">Perpanjangan?</a>
    <?php }elseif($har==2){?>
    <a href="../sistem.php?tag=panjang&id=<?php echo $a['id'];?>" class="link">Perpanjangan?</a>
    <?php }}?>
    </td>
    <td align="center"><?php $kem=$a['keterangan'];
	if($kem=="belum diambil"){
	?>
    <a href="../sistem.php?tag=ambil&id=<?php echo $a['id'];?>" class="link">Ambil</a>
    <?php }else{?>
    <a href="../sistem.php?tag=kembali&id=<?php echo $a['id'];?>" class="link">Kembali</a> atau <a href="../sistem.php?tag=hilang&id=<?php echo $a['id'];?>" onclick="return confirm('apa anda yakin?')" class="link">Hilang</a>
    <?php }?>
    </td>
    </tr>
  <?php $i++;}?>
  </table>
</table>
</body>
</html>