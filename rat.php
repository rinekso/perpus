<?php
session_start();
include"konek.php";
$id=$_POST['id'];
$m=$_SESSION['member'];
$rat=$_POST['rat'];
$r=mysql_query("select *from rating where nama='$m' and id_b='$id'");
$j=mysql_num_rows($r);
if($j==0){
mysql_query("insert into rating(id_b,rat,nama) values('$id','$rat','$m')");
}else{
	echo"<script>alert('Anda sudah memberi rating')</script>";
}
echo"<script>location='.?hal=detil_b&id=$id'</script>";
?>