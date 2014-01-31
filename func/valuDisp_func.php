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
require 'func.php';
$link =  funcFirst();		// $linkにコネクション情報






//評価詳細
//初期化
for ($i = 1 ; $i <= 6 ; $i++){

	$valucnt[$i] = 	0;	

}
$valuDisp ="";

$valuName =array('かわいい','クール','斬新','面白い','大人っぽい','ハイセンス');


$sql = "SELECT * FROM sitevalu where siteDesId = '".$_SESSION["siteDesId"]."'";
$result = funcDB($link,$sql);

//フィールド数
$num_rows = mysql_num_fields($result);

//件数
$num = mysql_num_rows($result) ;

		

// 内容の取得
if($num > 0){		 // 結果が一件以上の場合。
	while ($row = mysql_fetch_row($result)) {
		$valuId = $row[2];
		
		
		$valucnt[$valuId]++;

		
	}
}

//表示

for ($i = 1 ; $i <= 6 ; $i++){
	$nameI = $i -1;
	$valuDisp .="<span name='v".$i."' onClick='valuPut(".$i.")' class='value' >".$valucnt[$i]."pt<br />".$valuName[$nameI]."</span>";


}




echo $valuDisp;









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



</head>
<body>

</body>
</html>

