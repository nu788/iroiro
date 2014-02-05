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
$cnt = "1";
$opColorDisp = "";

//色オプション
$colorSel ="<selector id='colorSel' >";

// 検索ボタンが押されたら
if( isset( $_POST["send"])){
	
	$user = $_POST["user"];
	
	// ユーザの絞り込みするかどうか
	if( $user == ""){
		$sql = "SELECT * FROM sitedes";
	} else{
		$sql = "SELECT * FROM sitedes where userId LIKE '%".$user."%'";
	}
} else{
	$sql = "SELECT * FROM sitedes";
}
$result = funcDB($link,$sql);

//フィールド数
$num_rows = mysql_num_fields($result);

//件数
$num = mysql_num_rows($result) ;
$newNo = $num -8;

// 内容の取得
if($num > 0){		 // 結果が一件以上の場合。
	while ($row = mysql_fetch_row($result)) {
			$siteNo = $row[4];
			$siteTitle = $row[1];
			$siteCap = $row[2];
			$siteDesId = $row[0];
			$userId =$row[3];
			

			
			//サイト
			if( $siteNo != "2"){
				//色取得
				$sql = "SELECT * FROM sitedescolor where siteDesId = '".$siteDesId."' and siteDivName LIKE 'back%'";
				$result2 = funcDB($link,$sql);
				
				//フィールド数
				$num_rows = mysql_num_fields($result2);
				
				//件数
				$num = mysql_num_rows($result2) ;
				
				//色のdivの横幅
				$divWidth = 100/$num;
				
				$colorClass="";
				
				// 色の表示
				if($num > 0){		 // 結果が一件以上の場合。
					$colorDisp ="<div class='clearfix'>";
					while ($row = mysql_fetch_row($result2)) {
						$siteDesColor= $row[2];
						
						$opColorDisp .="<option style='background:".$siteDesColor."'>".$siteDesColor."</option>";
						

						$colorDisp .="<div class='colorDisp' style='background-color : ".$siteDesColor.";width:".$divWidth."%'></div>";
						
						$colorClass .= " ".substr($siteDesColor , 1, 6);
	
					}
					$colorDisp.= "</div>";
				} else {			// 結果が０件の場合
					//結果保持用メモリを開放する
					mysql_free_result($result2);
					$disp .= "ないよ1".$siteNo;
				}
				$type="site";
				$typeName="Ｗｅｂデザイン"; 
				
				$sumDisp="<iframe title='sum' type='text/html' src='site/".$siteNo."/disp.php?siteDesId=".$siteDesId."' id='sum' /></iframe>";

			}else {	//配色
				$sql = "SELECT * FROM sitedescolor where siteDesId = '".$siteDesId."'";
				$result2 = funcDB($link,$sql);
				
				//フィールド数
				$num_rows = mysql_num_fields($result2);
				
				//件数
				$num = mysql_num_rows($result2) ;
				$divWidth = 100/$num;

				$colorClass="";
				// 内容の取得
				if($num > 0){		 // 結果が一件以上の場合。
								$sumDisp="<iframe title='sum' type='text/html' src='valueColor.php?siteDesId=".$siteDesId."' id='sum' /></iframe>";

					$colorDisp ="<div  class='clearfix'>";
					while ($row = mysql_fetch_row($result2)) {
						$siteDesColor= $row[2];
						$opColorDisp .="<option style='background:".$siteDesColor."' value='".$siteDesColor."'>".$siteDesColor."</option>";
						$colorDisp .="<div class='colorDisp' style='background-color : ".$siteDesColor.";width:".$divWidth."%'></div>";
						
						$colorClass .= " ".substr($siteDesColor , 1, 6);
	
					}
					$colorDisp.= "</div>";
				} else {			// 結果が０件の場合
					//結果保持用メモリを開放する
					mysql_free_result($result2);
					$disp = "ないよ2";
				}
				$type="color";
				$typeName="配色デザイン";

			}
			
			
			//こっから表

			if($newNo < $siteDesId) { $new = "new"; }else { $new = ""; }

			$disp .=" <li class='mix ".$type." ".$siteNo." ".$userId."".$colorClass." page".$no." ".$new."'><a href='#' onclick=\"TINY.box.show({url:'value.php',post:'siteDesId=".$siteDesId."',width:1300,height:600,opacity:20,topsplit:3})\">";
			$disp .=" <p><strong>".$siteTitle."</strong>";
			$disp .= "<small> by ".$userId."</small><br />";
			$disp .= $siteCap."</p>";
			
			
			if( isset( $_POST["colorOnly"])){
				$disp .= $colorDisp;
			}else {
			$disp .= $sumDisp;
			}
			
			
			
			
			$disp.="</a>	</li>";
			
			$cnt++;
			
			if ($cnt > 12) {
				$cnt = 1;
				$no++;	

			}

			
					
					
	}
} else {			// 結果が０件の場合
	//結果保持用メモリを開放する
	mysql_free_result($result);
	$disp = "ありませんでした。";
}

