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

//ID
$userId = $_SESSION["id"];

// 入力した内容の受け取りとプログラムの実行
$sql = "SELECT * FROM user where userId ='".$userId."'";
$result = funcDB($link,$sql);

//フィールド数
$num_rows = mysql_num_fields($result);

//件数
$num = mysql_num_rows($result) ;


// 内容の取得
if($num > 0){		 // 結果が一件以上の場合
	while ($row = mysql_fetch_row($result)) {
		$userName =$row[2];
		$userText = $row[3];
		$userAdd = $row[4];
	
	}
}




$disp= "";
$result = "";		
$no = "1";


// 入力した内容の受け取りとプログラムの実行
$sql = "SELECT * FROM sitedes where userId ='".$userId."'";
$result = funcDB($link,$sql);

//フィールド数
$num_rows = mysql_num_fields($result);

//件数
$num = mysql_num_rows($result) ;


// 内容の取得
if($num > 0){		 // 結果が一件以上の場合
	while ($row = mysql_fetch_row($result)) {

			$siteNo = $row[4];
			$siteTitle = $row[1];
			$siteCap = $row[2];
			$siteDesId = $row[0];
			$userId =$row[3];
			
			
						
			//色
			
			//サイト
			if( $siteNo != "2"){
				$type="site";
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
						
						
						

						$colorDisp .="<div class='colorDisp' style='background-color : ".$siteDesColor.";width:".$divWidth."%'></div>";
						
						$colorClass .= " ".$siteDesColor;
	
					}
					$colorDisp.= "</div>";
				} else {			// 結果が０件の場合
					//結果保持用メモリを開放する
					mysql_free_result($result2);
					$disp = "ないよ";
				}
				
				
			}else {	//配色
				$type="color";

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
					$colorDisp ="<div  class='clearfix'>";
					while ($row = mysql_fetch_row($result2)) {
						$siteDesColor= $row[2];
						
						$colorDisp .="<div class='colorDisp' style='background-color : ".$siteDesColor.";width:".$divWidth."%'></div>";
						
						$colorClass .= " ".$siteDesColor;
	
					}
					$colorDisp.= "</div>";
				} else {			// 結果が０件の場合
					//結果保持用メモリを開放する
					mysql_free_result($result2);
					$disp = "ないよ";
				}
			}
			
			
			//こっから表

			$disp .=" <li class='mix ".$type." ".$siteNo." ".$userId."".$colorClass."'><a href='#' onclick=\"TINY.box.show({url:'value.php',post:'siteDesId=".$siteDesId."',width:1300,height:600,opacity:20,topsplit:3})\">";
			$disp .=" <p>".$type."<br />".$siteTitle."<br />";
			$disp .= $siteCap."</p>";
			
			$disp .= $colorDisp;
			
			
			
			

			
			
			$disp.="</a>	</li>";
			
					
					
	}
} else {			// 結果が０件の場合
	//結果保持用メモリを開放する
	mysql_free_result($result);
	$disp = "ないよ";
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
	
			<div id="openmenu" class="tub"><a href="#" id="open-left"></a></div>
			<div id="login" class="tub"><a href="#" class="lsf"><span onClick="logout()">×</span></a></div>
			

		
		<article id="myPage">
		
			<section id="info">
				<h2>myPage</h2>
				
				<p class="wrap">
					ユーザ名：<? print $userName;?><br />
					
					新着情報はありません。
					
					
				</p>
			
			</section>
		
			<section id="myWork">
				<h2>自分の作品</h2>
			
				<ul id="Grid">
					<? print $disp ?>
				</ul>	

			
			</section>
			
			<section id="favoUser">
				<h2>お気に入りユーザ</h2>
				
				<p class="wrap">
					お気に入りユーザはまだいません。<br />
				
				</p>
			
			</section>
			
			<section id="mes">
				<h2>メッセージ</h2>
				
				<p class="wrap">
					メッセージはまだありません。<br />
				
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

