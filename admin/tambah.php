<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="../format.css" type="text/css" />
</head>
<body>
<h2>Tambah Buku</h2>
<form action="b.php?tag=b_t" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="70%" border="0">
    <tr>
      <td width="22%">Judul</td>
      <td width="78%"><label>
        <input name="judul" required="required" type="text" class="text" id="judul" />
      </label></td>
    </tr>
    <tr>
      <td>Cover</td>
      <td><label>
        <input name="cover" required="required" type="file" class="text" id="cover" />
      </label></td>
    </tr>
    <tr>
      <td>Kategori</td>
      <td><label>
        <select name="kategori" required="required" class="text" id="kategori">
        <option selected="selected" disabled="disabled">-kategori-</option>
        <?php
		$r=mysql_query("select *from kategori order by kat");
		while($a=mysql_fetch_array($r)){
		?>
        <option value="<?php echo $a['kat'];?>"><?php echo $a['kat'];?></option>
        <?php }?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Penerbit</td>
      <td><label>
        <select name="penerbit" required="required" class="text" id="penerbit">
        <option selected="selected" disabled="disabled">-penerbit-</option>
        <?php
		$r=mysql_query("select *from penerbit order by kat");
		while($a=mysql_fetch_array($r)){
		?>
        <option value="<?php echo $a['kat'];?>"><?php echo $a['kat'];?></option>
        <?php }?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Pengarang</td>
      <td><label>
        <select name="pengarang" required="required" class="text" id="pengarang">
        <option selected="selected" disabled="disabled">-pengarang-</option>
        <?php
		$r=mysql_query("select *from  pengarang order by kat");
		while($a=mysql_fetch_array($r)){
		?>
        <option value="<?php echo $a['kat'];?>"><?php echo $a['kat'];?></option>
        <?php }?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Sinopsis</td>
      <td><label>
        <textarea name="sinopsis" required="required" cols="45" rows="5" class="textarea" id="sinopsis"></textarea>
      </label></td>
    </tr>
    <tr>
      <td>Lokasi</td>
      <td><label>
        <input name="lokasi" required="required" type="text" class="text" id="lokasi" />
      </label></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td><label>
        <input name="harga" required="required" type="text" class="text" id="harga" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input name="button" type="submit" class="tombol" id="button" value="Tambah" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>