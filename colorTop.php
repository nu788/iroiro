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


$_SESSION["siteId"] = '1';
$disp= "";
if( isset($_SESSION["#header"])){
	$disp = "1";
}

$hid= "";
$hid.="<input type='hidden' name='divNum' id='divNum' value='5' />";
for( $i = 1; $i <=10; $i++){
	$hid.="<input type='hidden' name='color".$i."Hid' id='color".$i."Hid' value='#fff' />";
	
}
$hid.="<input type='hidden' name='phpFlag' id='phpFlag' value='Input' />";	
$_SESSION["siteId"] = "2";	
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
<link rel="stylesheet" type="text/css" href="css/spectrum.css" />
<link rel="stylesheet" type="text/css" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css" />

<!-- js-->

<script src="js/jquery.js"></script>
<script src="js/jquery.pep.min.js"></script>
<script>
  jQuery(function($) {
    // pep is super simple...but there are wayyy
    // more options doc'd on github.
    $('#colorDiv').pep({
  useCSSTranslation: false,
  constrainTo: 'window'
}) 
  });
</script>

<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/spectrum.js"></script>

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
        <div id="content" class="snap-content colorWrap">
	
		<div id="colorS">
			<div id="color1" onClick="upDate('#color1')"></div>
			<div id="color2" onClick="upDate('#color2')"></div>
			<div id="color3" onClick="upDate('#color3')"></div>
			<div id="color4" onClick="upDate('#color4')"></div>
			<div id="color5" onClick="upDate('#color5')"></div>
			<div id="color6" onClick="upDate('#color6')"></div>
			<div id="color7" onClick="upDate('#color7')"></div>
			<div id="color8" onClick="upDate('#color8')"></div>
			<div id="color9" onClick="upDate('#color9')"></div>
			<div id="color10" onClick="upDate('#color10')"></div>
		</div>
		

			
		<div id="colorDivFlat">
			<p>
			<table><tr>
			<td>ターゲット</td><td><span id="target"></span></td></tr>
			<tr><td>色の数</td><td><span onClick="divPlus()" class="btn" >増やす</span><span onClick="divMin()" class="btn" >減らす</span></td></tr>
			</table>
			<input type='text' id="full" />
						
			<form action="colorInput.php" method="POST"><? print $hid?>						<input type="submit" name="send"  class="btn" value="投稿する" />  
			</form>
			</p>
		
		</div>
			

        </div>
	<!-- ここまでメイン部分 -->

	
<script type="text/javascript" src="js/docs.js"></script>

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

