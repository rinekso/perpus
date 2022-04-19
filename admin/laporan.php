<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<h2>Laporan Pinjam</h2>
<table width="100%" border="0" cellpadding="5">
  <tr align="center" bgcolor="#83c92b" style="color:#FFF;">
    <td width="3%" rowspan="2">No</td>
    <td width="25%" rowspan="2">Buku</td>
    <td width="10%" rowspan="2">Peminjam</td>
    <td colspan="2">Tanggal</td>
    <td width="16%" rowspan="2">Denda</td>
    <td width="18%" rowspan="2">Keterangan</td>
    </tr>
  <tr align="center" bgcolor="#83c92b" style="color:#FFF;">
    <td width="10%">Pinjam</td>
    <td width="18%">Kembali</td>
    </tr>
  <?php
  $r=mysql_query("select *from pinjam where n='1' order by id desc");
  $i=1;
  while($a=mysql_fetch_array($r)){
  ?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $a['buku'];?>(No Buku .<?php echo $a['no'];?>)</td>
    <td><?php echo $a['nama'];?></td>
    <td><?php echo $a['tanggal'];?></td>
    <td><?php echo $k=$a['kembali'];?>
    </td>
    <td align="right">Rp. <?php echo number_format($a['denda']);?></td>
    <td><?php echo $a['keterangan'];?>
    </td>
    </tr>
  <?php $i++;}?>
  </table>
</table>
</body>
</html>