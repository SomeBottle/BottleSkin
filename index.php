<?php
require 'status.php';
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" /> 
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<link href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
<link href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.js"></script>
<link type="text/css" href="css/selectpick.css" rel="stylesheet" />
<script type="text/javascript" src="css/selectpick.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<title>SomeBottle's Skin Getter</title>
</head>
<body>
<center>
<p>&nbsp;</p>
<h2>SomeBottle's Minecraft Skin Getter</h2>
<p>使用MOJANG官方API</p>
<div id="processimg"><p><img src="img/process.gif"></p><p>PROCESSING</p></img></div>
<p>&nbsp;</p>
<div id="nameinput">
<p><strong id="labeltxt">请输入正版ID</strong><input type="text" class="form-control" id="name" name="name" placeholder="请输入ID"></input></p>
</div>
<div>
<select class="selectpick_div" id="geselect">
  <option value ="zb">正版ID</option>
  <option value ="skinme">Skinme</option>
</select>
<script>

</script>
</div>
<p><iframe src="" id="ope" style="display:none;"></iframe></p>
<p><iframe src="" id="ope2" style="display:none;"></iframe></p>
<div id="buttons">
<p><button type="button" class="btn btn-info" onclick="gosub()">来一发~</button></p>
</div>
<p>&nbsp;</p>
<div id="skin" class="col-sm-10">
<p style="color:white;">皮肤URL</p>
<p id="skinurl" style="color:white;"></p>
<p style="color:white;">---------预览----------</p>
<p style="color:white;">[点击图片可以三维预览哦!]</p>
<p><a href="" id="gotobtn" target="blank"><img src="" id="skinpic"></img></a></p>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h6>@SomeBottle Series</h6>
</center>
</body>
<script src="css/main.js"></script>