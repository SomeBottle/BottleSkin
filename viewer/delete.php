<?php
    header('Content-type:text/json;charset=utf-8');
    $givepost=$_POST['give'];
	$result="yes";
	unlink($givepost);
    $data='{check:"' . $result . '"}';//组合成json格式数据
    echo json_encode($data);//输出json数据