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
$hid ="";
// 入力した内容の受け取りとプログラムの実行
$sql = "SELECT * FROM sitediv where siteId = '".$_SESSION["siteId"]."'";
$result = funcDB($link,$sql);

//フィールド数
$num_rows = mysql_num_fields($result);

//件数
$num = mysql_num_rows($result) ;


//iframe吐き出し
$disp = "<iframe src='site/".$_SESSION["siteId"]."/disp.php' id='winDisp'></iframe>";


// 内容の取得
if($num > 0){		 // 結果が一件以上の場合。
	while ($row = mysql_fetch_row($result)) {
		//ＤＩＶの名前
		$divName = $row[2];
		
		//ＰＯＳＴ用にhidden吐き出し
		//$hid.="<input type='hidden' name='".$divName."'  value='".$divName."' />";
		
		//ＤＩＳＰ用にSESSION吐き出し
		$_SESSION[$divName]  = $_POST[$divName];
		
	
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



<!-- js -->]
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

<script type="text/javascript" src="js/tinybox.js"></script>

<script type="text/javascript" src="js/main.js"></script>


</head>
<body>
	<!-- こっからメニュー部分 -->
        <div class="snap-drawers">
            <div class="snap-drawer snap-drawer-left">
                <div>
                    <h3><a href="index.php">iroiro</a></h3>
		    
                    <h4>Menu</h4>
                    <ul>
                        <li><a href="index.php"><span class="menu lsf">home</span>　TOPページ</a></li>
                        <li><a href="search.php"><span class="menu lsf">search</span>　デザイン検索</a></li>
                        <li><a href="webTop.php"><span class="menu lsf">pc</span>　Webデザイン</a></li>
                        <li><a href="colorTop.php"><span class="menu lsf">color</span>　配色デザイン</a></li>
                    </ul>
                    <div>
                        <p>&copy; 2014 irorio All Rights Reserved.</p>
                    </div>
                </div>
            </div>
            <div class="snap-drawer snap-drawer-right"></div>
        </div>
	<!-- ここまでメニュー部分 -->
	
	
	
	<!-- こっからメイン部分 -->
        <div id="content" class="snap-content">

	
		<h3 id="title">作品情報の入力</h3>

		<section class="wrapInput">
		
			
			<form action="webPut.php" method="POST">
			
			
			<h4>タイトル（20文字以内）</h4>
			<input type="text" name="title" />
			<br />
			
			<h4>説明（1000文字以内）</h4>
			<textarea name="text"></textarea>
			
			<br />
			
                        <div class="divBtn">
			<input type="submit" name="send" value="投稿する" class="btn" /></div>
			</form>
		</section>
		<h3 id="pre">プレビュー</h3>
<? print $disp ?>














	    



        </div>
	<!-- ここまでメイン部分 -->

	
	

<!-- snap.js -->
	
<script src="js/snap.js"></script>
<script type="text/javascript">
    var snapper = new Snap({
        element: document.getElementById('content')
    });
    
</script>

        <script type="text/javascript" src="js/demo.js"></script>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>       


<script src="js/jquery.js"></script>

</body>
</html>

