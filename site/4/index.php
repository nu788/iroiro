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

$_SESSION["siteId"] = '4';
$disp= "";
if( isset($_SESSION["#header"])){
	$disp = "4";
}

$hid= "";
$hid.="<input type='hidden' name='back1' id='backbackground' value='#fff' />";
$hid.="<input type='hidden' name='back2' id='headerbackground' value='#e5447a' />";
$hid.="<input type='hidden' name='back3' id='menuWrapbackground' value='#e5447a' />";
$hid.="<input type='hidden' name='back4' id='leftbackground' value='#fff' />";
$hid.="<input type='hidden' name='back5' id='rightbackground' value='#fff' />";
$hid.="<input type='hidden' name='back6' id='footerbackground' value='#e5447a' />";
$hid.="<input type='hidden' name='color1' id='backcolor' value='#fff' />";
$hid.="<input type='hidden' name='color2' id='headercolor' value='#fff' />";
$hid.="<input type='hidden' name='color3' id='menuWrapcolor' value='#fff' />";
$hid.="<input type='hidden' name='color4' id='leftcolor' value='#000' />";
$hid.="<input type='hidden' name='color5' id='rightcolor' value='#000' />";
$hid.="<input type='hidden' name='color6' id='footercolor' value='#fff' />";

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
$(function() {
	$('input#reset').click(function(){
	    if ( confirm('リセットしますか？')== true){
	    
	    	$("#back").css("background","#fff");
	    	$("#header").css("background","#e5447a");
	    	$("#menuWrap").css("background","#e5447a");
	    	$("#left").css("background","#fff");
	    	$("#right").css("background","#fff");
	    	$("#footer").css("background","#e5447a");
	    
	    	$("#back").css("color","#fff");
	    	$("#header").css("color","#fff");
	    	$("#menuWrap").css("color","#fff");
	    	$("#left").css("color","#000");
	    	$("#right").css("color","#000");
	    	$("#footer").css("color","#fff");
		    
    		$("backbackground").val("#fff");
    		$("headerbackground").val("#e5447a");
    		$("menuWrapbackground").val("#e5447a");
    		$("leftbackground").val("#fff");
    		$("rightbackground").val("#fff");
    		$("footerbackground").val("#e5447a");
		    
    		$("backbackground").val("#fff");
    		$("headerbackground").val("#fff");
    		$("menuWrapbackground").val("#fff");
    		$("leftbackground").val("#000");
    		$("rightbackground").val("#000");
    		$("footerbackground").val("#fff");

		
		
	    }
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

	<div id="back" onClick="upDate('#back')"></div>
		
		
		<div id="header" onClick="upDate('#header')">
		
		<h1>Makes</h1>
		
		</div>
		
		<p class="full"><img src="img/top1.jpg" /></p>
					
		<div id="menuWrap" onClick="upDate('#menuWrap')">
			<ul class="clearfix">
				<li>Menu</li>
				<li>photo</li>
				<li>menu</li>
				<li>reserve</li>
			</ul>
		</div>
		

		<div id="wrap" class="clearfix">
			
			<div id="left" onClick="upDate('#left')">
				<div id="about">
				
					<span id="out"></span>
					<p class="mida">About Us</p>
					
					<p class="content">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut volutpat pellentesque tortor vel feugiat. Aliquam erat volutpat. Nulla a nibh eu lorem posuere consectetur id vel libero. Sed eu quam eu enim convallis dapibus. Ut eu lectus laoreet neque mollis feugiat. Duis pulvinar justo ut nisi volutpat feugiat. Praesent pharetra lacinia enim id luctus. Etiam convallis nunc et bibendum congue. 			</p>
				
					</p>
				</div>
				
				<div id="update">
				
					<p class="mida">UpDate</p>
					
					<p class="content">
						2013.12.03 Campaign&fotter Update<br/>
						2013.12.02 Open!<br/>
					</p>
				
				</div>
			
			</div>
			
			<div id="right" onClick="upDate('#right')">
			
				<div id="cam">
				
					<p class="mida">Campaign</p>
					
					<p class="content">
						Nullam sit amet quam urna. Suspendisse mauris justo, malesuada tempor sapien eu, vulputate tristique purus. Duis nec ante velit. 
					</p>
				
				</div>
			
	
			
			
			</div>
			
		
		</div>
		
		<div id="footer" onClick="upDate('#footer')">
		
			Copyright &copy; 2013 Makesgrouop inc. All RIghts Reserved.
		
		
		</div>
		
		
		
	
	
	
	
	
	
	
	
	
	
	
			
			

        </div>
	<!-- ここまでメイン部分 -->

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

