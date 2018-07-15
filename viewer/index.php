<?php
$gurl=$_GET['url'];
date_default_timezone_set('Asia/Shanghai');
$picn="";
if(!empty($gurl)){
	$getter=file_get_contents($gurl);
	$picn="skinpic".date("Ymd").rand(1,1000).".png";
	$putter=file_put_contents($picn,$getter);
	echo "<script>var picturename='$picn';</script>";
}
require "cacheclear.php";
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" /> 
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
	<meta charset="utf-8">
	<title>Minecraft skin viewer</title>
	<style>
		body {
			font-family: Verdana;
			font-size: 13px;
			background-color:grey;
		}
		#skinpreview canvas {
			
		}
		
		#skinpreview canvas.dragenter {
			box-shadow: inset 0px 0px 32px rgba(0, 0, 0, 0.5);
		}
	</style>
</head>
<body>
<center>
<h1>Minecraft skin viewer</h1>
<div id="skinpreview"></div>
</center>
<g:plusone></g:plusone>
<script src="Three.js"></script>
<script src="main.js"></script>
</body>
</html>
