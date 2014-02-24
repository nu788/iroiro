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

$_SESSION["siteId"] = '3';
$disp= "";
if( isset($_SESSION["#header"])){
	$disp = "3";
}

$hid= "";
$hid.="<input type='hidden' name='back1' id='itigobackground' value='#f23f93' />";
$hid.="<input type='hidden' name='back2' id='contentbackground' value='#000' />";
$hid.="<input type='hidden' name='back2' id='test1background' value='#e5447a' />";
$hid.="<input type='hidden' name='back3' id='test2background' value='#af44e5' />";
$hid.="<input type='hidden' name='back4' id='footerbackground' value='#5f44e5' />";
$hid.="<input type='hidden' name='color1' id='headercolor' value='#000' />";
$hid.="<input type='hidden' name='color2' id='test1color' value='#000' />";
$hid.="<input type='hidden' name='color3' id='test2color' value='#000' />";
$hid.="<input type='hidden' name='color4' id='footercolor' value='#000' />";

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
		$('#colorDiv').css({top:(y),left:(x),display:'block'}).attr('title','TOP : '+(y)+'px | LEFT : '+(x)+'px');
	});	
  // pep is super simple...but there are wayyy
    // more options doc'd on github.
    $('#colorDiv').pep({
  useCSSTranslation: false,
  constrainTo: 'window'
}) 
  });
</script>

<script type="text/javascript" src="../../js/jquery.min.js"></script>

<script type="text/javascript" src="../../js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="../../js/spectrum.js"></script>
<script type="text/javascript" src="../../js/docs.js"></script>

<script type="text/javascript" src="../../js/main.js"></script>
<script type="text/javascript" src="js/main.js"></script>


</head>
<body>

	<!-- こっからメニュー部分 -->
        <div class="snap-drawers">
            <div class="snap-drawer snap-drawer-left">
                <div>
                    <h3><a href="../../index.php">iroiro</a></h3>
		    
                    <h4>Menu</h4>
                    <ul>
                        <li><a href="../../index.php"><span class="menu lsf">home</span>　TOPページ</a></li>
                        <li><a href="../../search.php"><span class="menu lsf">search</span>　デザイン検索</a></li>
                        <li><a href="../../webTop.php"><span class="menu lsf">pc</span>　Webデザイン</a></li>
                        <li><a href="../../colorTop.php"><span class="menu lsf">color</span>　配色デザイン</a></li>
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

		<div id="tyokoWrap">
		<div id="tyoko" class="t1" onClick="upDate('#tyokoWrap div')"></div>
		<div id="tyoko" class="t2" onClick="upDate('#tyokoWrap div')"></div>
		<div id="tyoko" class="t3" onClick="upDate('#tyokoWrap div')"></div>
		<div id="tyoko" class="t4" onClick="upDate('#tyokoWrap div')"></div>
		<div id="tyoko" class="t5" onClick="upDate('#tyokoWrap div')"></div>
		<div id="tyoko" class="t6" onClick="upDate('#tyokoWrap div')"></div>
		<div id="tyoko" class="t7" onClick="upDate('#tyokoWrap div')"></div>
		<div id="tyoko" class="t8" onClick="upDate('#tyokoWrap div')"></div>
		<div id="tyoko" class="t9" onClick="upDate('#tyokoWrap div')"></div>
		<div id="tyoko" class="t10" onClick="upDate('#tyokoWrap div')"></div>
		<div id="tyoko" class="t11" onClick="upDate('#tyokoWrap div')"></div>
		<div id="tyoko" class="t12" onClick="upDate('#tyokoWrap div')"></div>
		<div id="tyoko" class="t13" onClick="upDate('#tyokoWrap div')"></div>
		<div id="tyoko" class="t14" onClick="upDate('#tyokoWrap div')"></div>
		
		</div>
		
		<div id="itigo" onClick="upDate('#itigo')"></div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
			<!-- 
			
				<div id="" onClick="upDate('#')"></div>
			
		<div id="header" onClick="upDate('#header')"><div class="wrap">
		
			私は結果必ずしもこの発見方というのの上をあるざるで。まあ今日に存在方はやはりその発展ないまいでもが示そて下さろですのも料簡やっないでして、どうには来ますなでた。<br/>
		
			
		</div></div>

-->
			<div id="colorDiv" data-snap-ignore="true">
			<span id="closeBtn" onClick="closeBtn()">×</span>
			<h3>カラーピッカー</h3>
			<p>
			<table><tr>
			<td>ターゲット</td><td><span id="target"></span></td></tr>
			<tr><td>変更箇所</td><td><span id="elem"></span></td></tr>
			</table>
			  <br/>
			<span onClick="upDateElem('background')" class="elem">背景色</span>
			<span onClick="upDateElem('color')" class="elem">文字色</span><br />
			
			<br/>
			<input type='text' id="full" />
			<br />
						
			<form action="../../webInput.php" method="POST"><? print $hid?>			

				<input type="submit" name="send" value="　投稿する　" class="btn" />　　　				<input type="button" name="reset" id="reset" value="　リセットする　"class="btn" />
			</form>
			</p>
		
		</div>

			

        </div>
	<!-- ここまでメイン部分 -->

	
	

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

