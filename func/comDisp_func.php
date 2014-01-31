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
include_once ('func.php');
$link =  funcFirst();		// $linkにコネクション情報




//コメント詳細

$sql = "SELECT * FROM sitecom where siteDesId = '".$_SESSION["siteDesId"]."' order by date desc";
$result = funcDB($link,$sql);

//フィールド数
$num_rows = mysql_num_fields($result);

//件数
$num = mysql_num_rows($result) ;

$siteInfo ="コメント:<Br />";
// 内容の取得
if($num > 0){		 // 結果が一件以上の場合。
	while ($row = mysql_fetch_row($result)) {
		$siteDesId = $row[0];
		$userId =$row[1];
		$text = $row[2];
		$date = $row[3];
		
		//こっから表
		
		$siteInfo .=" <p>・".$text;
		$siteInfo .= "　by ".$userId." ";
		$siteInfo .= "<br /></p>";
		
		
	}
}


echo $siteInfo;









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

