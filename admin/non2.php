<?php
include"../konek.php";
$r=mysql_query("select *from pinjam where status=''");
$j=mysql_num_rows($r);
if($j!==0){
?>
<span style="background:#B71E1E; border-radius:3px; padding:3px;"><?php echo $j;?></span>
<?php }?>