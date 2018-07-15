<?php
$dir=".";
$file=scandir($dir);
$num=count($file);
$checknum=0;
$checkout=0;
while($checknum<=$num){
	if(strpos($file[$checknum],"skinpic")!==false&&$file[$checknum]!==$picn){
		unlink($file[$checknum]);
		$checkout+=1;
	}
	$checknum+=1;
}
echo "<script>console.log('Checked and delete $checkout skinpic(s)!');</script>";
?>