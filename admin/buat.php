<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="format.css" type="text/css" />
</head>
<body>
<h2>Buat Akun</h2>
<form action="../a.php?tag=buat" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="100%" border="0">
    <tr>
      <td width="25%">Nama Depan</td>
      <td width="75%"><label>
        <input name="depan" placeholder="Nama Depan" required="required" type="text" class="text" id="depan" />
      </label></td>
    </tr>
    <tr>
      <td>Nama Belakang</td>
      <td><label>
        <input name="belakang" placeholder="Nama Belakang" required="required" type="text" class="text" id="belakang" />
      </label></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label>
        <input name="email" placeholder="Email" required="required" type="email" class="text" id="email" />
      </label></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label>
        <input name="pass" placeholder="Password" required="required" type="password" class="text" id="pass" />
      </label></td>
    </tr>
    <tr>
      <td valign="top">Alamat</td>
      <td><label>
        <textarea name="alamat" class="textarea" id="alamat" placeholder="Alamat lengkap" required="required"></textarea>
      </label></td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td><label>
        <input name="lahir" placeholder="Tanggal Lahir" required="required" type="date" class="text" id="lahir" />
      </label></td>
    </tr>
    <tr>
      <td>Foto KTP</td>
      <td><label>
        <input name="ktp" required="required" type="file" class="text" id="ktp" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input name="button" type="submit" class="tombol" id="button" value="Buat" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>