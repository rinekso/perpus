<?php
session_start();
include"konek.php";
if(!isset($_SESSION['member'])){
	echo "0";
}else{
	$r=mysql_query("select *from pinjam where n='' and nama='$_SESSION[member]'");
	$j=mysql_num_rows($r);
	echo $j;
}
?>