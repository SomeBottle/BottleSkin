<?php
$name=$_GET['nid'];
$met=$_GET['method'];
if(empty($met)){
	echo "<script>alert('ERROR EMPTY METHOD');</script>";
	exit();
}
$skinurl="";
if($met=="zb"){//-----------------------------如果是正版模式
/*获取UUID*/
$getstr=file_get_contents("https://api.mojang.com/users/profiles/minecraft/".$name);
$uuidgetter=json_decode($getstr,true);
$uuid=$uuidgetter["id"];
if(strlen($uuid)<=16){
$getstr=file_get_contents("https://api.mojang.com/users/profiles/minecraft/Steve");
$uuidgetter=json_decode($getstr,true);
$uuid=$uuidgetter["id"];
echo "<script>alert('Unable to find the ID you typed.无法找到你要的皮肤，或许不是正版ID？');</script>";
}
/*获取sessionAPIProfile*/
$getstr2=file_get_contents("https://sessionserver.mojang.com/session/minecraft/profile/".$uuid);
$profile=json_decode($getstr2,true);
$valueid=$profile["properties"][0]["value"];
/*base64解密value*/
$valuejson=base64_decode($valueid);
$mainjsond=json_decode($valuejson,true);
$skinurl=$mainjsond["textures"]["SKIN"]["url"];
}else if($met=="skinme"){//----------------------如果是skinme
    if(is_numeric($name)&&strlen($name)>=6&&strlen($name)<=7){//判断如果是皮肤ID
		$sid1=substr($name,0,2);
	    $sid2=substr($name,2,2);
	    $skinurl="http://www.skinme.cc/skins/00/".$sid1."/".$sid2."/".$name.".png";
	}else{
	$getsource=file_get_contents("http://www.skinme.cc/MinecraftSkins/".$name.".png");
	if($getsource=="-1"){
		echo "<script>alert('Unable to find the ID you typed.无法找到你要的玩家的皮肤，或许不是skinme用户ID？');</script>";
	}
	$sid1=substr($getsource,0,2);
	$sid2=substr($getsource,2,2);
	$skinurl="http://www.skinme.cc/skins/00/".$sid1."/".$sid2."/".$getsource.".png";
	}
}
/*日志Logs*/
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />  
<script>
window.parent.document.getElementById('processimg').style.display="none";
window.parent.skinurl="<?php echo $skinurl;?>";
window.parent.checkback();
</script>