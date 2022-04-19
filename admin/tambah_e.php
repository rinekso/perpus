<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="../format.css" type="text/css" />
</head>
<body>
<h2>Tambah E-Book</h2>
<form action="b.php?tag=e_t" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="70%" border="0">
    <tr>
      <td width="26%">Nama File</td>
      <td width="74%"><label>
        <input name="nama" type="text" required="required" class="text" id="nama" />
      <input type="hidden" name="MAX_FILE_SIZE" value="3500000" /></label></td>
    </tr>
    <tr>
      <td valign="top">File Pdf</td>
      <td><input name="pdf" type="file" required="required" class="text" />
      </td>
    </tr>
    <tr>
      <td valign="top">Cover </td>
      <td><input name="cover" type="file" required="required" class="text" /></td>
    </tr>
    <tr>
      <td>Keterangan</td>
      <td><label>
        <textarea name="ket" required="required" class="textarea" id="ket"></textarea>
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