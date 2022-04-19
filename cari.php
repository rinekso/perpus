<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<div class="batas">
<div class="isi">
<?php
$c=$_GET['c'];
$tip=$_GET['tip'];
?>
<h2>Pencarian <?php echo $tip;?> "<?php echo $c;?>"</h2>
<?php
if($tip=="buku"){
?>
    <center>
    <?php
    $batas=8;
    $p=@$_GET['p'];
    if(empty($p)){
        $p=1;
    }
    $of=$batas*($p-1);
    $r=mysql_query("select *from $tip where judul like '%$c%' or kategori like '%$c%' or penerbit like '%$c%' or pengarang like '%$c%' or sinopsis like '%$c%' order by id desc limit $of,$batas");
    $jul=mysql_num_rows($r);
    if($jul==0){
        echo"Data tidak ada";
    }else{
    while($a=mysql_fetch_array($r)){
    ?>
    <div class="buku">
        <a href=".?hal=detil_b&id=<?php echo $a['id'];?>"><img src="cover/<?php echo $a['cover'];?>" width="100%" height="250" /></a><p>
    <center>
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
        <?php }}?>
        </center></p>
    </div>
    <?php }?>
    </center>
    <table width="100%" border="0"><tr><td></td></tr></table><br /><br />
    <center>
    <?php
    $y=mysql_query("select *from $tip where judul like '%$c%' or kategori like '%$c%' or penerbit like '%$c%' or pengarang like '%$c%' or sinopsis like '%$c%'");
    $je=mysql_num_rows($y);
    $jum=ceil($je/$batas);
    for($u=1;$u<=$jum;$u++){
        if($u==$p){
            $cl="p_s";
        }else{
            $cl="p";
        }
    ?>
    <a href=".?hal=cari&p=<?php echo $u;?>&c=<?php echo $c;?>&tip=<?php echo $tip;?>" class="<?php echo $cl;?>"><?php echo $u;?></a>
    <?php }?>
    </center>
<?php }}elseif($tip=="ebook"){?>
	<?php
    $batas=50;
    $p=@$_GET['p'];
    if(empty($p)){
        $p=1;
    }
    $of=$batas*($p-1);
    $r=mysql_query("select *from $tip where nama like '%$c%' or ket like '%$c%' order by id desc limit $of,$batas");
    $jul=mysql_num_rows($r);
    if($jul==0){
        echo"Data tidak ada";
    }else{
	?>
    <center>
    <?php
		while($a=mysql_fetch_array($r)){
      ?>
    <div class="buku">
        <?php echo $a['nama'];?>
        <img src="ebook/<?php echo $a['cover'];?>" width="100%" height="200" />
        <center><p>
    <a href="e.php?pdf=<?php echo $a['pdf'];?>" class="tombol" target="_blank">Baca</a> <a href=".?hal=detil_e&id=<?php echo $a['id'];?>" class="tombol">Detail</a>
    </p></center>
    </div>
      <?php }?>
    </center>
    <table width="100%" border="0"><tr><td></td></tr></table><br /><br />
    <center>
    <?php
    $y=mysql_query("select *from $tip where nama like '%$c%' or ket like '%$c%' order by id desc");
    $je=mysql_num_rows($y);
    $jum=ceil($je/$batas);
    for($u=1;$u<=$jum;$u++){
        if($u==$p){
            $cl="p_s";
        }else{
            $cl="p";
        }
    ?>
    <a href=".?hal=cari&p=<?php echo $u;?>&c=<?php echo $c;?>&tip=ebook" class="<?php echo $cl;?>"><?php echo $u;?></a>
    <?php }?>
    </center>
<?php }}elseif($tip=="artikel"){?>
	<?php
    $batas=8;
    $p=@$_GET['p'];
    if(empty($p)){
        $p=1;
    }
    $of=$batas*($p-1);
    $r=mysql_query("select *from $tip where judul like '%$c%' or isi like '%$c%' order by id desc limit $of,$batas");
    $jul=mysql_num_rows($r);
    if($jul==0){
        echo"Data tidak ada";
    }else{?>
    <table width="100%" border="0">
    <?php
    while($a=mysql_fetch_array($r)){
    ?>
      <tr>
        <td width="22%" rowspan="2" valign="top"><img src="artikel/<?php echo $a['gambar'];?>" width="100%" /></td>
        <td width="78%" height="20"><h3><?php echo $a['judul'];?></h3>
        <i><?php echo $a['tanggal'];?></i><br />
        <?php echo substr($a['isi'],0,250);?></td>
      </tr>
      <tr>
        <td><p><a href=".?hal=detil_a&id=<?php echo $a['id'];?>" class="tombol">Selengkapnya</a></p></td>
      </tr>
    <?php }?>
    </table>
    <table width="100%" border="0"><tr><td></td></tr></table><br /><br />
    <center>
    <?php
    $y=mysql_query("select *from $tip where judul like '%$c%' or isi like '%$c%' order by id desc limit $of,$batas");
    $je=mysql_num_rows($y);
    $jum=ceil($je/$batas);
    for($u=1;$u<=$jum;$u++){
        if($u==$p){
            $cl="p_s";
        }else{
            $cl="p";
        }
    ?>
    <a href=".?hal=cari&p=<?php echo $u;?>&c=<?php echo $c;?>&tip=<?php echo $tip;?>" class="<?php echo $cl;?>"><?php echo $u;?></a>
    <?php }?>
    </center>
<?php }}?>
</div>
</div>
</body>
</html>