<?php
include"../konek.php";
session_start();
$tag=@$_GET['tag'];
if($tag=="kk"){
	$email=$_POST['email'];
	$pass=md5($_POST['pass']);
	mysql_query("insert into admin(email,password) values('$email','$pass')");
}elseif($tag=="masuk"){
	$email=$_POST['email'];
	$pass=md5($_POST['pass']);
	$r=mysql_query("select *from admin where email='$email' and password='$pass'");
	$j=mysql_num_rows($r);
	if($j==0){
		echo"<script>alert('Password atau email anda salah')</script>";
	}else{
		$_SESSION['admin']="admin";
	}
	echo"<script>location='.'</script>";
}elseif($tag=="keluar"){
	unset($_SESSION['admin']);
	header("location:../.");
}elseif($tag=="setuju"){
	$id=$_GET['id'];
	mysql_query("update member set status='ya' where id='$id'");
	header("location:.?hal=member");
}elseif($tag=="hapus"){
	$id=$_GET['id'];
	mysql_query("delete from member where id='$id'");
	header("location:.?hal=member");
}elseif($tag=="panjang"){
	$id=$_GET['id'];
	$r=mysql_query("select *from member where id='$id'");
	$a=mysql_fetch_array($r);
	$tgl=$a['ex'];
	$ex=date('d-M-Y',strtotime("+ 1years",strtotime($tgl)));
	mysql_query("update member set ex='$ex' where id='$id'");
	header("location:.?hal=detil_m&id=$id");
}
?>