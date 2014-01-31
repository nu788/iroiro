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



// 入力した内容の受け取りとプログラムの実行
$strId = $_POST["id"];


		
// 入力した内容の受け取りとプログラムの実行
$sql = "SELECT userId FROM user where userId = '".$strId."'";
$result = funcDB($link,$sql);
	
	// 内容の取得
if(mysql_num_rows($result) > 0){		 // 結果が一件以上の場合。
	$msg = "重複しています。"  ;
} else {			// 結果が０件の場合
	$msg = "使用可能です。";
}
	
	
	
//結果保持用メモリを開放する
mysql_free_result($result);

echo $msg;



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
               "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HALシネマ</title>
</script>
</head>

<body>

</body>
</html>

