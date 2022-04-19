<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Perpus.net</title>
<link rel="shortcut icon" href="img/icon.png" />
<link rel="stylesheet" href="format.css" type="text/css" />
</head>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/page.js"></script>
<script>
function ker(){
	$('#ker').load("ker.php");
	setTimeout("ker()",0);
}

ker();
</script>
<body>
<?php
include"konek.php";
session_start();
?>
    	<a href="." class="menu_l" style="margin-top:50px;">HOME</a>
    	<a href=".?hal=buku" class="menu_l" style="margin-top:100px;">BUKU</a>
    	<a href=".?hal=artikel" class="menu_l" style="margin-top:150px;">ARTIKEL</a>
    	<a href=".?hal=ebook" class="menu_l" style="margin-top:200px;">E-BOOK</a>
    	<a href=".?hal=panduan" class="menu_l" style="margin-top:250px;">PANDUAN</a>
    <?php
	if(!isset($_SESSION['member'])){
	?>
    <a href=".?hal=login" class="menu_l" style="margin-top:300px;">MASUK</a>
    <?php }else{?>
    <a href=".?hal=sub-akun2" class="menu_l" style="margin-top:300px;">MENU AKUN</a>
    <?php }?>
<div id="menu2">
<div class="batas">
    <a href="."><img src="img/icon.png" class="icon" /></a>
    <a href="#" id="menu2_l">Menu</a>
<form id="form1" name="form1" method="post" class="cari" action="cari_s.php">
        <label>
          <input name="c" type="text" placeholder="Pencarian" class="textcari" id="c" />
          <select name="tip" size="1" class="selectcari" id="select">
            <option value="buku">Buku</option>
            <option value="ebook">E-Book</option>
            <option value="artikel">Artikel</option>
          </select>
        </label>
        <label>
          <input name="button" type="submit" class="tombol_car" id="button" value=" " />
        </label>
      </form></div>
</div>
<div id="buk" style="position:fixed; z-index:5; width:100%; background:#f6f6f6;border-bottom:5px solid #83c92b;"></div>
<div id="menu_atas">
	<div class="batas">
    	<a href="." class="menu_link">HOME</a>
    	<a href="#" id="bb" class="menu_link">BUKU <img src="img/panah.png" width="10" /></a>
    	<a href=".?hal=ebook" class="menu_link">E-BOOK</a>
    	<a href=".?hal=artikel" class="menu_link">ARTIKEL</a>
    	<a href=".?hal=panduan" class="menu_link">PANDUAN</a>
      <form id="form1" name="form1" method="post" class="cari" action="cari_s.php">
        <label>
          <input name="c" type="text" placeholder="Pencarian" class="textcari" id="c" />
          <select name="tip" size="1" class="selectcari" id="select">
            <option value="buku">Buku</option>
            <option value="ebook">E-Book</option>
            <option value="artikel">Artikel</option>
          </select>
        </label>
        <label>
          <input name="button" type="submit" class="tombol_car" id="button" value=" " />
        </label>
      </form>
	</div>
</div>
<div id="menu_atas2">
	<div class="batas">
    <img src="img/icon.png" class="icon" />
    <span style="float:left; font-size:18px; margin-top:10px;"><?php echo date("d-F-Y");?></span>
    <?php
	if(!isset($_SESSION['member'])){
	?>
    <a href=".?hal=login" class="masuk">Masuk</a>
    <?php }else{?>
    <a href="#" id="aa" class="masuk">Menu Akun</a>
    <?php }?>
    <div class="kanan">
<div id="akun" style="position:fixed; padding:5px; width:260px; z-index:5; float:right; background:#FFF;"></div>
    <a href=".?hal=pinjam"><img src="img/buku.png" width="50" style="float:left;  margin-right:10px;" /><p>Pinjam = <span id="ker"></span>
    </p></a></div>
    </div>
</div>
<div id="men"></div>
<?php
$hal=@$_GET['hal'];
if(empty($hal)){
	include"home.php";
}else{
	include"$hal.php";
}
?>
<div class="batas">
<div class="kat">
	<h3>Kategori</h3>
    <a href=".?hal=buku"><h4>Semua</h4></a>
    <?php
	$r=mysql_query("select *from kategori order by kat");
	while($a=mysql_fetch_array($r)){
	?>
    <a href=".?hal=kat&t=kategori&kat=<?php echo $a['kat'];?>"><h4><?php echo $a['kat'];?></h4></a>    
    <?php }?>
    <h3>Penerbit</h3>
    <?php
	$r=mysql_query("select *from penerbit order by kat");
	while($a=mysql_fetch_array($r)){
	?>
    <a href=".?hal=kat&t=penerbit&kat=<?php echo $a['kat'];?>"><h4><?php echo $a['kat'];?></h4></a>    
    <?php }?>
    <h3>Pengarang</h3>
    <?php
	$r=mysql_query("select *from pengarang order by kat");
	while($a=mysql_fetch_array($r)){
	?>
    <a href=".?hal=kat&t=pengarang&kat=<?php echo $a['kat'];?>"><h4><?php echo $a['kat'];?></h4></a>    
    <?php }?>    
    <h3>Pengunjung</h3>
    <h4>Pengunjung Umum : <?php
	if(!isset($_SESSION['peng'])){
		$_SESSION['peng']="peng";
		mysql_query("update pengunjung set no=no+'1'");
	}
    $r=mysql_query("select *from pengunjung");
	$a=mysql_fetch_array($r);
	echo $a['no'];
	?></h4>
    <h4>Pengunjung Member : <?php
    $r=mysql_query("select *from peng");
	echo $j=mysql_num_rows($r);
	?></h4>
      <form id="form1" name="form1" method="post" class="cari2" action="cari_s.php">
        <label>
          <input name="c" type="text" placeholder="Pencarian" class="textcari" id="c" />
          <select name="tip" size="1" class="selectcari" id="select">
            <option value="buku">Buku</option>
            <option value="ebook">E-Book</option>
            <option value="artikel">Artikel</option>
          </select>
        </label>
        <label>
          <input name="button" type="submit" class="tombol_car" id="button" value=" " />
        </label>
      </form>
</div>
</div>

<table width="100%" border="0"><tr><td><br /><br /></td></tr></table>
<div id="footer">
<center>
Copyright &copy; Perpus.net 2014
</center>
</div>
</body>
</html>