unset($_SESSION["siteDesId"]);

$pageDisp= "";
for ($i = 0 ; $i < $no ; $i++){
	$pageNo = $no - $i;
	$dispI = $i+ 1;
	$pageDisp .= "<li class='filter' data-filter='page".$pageNo."'>".$dispI."</li> ";      

}

if ( isset( $_GET["back"] ) ) {
	$winDisp ="投稿が完了しました！";
}else {
 	$winDisp ="Now Loading...";
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
		showOnLoad: 'new',
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
	
		<div id="cover"></div>
		<div id="alert"><? print $winDisp; ?><br /><img src="img/preload.gif" /></div>
	
			<div id="openmenu" class="tub"><a href="#" id="open-left"></a></div>
			<div id="login" class="tub"><? print $link ?></div>
	
			<div id="scrollTop" class="tub"><a href="#top">↑</a></div>

	    
	    
	    	<header id="top">
		
		
			<h1>デザイン検索</h1>
			<form action="search.php" method="POST">			
			ユーザー検索
			<input type="text" name="user" />
			
			<input type="checkbox" name="colorOnly" />色のみ表示
			
			
			<input type="submit" name="send" id="send" value="検索" />
			<input type="submit" name="reset" id="reset" value="リセット" />
			</form>
			<br />
			
			<div id="wrap" class="clearfix">
			<ul id="mixNav" class="clearfix">
			    <li>絞り込み</li>
			    <li class="filter active" data-filter="all">すべて</li>
			    <li class="filter" data-filter="site">webデザインのみ</li>
			    <li class="filter" data-filter="color">配色デザインのみ</li>
			</ul>
			
			<ul class="controls clearfix">
				<li>表示順</li>
				<li class="sort" data-sort="default" data-order="desc">古い順</li>
				<li class="sort" data-sort="default" data-order="asc">新しい順</li>
				<li class="sort active" data-sort="default" data-order="desc">リセット</li>
			</ul>
			
			<ul id="mixNav" class="clearfix width100">
			    <li>色系統</li>                     
			    <li class="filter active" data-filter="all">すべて</li>
			    <li class="filter black" data-filter="black">黒</li> 
			    <li class="filter" data-filter="white">白</li> 
			    <li class="filter" data-filter="red">赤</li> 
			    <li class="filter" data-filter="pink">桃</li> 
			    <li class="filter" data-filter="vaio">紫</li> 
			    <li class="filter" data-filter="blue">青</li> 
			    <li class="filter" data-filter="green">緑</li> 
			    <li class="filter" data-filter="yellow">黄</li> 
			    <li class="filter" data-filter="yellow">橙</li> 

			</ul> 
					
		
			<ul id="mixNav" class="clearfix width100">
	
			    <li>ページ</li>
			    <li class="filter active" data-filter="all">すべて</li>
    			    <? print $pageDisp ?>

			</ul>

			
			</div>
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

