<?php
session_start();
include"konek.php";
$pdf=$_GET['pdf'];
$ra=mysql_query("select *from ebook where pdf='$pdf'");
$a=mysql_fetch_array($ra);
$id=$a['id'];
if(!isset($_SESSION['member'])){
	echo "<script>alert('Anda harus masuk dahulu')</script>";
	echo "<script>location='.?hal=login'</script>";
}else{
	$r=mysql_query("select *from look where nama='$_SESSION[member]' and id_e='$id'");
	$j=mysql_num_rows($r);
	if($j==0){
		mysql_query("insert into look(id_e,nama) values('$id','$_SESSION[member]')");
	}
	header("location:ebook/$pdf");
}
?>