<?php
$tag=$_GET['tag'];
include"konek.php";
session_start();
if($tag=="pinjam"){
	$m=@$_SESSION['member'];
	$id=$_GET['id'];
	$r=mysql_query("select *from buku where id='$id'");
	$a=mysql_fetch_array($r);
	$b=$a['judul'];
	$tt=mysql_query("select *from jumlah where buku='$b' and pinjam=''");
	$jad=mysql_num_rows($tt);
	if(!isset($_SESSION['member'])){
		echo"<script>alert('Anda harus masuk dahulu')</script>";
		echo"<script>location='.?hal=login'</script>";
	}else{
		if($jad==0){
		echo"<script>alert('buku $b sedang habis')</script>";
		echo"<script>location='.?hal=detil_b&id=$id'</script>";
		}else{
			$r=mysql_query("select *from pinjam where nama='$m' and n=''");
			$n=mysql_num_rows($r);
			if($n==3){
		echo"<script>alert('Anda sudah meminjam 3 buku')</script>";
		echo"<script>location='.?hal=detil_b&id=$id'</script>";				
			}else{
				$r=mysql_query("select *from pinjam where nama='$m' and n='' and buku='$b'");
				$j=mysql_num_rows($r);
				if(!$j==0){
		echo"<script>alert('Anda sudah buku ini')</script>";
		echo"<script>location='.?hal=pinjam'</script>";
				}else{
					$t=mysql_query("select *from jumlah where buku='$b' and pinjam='' order by id desc limit 1");
					$y=mysql_fetch_array($t);
					$no=$y['no'];
					mysql_query("update buku set pinjam=pinjam+'1' where judul='$b' ");
					mysql_query("insert into pinjam(nama,buku,no,keterangan) values('$m','$b','$no','belum diambil')");
					mysql_query("update jumlah set pinjam='$m' where buku='$b' and no='$no'");
					header("location:.?hal=pinjam");
		echo"<script>alert('Segera ambil buku di perpus.net')</script>";
		echo"<script>location='.?hal=pinjam'</script>";
				}
			}
		}
	}
}elseif($tag=="ambil"){
	$id=$_GET['id'];
	$tgl=date("d-M-Y");
	$kem=date('d-M-Y',strtotime("+7 days",strtotime($tgl)));
	mysql_query("update pinjam set tanggal='$tgl', kembali='$kem',keterangan='dipinjam' where id='$id'");
	header("location:admin/.?hal=pinjam");
}elseif($tag=="kembali"){
	$id=$_GET['id'];
	$tgl=date("d-M-Y");
	$r=mysql_query("select *from pinjam where id='$id'");
	$a=mysql_fetch_array($r);
	$no=$a['no'];
	$b=$a['buku'];
	$kem=$a['kembali'];
	$date1=strtotime($kem);
	$date2=strtotime($tgl);
	$sel=$date2-$date1;
	$har=floor($sel/(60*60*24));
	if($har>0){
		$den=$har*5000;
		mysql_query("update pinjam set d='1',denda='$den',keterangan='denda' where id='$id'");
	}else{
		mysql_query("update pinjam set keterangan='selesai' where id='$id'");
	}
	mysql_query("update jumlah set pinjam='' where buku='$b' and no='$no'");
	mysql_query("update pinjam set kembali='$tgl',n='1' where id='$id'");
	header("location:admin.?hal=pinjam");
}elseif($tag=="hilang"){
	$id=$_GET['id'];
	$tgl=date("d-M-Y");
	$r=mysql_query("select *from pinjam where id='$id'");
	$a=mysql_fetch_array($r);
	$no=$a['no'];
	$b=$a['buku'];
	$kem=$a['kembali'];
	$date1=strtotime($kem);
	$date2=strtotime($tgl);
	$sel=$date2-$date1;
	$har=floor($sel/(60*60*24));
	if($har>0){
		$den=$har*5000;
		mysql_query("update pinjam set denda=denda+'$den',keterangan='denda dan hilang' where id='$id'");
	}else{
		mysql_query("update pinjam set keterangan='hilang' where id='$id'");
	}
	$r=mysql_query("select *from buku where judul='$b'");
	$a=mysql_fetch_array($r);
	$harga=$a['harga'];
	mysql_query("delete from jumlah where buku='$b' and no='$no'");
	mysql_query("update pinjam set kembali='$tgl',n='1',h='1',d='1',denda=denda+'$harga' where id='$id'");
	header("location:admin.?hal=pinjam");
}elseif($tag=="hapus"){
	$id=$_GET['id'];
	$r=mysql_query("select *from pinjam where id='$id'");
	$a=mysql_fetch_array($r);
	$b=$a['buku'];
	$no=$a['no'];
	mysql_query("update buku set pinjam=pinjam-'1' where judul='$b' ");
	mysql_query("update jumlah set pinjam='' where buku='$b' and no='$no'");
	mysql_query("delete from pinjam where id='$id'");
	header("location:.?hal=pinjam");
}elseif($tag=="panjang"){
	$id=$_GET['id'];
	$r=mysql_query("select *from pinjam where id='$id'");
	$a=mysql_fetch_array($r);
	$k=$a['kembali'];
	$p=$a['p'];
	$kem=date('d-M-Y',strtotime("+7 days",strtotime($k)));
	if($p==0){
	mysql_query("update pinjam set kembali='$kem',keterangan='dipinjam',p='1' where id='$id'");
	}else{
		echo"<script>alert('Perpanjangan hanya 1 kali')</script>";
	}
	echo "<script>location='admin/.?hal=pinjam'</script>";
}elseif($tag=="panjang2"){
	$id=$_GET['id'];
	$r=mysql_query("select *from pinjam where id='$id'");
	$a=mysql_fetch_array($r);
	$k=$a['kembali'];
	$p=$a['p'];
	$kem=date('d-M-Y',strtotime("+7 days",strtotime($k)));
	if($p==0){
	mysql_query("update pinjam set kembali='$kem',keterangan='dipinjam',p='1' where id='$id'");
	}else{
		echo"<script>alert('Perpanjangan hanya 1 kali')</script>";
	}
	echo "<script>location='.?hal=pinjam'</script>";
}elseif($tag=="langsung"){
	$m=$_POST['email'];
	$b=$_POST['b'];
	$no=$_POST['no'];
	$r=mysql_query("select *from buku where judul='$b'");
	$a=mysql_fetch_array($r);
	$b=$a['judul'];
	$tt=mysql_query("select *from jumlah where buku='$b' and pinjam=''");
	$jad=mysql_num_rows($tt);
	$p=mysql_query("select *from member where email='$m'");
	$s=mysql_num_rows($p);
	if($s==0){
		echo"<script>alert('email salah')</script>";
		echo"<script>location='admin/.?hal=pinjam&p=pinjam_l'</script>";
	}else{
	$qq=mysql_query("select *from jumlah where buku='$b' and pinjam='' and no='$no'");
	$q=mysql_num_rows($qq);
	if($q==0){
		echo"<script>alert('No buku salah')</script>";
		echo"<script>location='admin/.?hal=pinjam&p=pinjam_l'</script>";
		}else{
		if($jad==0){
		echo"<script>alert('buku $b sedang habis')</script>";
		echo"<script>location='admin/.?hal=pinjam&p=pinjam_l'</script>";
		}else{
			$r=mysql_query("select *from pinjam where nama='$m' and n=''");
			$n=mysql_num_rows($r);
			if($n==3){
		echo"<script>alert('email ini sudah meminjam 3 buku')</script>";
		echo"<script>location='admin/.?hal=pinjam&p=pinjam_l'</script>";
			}else{
				$r=mysql_query("select *from pinjam where nama='$m' and n='' and buku='$b'");
				$j=mysql_num_rows($r);
				if(!$j==0){
		echo"<script>alert('email ini meminjam sudah buku ini')</script>";
		echo"<script>location='admin/.?hal=pinjam&p=pinjam_l'</script>";
				}else{
	$tgl=date("d-M-Y");
	$kem=date('d-M-Y',strtotime("+7 days",strtotime($tgl)));
					mysql_query("update buku set pinjam=pinjam+'1' where judul='$b' ");
					mysql_query("insert into pinjam(nama,buku,no,tanggal,kembali,keterangan) values('$m','$b','$no','$tgl','$kem','dipinjam')");
					mysql_query("update jumlah set pinjam='$m' where buku='$b' and no='$no'");
		echo"<script>location='admin/.?hal=pinjam'</script>";
				}
			}
		}
	}}
}
?>