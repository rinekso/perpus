<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/slide.js"></script>
<style>
#con{
	width:100%;
	height:auto;
	overflow:hidden;
}
#img{
	width:400%;
	-webkit-transition:all ease 1.5s;
	-moz-transition:all ease 1.5s;
}
#img img{
	float:left;
	width:25%;
}
</style>
</head>
<body onload="slide()">
<div id="con">
	<div id="img" style="transform:translateX(0%);">
        <img src="img/s1.png" />
        <img src="img/s2.png" />
        <img src="img/s3.png" />
    	<img src="img/s4.png" />
    </div>
</div>
<input name="ke" type="hidden" value="0" id="ke" />
</body>
</html>