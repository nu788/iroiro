<?php
/*-----------------------------------------------------------------------------
  概要      : 
            : http://localhost:1024/IW31_eigazaseki/login.php
  作成者    : 
  作成日    : 
  更新履歴  : 
-----------------------------------------------------------------------------*/

//  HTTPヘッダーで文字コードを指定
header("Content-Type:text/html; charset=UTF-8");
//処理部
session_start();

//処理部
require 'func/func.php';
$link =  funcFirst();		// $linkにコネクション情報

$disp= "";
$result = "";		
$no = "1";
$hid ="";


$colorDisp["color1"] = "";
$colorDisp["color2"] = "";
$colorDisp["color3"] = "";
$colorDisp["color4"] = "";
$colorDisp["color5"] = "";
$colorDisp["color6"] = "";
$colorDisp["color7"] = "";
$colorDisp["color8"] = "";
$colorDisp["color9"] = "";
$colorDisp["color10"] = "";


// 入力した内容の受け取りとプログラムの実行
	$sql = "SELECT * FROM sitedescolor where siteDesId = '".$_GET["siteDesId"]."'";

$result = funcDB($link,$sql);

//フィールド数
$num_rows = mysql_num_fields($result);

//件数
$num = mysql_num_rows($result) ;

if($num > 0){		 // 結果が一件以上の場合。
	$hid.="<input type='hidden' name='divNum' id='divNum' value='".$num."' />";

	while ($row = mysql_fetch_row($result)) {
		$divName = $row[1];
		$divColor = $row[2];
		
		$colorDisp[$divName] = $divColor;
		
		$hid.="<input type='hidden' name='".$divName."HidPut' id='".$divName."HidPut' value='".$divColor."' />";
			
			
	}
} else {			// 結果が０件の場合
	//結果保持用メモリを開放する
	mysql_free_result($result);
	$disp = $msg;
}





?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
               "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="IE=edge" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">

<title>iroiro</title>

<!-- css -->
<link rel="stylesheet" type="text/css" href="css/snap.css" />
<link rel="stylesheet" type="text/css" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css" />



<!-- js -->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>


<script type="text/javascript" src="js/docs.js"></script>
<script type="text/javascript" src="js/main.js"></script>


</head>
<body style="overflow:hidden">
	<!-- こっからメイン部分 -->
	
		<div id="colorS">
			<div id="color1" onClick="upDate('#color1')"><? print $colorDisp["color1"] ?></div>
			<div id="color2" onClick="upDate('#color2')"><? print $colorDisp["color2"] ?></div>
			<div id="color3" onClick="upDate('#color3')"><? print $colorDisp["color3"] ?></div>
			<div id="color4" onClick="upDate('#color4')"><? print $colorDisp["color4"] ?></div>
			<div id="color5" onClick="upDate('#color5')"><? print $colorDisp["color5"] ?></div>
			<div id="color6" onClick="upDate('#color6')"><? print $colorDisp["color6"] ?></div>
			<div id="color7" onClick="upDate('#color7')"><? print $colorDisp["color7"] ?></div>
			<div id="color8" onClick="upDate('#color8')"><? print $colorDisp["color8"] ?></div>
			<div id="color9" onClick="upDate('#color9')"><? print $colorDisp["color9"] ?></div>
			<div id="color10" onClick="upDate('#color10')"><? print $colorDisp["color10"] ?></div>
		</div>

			
		<? print $hid?>	
			

	<!-- ここまでメイン部分 -->

	
	

</body>
</html>

