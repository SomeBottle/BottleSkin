<?php
$pfrom=$_GET['from'];
if($pfrom=="mcbbs"){
	echo "<script>alert('欢迎您，来自MCBBS的访客！别忘了去原贴顶一个哦...作者很寂寞的(Q_Q)');</script>";
}
/*获取UUID*/
$getstr=file_get_contents("https://api.mojang.com/users/profiles/minecraft/Steve");
$uuidgetter=json_decode($getstr,true);
$uuid=$uuidgetter["id"];
if(strlen($uuid)<=16||empty($getstr)){
	echo "<script>alert('MOJANG服务器状态：无法连接！Error!');</script>";
}
?>