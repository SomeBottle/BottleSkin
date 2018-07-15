//选择环节
var pmethod="zb";
function recheck(){
var obj = document.getElementById("geselect"); //定位id
var index = obj.selectedIndex; // 选中索引
var value = obj.options[index].value; // 选中值
if(value=="zb"){
	document.getElementById("labeltxt").innerHTML="请输入正版ID";
	document.getElementById("name").placeholder="请输入正版ID";
	pmethod="zb";
}else if(value=="skinme"){
	document.getElementById("labeltxt").innerHTML="请输入SkinmeID或者皮肤ID";
	document.getElementById("name").placeholder="Skinme皮肤/玩家id";
	pmethod="skinme";
}
}
document.getElementById("geselect").onchange=function(){recheck();}
//传输环节
var skinurl="";
document.getElementById('skin').style.display="none";
framewindow=document.getElementById('ope');
document.getElementById('ope2').style.display="none";
document.getElementById('processimg').style.display="none";
function checkback(){
	if(skinurl!==""){
		document.getElementById('skin').style.display="block";
		document.getElementById('skinurl').innerHTML=skinurl;
		document.getElementById('gotobtn').href="viewer/?url="+skinurl;
		document.getElementById('skinpic').src=skinurl;
	}
}
function gosub(){
	var timer;
	var content=document.getElementById('name').value;
	if(content==""||content=="null"||content.match(/^\s*$/)){
		alert('请输入您的对应的ID');
	}else{
		document.getElementById('processimg').style.display="block";
		framewindow.src="process.php?nid="+content+"&method="+pmethod;
		document.getElementById('ope2').src="log.php?nid="+content+"&method="+pmethod;
		var skinurl="";
	}
}