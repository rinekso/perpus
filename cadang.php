<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script>
$(document).ready(function(){
	$(".pdf").hide();
	$(".x").hide();
	$("#baca").click(function(){
		$(".pdf").slideToggle();
		$(".x").fadeIn();
	});
	$(".x").click(function(){
		$(".pdf").slideUp();
		$(".x").fadeOut();
	});
});
</script>
<body>
<div class="pdf">
	<div class="kanan" style="width:27px; margin-top:-50px;"><a href="#" class="x">X</a></div>
    <object data="ebook/<?php echo $a['pdf'];?>" width="100%" height="100%"></object>
</div>
</body>
</html>