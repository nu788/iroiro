<?php
/*-----------------------------------------------------------------------------
  概要      : 
            : http://localhost:1024/iroiro/site/4/index.php
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

$_SESSION["siteId"] = '5';
$disp= "";
if( isset($_SESSION["#header"])){
	$disp = "5";
}

$hid= "";
$hid.="<input type='hidden' name='back1' id='backbackground' value='#fff' />";
$hid.="<input type='hidden' name='back2' id='marubackground' value='#ff0000' />";

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
               "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="IE=edge" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">

<title>iroiro</title>

<!-- css -->
<link rel="stylesheet" type="text/css" href="../../css/snap.css" />
<link rel="stylesheet" type="text/css" href="../../css/spectrum.css" />
<link rel="stylesheet" type="text/css" href="../../css/common.css" />
<link rel="stylesheet" type="text/css" href="../../css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css" />

<!-- js-->

<script src="../../js/jquery.js"></script>
<script src="../../js/jquery.pep.min.js"></script>
<script>
  jQuery(function($) {
	
		
  	
	$('#content').click(function(e){
		var x = e.pageX;
		var y = e.pageY;
		
		var w = $(window).width();
		var h = $(window).height();
		
		var xw = w - 500;
		var yh = h - 500;
		
		if ( x > xw ){ x = xw;}
		if ( y > yh ){ y = yh;}
		
		$('#colorDiv').css({top:(y),left:(x)}).attr('title','TOP : '+(y)+'px | LEFT : '+(x)+'px');
	});	


    // pep is super simple...but there are wayyy
    // more options doc'd on github.
    $('#colorDiv').pep({
	  useCSSTranslation: false,
	  constrainTo: 'window'
}) 
  });
  $(function() {
	$("#content").scroll(function () {
		var s = $(this).scrollTop();
		
		$("#back").css('top',s);
	});
});
</script>

<script type="text/javascript" src="../../js/jquery.min.js"></script>

<script type="text/javascript" src="../../js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="../../js/spectrum.js"></script>
<script type="text/javascript" src="../../js/docs.js"></script>

<script type="text/javascript" src="../../js/main.js"></script>
<script type="text/javascript" src="js/main.js"></script>

<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->


</head>
<body>

	<!-- こっからメニュー部分 -->
        <div class="snap-drawers">
            <div class="snap-drawer snap-drawer-left">
                <div>
                    <h3>iroiro</h3>
		    
                    <h4>Menu</h4>
                    <ul>
                        <li><a href="../../index.php">TOPページ</a></li>
                        <li><a href="../../search.php">デザイン検索</a></li>
                        <li><a href="../../webTop.php">Webデザイン</a></li>
                        <li><a href="../../colorTop.php">配色デザイン</a></li>
                        <li><a href="../../color.php">色辞典</a></li>
                        <li><a href="../../tuto.php">チュートリアル</a></li>
                        <li><a href="../../help.php">ヘルプ</a></li>
                    </ul>
                    <div>
                        <p>irorio</p>
                        <p>11月下旬までに完成</p>
                    </div>
                </div>
            </div>
            <div class="snap-drawer snap-drawer-right"></div>
        </div>
	<!-- ここまでメニュー部分 -->
	
	
	
	<!-- こっからメイン部分 -->
        <div id="content" class="snap-content">

		<div id="maru" onClick="upDate('#maru')"></div>

	<div id="back" onClick="upDate('#back')"></div>
		
		
		
		
		
	
	
	
	
	
	
	
	
	
	
	
			
			

        </div>
	<!-- ここまでメイン部分 -->

	
		<div id="colorDiv" data-snap-ignore="true">
			<span id="closeBtn" onClick="closeBtn()">×</span>
			<h3>カラーピッカー</h3>
			<p>
			ターゲット：<span id="target">none</span><br />
			変更箇所：<span id="elem">none</span><br /><br />
			
			<!--
			<span onClick="upDateElem('background')" class="elem">背景</span>
			<span onClick="upDateElem('color')" class="elem">文字</span><br />
			-->
			
			<br/>
			<input type='text' id="full" />
			<br />
						
			<form action="../../webInput.php" method="POST"><? print $hid?>			

				<input type="submit" name="send" value="投稿する" />
			</form>
			</p>
		
		</div>

<!-- snap.js -->
	
<script src="../../js/snap.js"></script>
<script type="text/javascript">
    var snapper = new Snap({
        element: document.getElementById('content')
    });
    
</script>

        <script type="text/javascript" src="../../js/demo.js"></script>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>       

</body>
</html>

