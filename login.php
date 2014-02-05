<?php
header("Content-Type:text/html; charset=UTF-8");

/*-----------------------------------------------------------------------------
  概要      : 
            : http://localhost:1024/IW31_eigazaseki/login.php
  作成者    : 
  作成日    : 
  更新履歴  : 
-----------------------------------------------------------------------------*/
//  HTTPヘッダーで文字コードを指定
//処理部




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
<link rel="stylesheet" type="text/css" href="css/marsonry.css" />
<link rel="stylesheet" type="text/css" href="css/typicons.min.css" />

<link rel="stylesheet" type="text/css" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css" />

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="js/tinybox.js"></script>

<script type="text/javascript" src="js/main.js"></script>


</head>
<body>
	
	<span id="disp">aa</span><br />
	
	マイページにいくには、ログインしてください。<br />
	
	
	ユーザＩＤ
	<input type="text" name="id" id="id"/><br />
	パスワード
	<input type="text" name="pass" id="pass" /><br/>

	<input type="submit" name="login" value="ログインする" onClick="login()" />
	
	<a href="new.php" style="color: #000">新規登録する</a>	
	
	
	</form>

</body>
</html>

