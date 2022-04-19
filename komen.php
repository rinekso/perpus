<?php
include"konek.php";
session_start();
$id=$_POST['id'];
$t=$_GET['t'];
$komen=$_POST['komen'];
$email=@$_POST['email'];
$tgl=date("d-M-Y");
if(empty($email)){
	$email=$_SESSION['member'];
}
mysql_query("insert into komen(id_b,t,email,komen,tanggal) values('$id','$t','$email','$komen','$tgl')");
header("location:.?hal=detil_$t&id=$id");
?>