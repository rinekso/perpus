<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="../format.css" type="text/css" />
</head>
<body>
<div class="batas">
<h2>Ubah Buku</h2>
<?php
$id=$_GET['id'];
$r=mysql_query("select *from buku where id='$id'");
$a=mysql_fetch_array($r);
?>
<form action="b.php?tag=b_u" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="70%" border="0">
    <tr>
      <td width="22%">Judul</td>
      <td width="78%"><label>
        <input name="judul" value="<?php echo $a['judul'];?>" required="required" type="text" class="text" id="judul" />
      </label></td>
    </tr>
    <tr>
      <td>Cover</td>
      <td><img src="../cover/<?php echo $a['cover'];?>" width="50" style="float:left; margin-right:5px;" /><label>
        <input name="cover" type="file" class="text" id="cover" /><br />
        Pilih untuk mengganti cover buku
      </label></td>
    </tr>
    <tr>
      <td>Kategori</td>
      <td><label>
        <select name="kategori" required="required" class="text" id="kategori">
        <option selected="selected" value="<?php echo $a['kategori'];?>">-kategori-</option>
        <?php
		$rr=mysql_query("select *from kategori order by kat");
		while($ar=mysql_fetch_array($rr)){
		?>
        <option value="<?php echo $ar['kat'];?>"><?php echo $ar['kat'];?></option>
        <?php }?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Penerbit</td>
      <td><label>
        <select name="penerbit" required="required" class="text" id="penerbit">
        <option selected="selected" value="<?php echo $a['penerbit'];?>">-penerbit-</option>
        <?php
		$rr=mysql_query("select *from penerbit order by kat");
		while($ar=mysql_fetch_array($rr)){
		?>
        <option value="<?php echo $ar['kat'];?>"><?php echo $ar['kat'];?></option>
        <?php }?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Pengarang</td>
      <td><label>
        <select name="pengarang" required="required" class="text" id="pengarang">
        <option selected="selected" value="<?php echo $a['pengarang'];?>">-pengarang-</option>
        <?php
		$rr=mysql_query("select *from  pengarang order by kat");
		while($d=mysql_fetch_array($rr)){
		?>
        <option value="<?php echo $d['kat'];?>"><?php echo $d['kat'];?></option>
        <?php }?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Sinopsis</td>
      <td><label>
        <textarea name="sinopsis" required="required" cols="45" rows="5" class="textarea" id="sinopsis"><?php echo $a['sinopsis'];?></textarea>
      </label></td>
    </tr>
    <tr>
      <td>Lokasi</td>
      <td><label>
        <input name="lokasi" required="required" value="<?php echo $a['lokasi'];?>" type="text" class="text" id="lokasi" />
      </label></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td><label>
        <input name="harga" required="required" value="<?php echo $a['harga'];?>" type="text" class="text" id="harga" />
      </label></td>
    </tr>
    <tr>
      <td><input name="id" type="hidden" id="id" value="<?php echo $id;?>" /></td>
      <td><label>
        <input name="button" type="submit" class="tombol" id="button" value="Ubah" />
      </label></td>
    </tr>
  </table>
</form>
</div>
</body>
</html>