<?php
$tag=@$_GET['tag'];
include"../konek.php";
session_start();
if($tag=="k_t"){
	$kat=$_POST['kat'];
	$t=$_GET['t'];
	mysql_query("insert into $t(kat) values('$kat')");
	header("location:.?hal=buku&p=$t");
}elseif($tag=="k_h"){
	$id=$_GET['id'];
	$t=$_GET['t'];
	$r=mysql_query("select *from $t where id='$id'");
	$a=mysql_fetch_array($r);
	$nama=$a['kat'];
	mysql_query("delete from buku where $t='$nama'");
	mysql_query("delete from $t where id='$id'");
	header("location:.?hal=buku&p=$t");
}elseif($tag=="b_t"){
	$judul=$_POST['judul'];
	$cover=(rand()%99999);
	$kategori=$_POST['kategori'];
	$penerbit=$_POST['penerbit'];
	$pengarang=$_POST['pengarang'];
	$sinopsis=$_POST['sinopsis'];
	$lokasi=$_POST['lokasi'];
	$harga=$_POST['harga'];
	mysql_query("insert into buku(judul,cover,kategori,penerbit,pengarang,sinopsis,lokasi,harga) values('$judul','$cover.jpg','$kategori','$penerbit','$pengarang','$sinopsis','$lokasi','$harga')");
	move_uploaded_file($_FILES['cover']['tmp_name'],"../cover/$cover.jpg");
	header("location:.?hal=buku");
}elseif($tag=="b_u"){
	$judul=$_POST['judul'];
	$cover=(rand()%99999);
	$kategori=$_POST['kategori'];
	$penerbit=$_POST['penerbit'];
	$pengarang=$_POST['pengarang'];
	$sinopsis=$_POST['sinopsis'];
	$lokasi=$_POST['lokasi'];
	$harga=$_POST['harga'];
	$id=$_POST['id'];
	mysql_query("update buku set judul='$judul',kategori='$kategori',penerbit='$penerbit',pengarang='$pengarang',sinopsis='$sinopsis',lokasi='$lokasi',harga='$harga' where id='$id'");
	$f=$_FILES['cover'];
	$na=$f['name'];
	if(!empty($na)){
		mysql_query("update buku set cover='$cover.jpg' where id='$id'");
		move_uploaded_file($_FILES['cover']['tmp_name'],"../cover/$cover.jpg");
	}
	header("location:.?hal=buku");
}elseif($tag=="b_h"){
	$id=$_GET['id'];
	mysql_query("delete from buku where id='$id'");
	header("location:.?hal=buku");
}elseif($tag=="j_t"){
	$b=$_POST['b'];
	$no=$_POST['no'];
	$r=mysql_query("select *from jumlah where no='$no' and buku='$b'");
	$j=mysql_num_rows($r);
	if($j==0){
		mysql_query("insert into jumlah(buku,no) values('$b','$no')");
	}else{
		echo"<script>alert('Tidak boleh menambahkan nomor yang sama')</script>";
	}
	echo"<script>location='.?hal=buku&p=jumlah&b=$b'</script>";
}elseif($tag=="j_h"){
	$id=$_GET['id'];
	$b=$_GET['b'];
	mysql_query("delete from jumlah where id='$id'");
	echo"<script>location='.?hal=buku&p=jumlah&b=$b'</script>";
}elseif($tag=="a_t"){
	$judul=$_POST['judul'];
	$gambar=(rand()%9999999);
	$isi=$_POST['isi'];
	$tgl=date("d-M-Y");
	mysql_query("insert into artikel(judul,gambar,isi,tanggal) values('$judul','$gambar.jpg','$isi','$tgl')");
	move_uploaded_file($_FILES['gambar']['tmp_name'],"../artikel/$gambar.jpg");
	header("location:.?hal=artikel");
}elseif($tag=="a_h"){
	$id=$_GET['id'];
	mysql_query("delete from artikel where id='$id'");
	header("location:.?hal=artikel");
}elseif($tag=="a_u"){
	$judul=$_POST['judul'];
	$gambar=(rand()%9999999);
	$isi=$_POST['isi'];
	$tgl=date("d-M-Y");
	$id=$_POST['id'];
	mysql_query("update artikel set judul='$judul',isi='$isi',tanggal='$tgl' where id='$id'");
	$f=$_FILES['gambar'];
	$na=$f['name'];
	if(!empty($na)){
		move_uploaded_file($_FILES['gambar']['tmp_name'],"../artikel/$gambar.jpg");
		mysql_query("update artikel set gambar='$gambar.jpg' where id='$id'");
	}
	header("location:.?hal=artikel");
}elseif($tag=="e_t"){
	$nama=htmlentities($_POST['nama']);
	$ket=$_POST['ket'];
	$rand=(rand()%99999);
	$c=$_FILES['cover'];
	$ti=$c['type'];
	$tipe_c=substr($ti,0,5);
	$file="$nama($rand)";
	$f=$_FILES['pdf'];
	$tipe=$f['type'];
	$bes=$f['size'];
	$besar=ceil($bes/1024);
	if($tipe!=="application/pdf"){
		echo"<script>alert('File harus berformat .pdf')</script>";
		echo"<script>location='.?hal=ebook&p=tambah_e'</script>";
	}else{
		if($tipe_c!=="image"){
			echo"<script>alert('Cover Harus berformat gambar(png,jpg,dll)')</script>";
			echo"<script>location='.?hal=ebook&p=tambah_e'</script>";
		}else{
			$r=mysql_query("select *from ebook where nama='$nama'");
			$j=mysql_num_rows($r);
			if($j!==0){
				echo"<script>alert('Nama file tidak boleh sama dengan data yang ada')</script>";
				echo"<script>location='.?hal=ebook&p=tambah_e'</script>";
			}else{
				move_uploaded_file($_FILES['cover']['tmp_name'],"../ebook/$nama.jpg");
				move_uploaded_file($_FILES['pdf']['tmp_name'],"../ebook/$file.pdf");
				mysql_query("insert into ebook(nama,cover,pdf,besar,ket) values('$nama','$nama.jpg','$file.pdf','$besar','$ket')");
				echo"<script>location='.?hal=ebook'</script>";
			}
		}
	}
}elseif($tag=="e_h"){
	$id=$_GET['id'];
	mysql_query("delete from ebook where id='$id'");
	header("location:.?hal=ebook");
}elseif($tag=="e_u"){
	$id=$_POST['id'];
	$nama2=$_POST['nama2'];
	$nama=htmlentities($_POST['nama']);
	$ket=$_POST['ket'];
	$c=$_FILES['cover'];
	$ti=$c['type'];
	$tipe_c=substr($ti,0,5);
	if($nama!==$nama2){
		$r=mysql_query("select *from ebook where nama='$nama'");
		$j=mysql_num_rows($r);
		if($j!==0){
			echo"<script>alert('Nama file tidak boleh sama dengan data yang lain')</script>";
			echo"<script>location='.?hal=ebook&p=ubah_e&id=$id'</script>";
		}else{
			mysql_query("update ebook set nama='$nama', ket='$ket' where id='$id'");
			if(!empty($ti)){
				if($tipe_c!=="image"){
					echo"<script>alert('Cover Harus berformat gambar(png,jpg,dll)')</script>";
					echo"<script>location='.?hal=ebook&p=ubah_e&id=$id'</script>";
				}else{
					move_uploaded_file($_FILES['cover']['tmp_name'],"../ebook/$nama.jpg");
					mysql_query("update ebook set cover='$nama.jpg' where id='$id'");
					echo"<script>location='.?hal=ebook'</script>";
				}
			}else{
				echo"<script>location='.?hal=ebook'</script>";
			}
		}
	}else{
		mysql_query("update ebook set nama='$nama', ket='$ket' where id='$id'");
		if(!empty($ti)){
			if($tipe_c!=="image"){
				echo"<script>alert('Cover Harus berformat gambar(png,jpg,dll)')</script>";
				echo"<script>location='.?hal=ebook&p=ubah_e'</script>";
			}else{
				move_uploaded_file($_FILES['cover']['tmp_name'],"../ebook/$nama.jpg");
				mysql_query("update ebook set cover='$nama.jpg' where id='$id'");
				echo"<script>location='.?hal=ebook'</script>";
			}
		}else{
			echo"<script>location='.?hal=ebook'</script>";
		}
	}
}
?>