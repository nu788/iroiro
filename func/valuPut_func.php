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




if( isset($_SESSION["id"]))
{
	$userId = $_SESSION["id"];
} else {

	$userId = "guest";
}

// 入力した内容の受け取りとプログラムの実行
$value = $_POST["value"];

		
// 入力した内容の受け取りとプログラムの実行
$sql = "insert into sitevalu value(".$_SESSION["siteDesId"].",'".$userId."','".$value."',".date('YmdHis').")";
$result = funcDB($link,$sql);


echo $result;









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

