<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="../format.css" type="text/css" />
</head>
<body>
<h2>Pinjam Langsung</h2>
<form id="form1" name="form1" method="post" action="../sistem.php?tag=langsung">
  <table width="50%" border="0" align="left">
    <tr>
      <td width="28%">Email</td>
      <td width="72%"><label>
        <input name="email" type="text" class="text" id="email" />
      </label></td>
    </tr>
    <tr>
      <td>Judul buku</td>
      <td><label>
        <select name="b" class="text" id="b">
      <option selected="selected" disabled="disabled">Pilih Judul Buku</option>
      <?php
	$r=mysql_query("select *from buku order by judul");
	while($a=mysql_fetch_array($r)){
	?>
      <option value="<?php echo $a['judul'];?>"><?php echo $a['judul'];?></option>
      <?php }?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>No.Buku</td>
      <td><label>
        <input name="no" type="text" class="text" id="no" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input name="button" type="submit" class="tombol" id="button" value="Pinjam" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>