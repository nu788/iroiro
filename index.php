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

if( isset($_SESSION["id"]))
{
	$link ="<a href=\"myPage.php\" class='lsf'>friend</a>";
} else {
	$link = "<a href=\"#\" class=\"lsf\" onclick=\"TINY.box.show({url:'login.php',post:'id=16',width:300,height:300,opacity:20,topsplit:3})\">friend</a>";	
	
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
<script type="text/javascript" src="js/tinybox.js"></script>

<script type="text/javascript" src="js/main.js"></script>


</head>
<body>
	<!-- こっからメニュー部分 -->
        <div class="snap-drawers">
            <div class="snap-drawer snap-drawer-left">
                <div>
                    <h3>iroiro</h3>
		    
                    <h4>Menu</h4>
                    <ul>
                        <li><a href="index.php">TOPページ</a></li>
                        <li><a href="search.php">デザイン検索</a></li>
                        <li><a href="webTop.php">Webデザイン</a></li>
                        <li><a href="colorTop.php">配色デザイン</a></li>
                        <li><a href="tuto.php">チュートリアル</a></li>
                        <li><a href="help.php">ヘルプ</a></li>
                    </ul>
                    <div>
                        <p>&copy;  2013 irorio All Rights Reserved.</p>
                    </div>
                </div>
            </div>
            <div class="snap-drawer snap-drawer-right"></div>
        </div>
	<!-- ここまでメニュー部分 -->
	
	
	
	<!-- こっからメイン部分 -->
        <div id="content" class="snap-content">
	

		<header id="index">

			<div id="openmenu" class="tub"><a href="#" id="open-left"></a></div>
			<div id="login" class="tub"><? print $link ?></div>
		
			<ul class="clearfix">
			
				<li><h1>iroiro</h1></li>
				<li>
				<p>クリックだけでいろいろデザインできちゃうよ！<br />いつでもどこでもお手軽にデザインできるサイトです。ＷＥＢページ、単純配色などなどコンテンツはたくさん！もちろんHTML,CSSの知識必要ありません。カラーピッカーをクリックしてくだけで直感的にデザインができます。
				</p>
				</li>
				
				
			</ul>
		
		</header>
            <div id="toolbar">
                <a href="#" id="open-left"></a>
                <h1>iroiro</h1>
            </div>
	    
	    
	    <div id="menuwrap" class="lsf">
		<div id="menu" class="color1">aiueo</div>
		<div id="menu" class="color2"></div>
		<div id="menu" class="color3"><p><a href="search.php">search<br/><font size="4">デザイン検索</font></a></p></div>
		<div id="menu" class="color4"><p><a href="webTop.php">pc<br/><font size="4">WEBデザイン</font></a></p></div>
		<div id="menu" class="color5"><p><a href="colorTop.php">color<br/><font size="4">配色デザイン</font></a></p></div>
		<div id="menu" class="color6"><p><a href="tuto.php">？<br/><font size="4">使い方</font></a></p></div>
		<div id="menu" class="color7"></div>
		<div id="menu" class="color8"></div>
	    </div>



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

</body>
</html>

