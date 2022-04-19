<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<div class="batas">
<h2>Buku Tamu</h2>
<table width="50%" border="0">
   <tr align="center" bgcolor="#83c92b" style="color:#FFF;">
    <td width="5%">No</td>
    <td width="47%">Member</td>
    <td width="24%">Waktu</td>
    <td width="24%">Tanggal</td>
  </tr>
  <?php
  $batas=25;
  $p=@$_GET['p'];
  if(empty($p)){
	  $p=1;
  }
  $offset=($p-1)*$batas;
  $r=mysql_query("select *from peng limit $offset,$batas");
  $i=$offset+1;
  while($a=mysql_fetch_array($r)){
  ?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $a['nama'];?></td>
    <td><?php echo $a['waktu'];?></td>
    <td><?php echo $a['tanggal'];?></td>
  </tr>
  <?php $i++;}?>
  <tr>
    <td>&nbsp;</td>
    <td><p><?php
	$r=mysql_query("select *from peng");
	$j=mysql_num_rows($r);
	$bat=ceil($j/$batas);
	for($e=1;$e<=$bat;$e++){
		if($e==$p){
			$c="p_s";
		}else{
			$c="p";
		}
	?>
    <a href=".?hal=tamu&p=<?php echo $e;?>" style="padding:5px;" class="<?php echo $c;?>"><?php echo $e;?></a>
    <?php }?></p>
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
</body>
</html>