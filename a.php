<?php
$tag=@$_GET['tag'];
include"konek.php";
session_start();
if($tag=="buat"){
	$depan=$_POST['depan'];
	$belakang=$_POST['belakang'];
	$email=$_POST['email'];
	$pass=md5($_POST['pass']);
	$alamat=$_POST['alamat'];
	$lahir=$_POST['lahir'];
	$ktp=(rand()%9999999);
	$tgl=date("d-M-Y");
	$r=mysql_query("select *from member where email='$email'");
	$j=mysql_num_rows($r);
	if(!$j==0){
		echo"<script>alert('Email anda sama dengan orang lain , gunakan email yang berbeda')</script>";
		echo"<script>location='.?hal=buat'</script>";
	}else{
		mysql_query("insert into member(depan,belakang,email,password,alamat,ktp,lahir,tanggal) values('$depan','$belakang','$email','$pass','$alamat','$ktp.jpg','$lahir','$tgl')");
		move_uploaded_file($_FILES['ktp']['tmp_name'],"ktp/$ktp.jpg");
		echo"<script>alert('Selesai menambahkan member')</script>";
		echo"<script>location='admin/.?hal=member'</script>";
	}
}elseif($tag=="masuk"){
	$email=$_POST['email'];
	$pass=md5($_POST['pass']);
	$r=mysql_query("select *from member where email='$email' and password='$pass'");
	$j=mysql_num_rows($r);
	if($j==0){
		echo"<script>alert('Password atau email anda salah')</script>";
		echo"<script>location='.?hal=login'</script>";
	}else{
		$a=mysql_fetch_array($r);
		$tgl=date("d-M-Y");
		date_default_timezone_set("Asia/Jakarta");
		$w=date("h:i:s A");
		$_SESSION['member']="$email";
		mysql_query("insert into peng(nama,tanggal,waktu) values('$email','$tgl','$w')");
		echo"<script>location='.'</script>";
	}
}elseif($tag=="keluar"){
	unset($_SESSION['member']);
	header("location:.");
}elseif($tag=="ubah"){
	$depan=$_POST['depan'];
	$belakang=$_POST['belakang'];
	$alamat=$_POST['alamat'];
	$lahir=$_POST['lahir'];
	$id=$_POST['is'];
	mysql_query("update member set depan='$depan', belakang='$belakang',alamat='$alamat',lahir='$lahir' where id='$id'");
	header("location:.?hal=detil_m");
}elseif($tag=="like"){
	$id=$_GET['id'];
	$nama=@$_SESSION['member'];
	if(!isset($nama)){
		echo"<script>alert('Anda harus masuk dahulu untuk memberi suka')</script>";
	}else{
		$r=mysql_query("select *from suka where id_e='$id' and nama='$nama'");
		$j=mysql_num_rows($r);
		if($j==0){
			mysql_query("insert into suka(id_e,nama,ket) values('$id','$nama','y')");
			mysql_query("update ebook set suka=suka+'1' where id='$id'");
		}else{
			$r=mysql_query("select *from suka where id_e='$id' and nama='$nama' and ket='y'");
			$j=mysql_num_rows($r);
			if($j==0){
				mysql_query("update suka set ket='y' where id_e='$id' and nama='$nama'");
			}else{
			echo"<script>alert('Anda sudah menyukai ebook ini')</script>";
			}
		}
	}
	echo"<script>location='.?hal=detil_e&id=$id'</script>";
}elseif($tag=="dislike"){
	$id=$_GET['id'];
	$nama=@$_SESSION['member'];
	if(!isset($nama)){
		echo"<script>alert('Anda harus masuk dahulu untuk memberi suka')</script>";
	}else{
		$r=mysql_query("select *from suka where id_e='$id' and nama='$nama'");
		$j=mysql_num_rows($r);
		if($j==0){
			mysql_query("insert into suka(id_e,nama,ket) values('$id','$nama','n')");
		}else{
			$r=mysql_query("select *from suka where id_e='$id' and nama='$nama' and ket='n'");
			$j=mysql_num_rows($r);
			if($j==0){
				mysql_query("update suka set ket='n' where id_e='$id' and nama='$nama'");
			mysql_query("update ebook set suka=suka-'1' where id='$id'");
			}else{
			echo"<script>alert('Anda sudah tidak menyukai ebook ini')</script>";
			}
		}
	}
	echo"<script>location='.?hal=detil_e&id=$id'</script>";
}
?>