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

//処理部
session_start();
//処理部

//ファンクション呼び出し
require 'func/func.php';
$link =  funcFirst();		// $linkにコネクション情報

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
		sortOnLoad: false,
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
			

		
		<article id="myPage">
		
			<section id="info">
				<h2>チュートリアル</h2>
				
				
				
				<h3 class="wrap">①デザイン対象を選択</h3>
				<p class="wrap">
					まずwebデザインをするか、配色デザインをするか選びましょう。<br />
					初めてサイトを利用する人は、配色デザインがおすすめです！<br />
					                 <br />
					webデザインをする方は②へ、<br />
					配色デザインをする方は③へ進んでください。 <br />
					
				</p>
				
				<h3 class="wrap">②デザイン対象を選択</h3>
				<p class="wrap">
					webデザインにはテンプレートがあります。<br />
					レスポンシブサイトや、国旗など様々です。<br />
					まずは簡単な国旗をデザインしてみましょう！
					
				</p>
			
				<h3 class="wrap">③デザイン開始！</h3>
				<p class="wrap">
					webデザインにはテンプレートがあります。<br />
					レスポンシブサイトや、国旗など様々です。<br />
					まずは簡単な国旗をデザインしてみましょう！
					
				</p>
			
			</section>
		
			

		
		
		
		
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

