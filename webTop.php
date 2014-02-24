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


if( isset($_SESSION["id"]))
{
	$link ="<a href=\"myPage.php\" class='lsf'>friend</a>";
} else {
	$link = "<a href=\"#\" class=\"lsf\" onclick=\"TINY.box.show({url:'login.php',post:'id=16',width:300,height:300,opacity:20,topsplit:3})\">friend</a>";	
	
}



$disp= "";
$result = "";		
$no = "1";

// 入力した内容の受け取りとプログラムの実行
$sql = "SELECT * FROM site where caption NOT LIKE '配色デザイン%'";
$result = funcDB($link,$sql);

//フィールド数
$num_rows = mysql_num_fields($result);

//件数
$num = mysql_num_rows($result) ;


// 内容の取得
if($num > 0){		 // 結果が一件以上の場合。
	while ($row = mysql_fetch_row($result)) {
			$siteNo = $row[0];
			$siteTitle = $row[1];
			$siteCap = $row[2];

			$disp .=" <li class='mix'><div class='sikaku'><a href='site/".$siteNo."/index.php'>";
			$disp .=" <h3>".$siteTitle."</h3>";
			$disp .= $siteCap;
			$disp.="<img src='site/".$siteNo."/sc.jpg' class='siteSc' /></a></div></li>";
			
			//$disp.="<iframe title='sum' type='text/html' src='site/".$siteNo."/index.php' id='webSum' class='webSum".$siteNo."' /></iframe></a></div></li>";

			
			
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
<script type="text/javascript" src="js/tinybox.js"></script>

<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
$(function(){
	$('#Grid').mixitup({
		targetSelector: '.mix',
		filterSelector: '.filter',
		sortSelector: '.sort',
		buttonEvent: 'click',
		effects: ['fade','scale'],
		listEffects: null,
		easing: 'smooth',
		layoutMode: 'grid',
		targetDisplayGrid: 'inline-block',
		targetDisplayList: 'block',
		gridClass: '',
		listClass: '',
		transitionSpeed: 600,
		showOnLoad: 'all',
		sortOnLoad: ['default','asc'],
		multiFilter: false,
		filterLogic: 'or',
		resizeContainer: true,
		minHeight: 0,
		failClass: 'fail',
		perspectiveDistance: '3000',
		perspectiveOrigin: '50% 50%',
		animateGridList: true,
		onMixLoad: null,
		onMixStart: null,
		onMixEnd: null
	});
});
</script>
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
            
			<div id="openmenu" class="tub"><a href="#" id="open-left"></a></div>
			<div id="login" class="tub"><? print $link ?></div>
	    
	    
	    	<header id="web">
		
		
			<h1>WEBデザイン</h1>
			<!--
			キーワード検索
			<input type="text" id="keyword" />
			
			
			色
			<select id="color">
				<option value="none">指定なし</option>
			</select>
			
			雰囲気
			<select id="air">
				<option value="none">指定なし</option>
			</select>
			
			カラム
			<select id="air">
				<option value="none">指定なし</option>
			</select>
			
			<br />
			
			ソート
			<input type="radio" name="sort" value="new"　selected="selected" />新着順
			<input type="radio" name="sort" value="pop" />人気順
			<input type="radio" name="sort" value="run" />ランダム
			
			
			
			<input type="submit" name="search" value="検索" />
			
			<ul id="mixNav">
			    <li class="filter active" data-filter="all">all</li>
			    <li class="filter" data-filter="color1">1</li>
			    <li class="filter" data-filter="color2">2</li>
			    <li class="filter" data-filter="color3">3</li>
			    <li class="filter" data-filter="color4">4</li>
			    <li class="filter" data-filter="color5">5</li>
			    <li class="filter" data-filter="color1 color5">5</li>
			</ul>
			 -->	
			<br />
			
				<ul class="controls clearfix">
					<li>表示順</li>
					<li class="sort" data-sort="default" data-order="desc">古い順</li>
					<li class="sort" data-sort="default" data-order="asc">新しい順</li>
					<li class="sort active" data-sort="default" data-order="desc">リセット</li>
				</ul>
		
		
		</header>
		<article id="webSearch">
			<ul id="Grid">
				<? print $disp ?>
			</ul>	
			
		</article>



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

