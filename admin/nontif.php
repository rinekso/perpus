<?php
$t=$_GET['t'];
include"../konek.php";
mysql_query("update $t set status='1' where status=''");
header("location:.?hal=$t");
?>