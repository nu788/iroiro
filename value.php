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
include_once ('func/func.php');
$link =  funcFirst();		// $linkにコネクション情報

$disp= "";
$result = "";
$siteInfo = "";		
$no = "1";
$hid ="";

$_SESSION["siteDesId"] = $_POST["siteDesId"];

$msg = "1";

// 色取得
$sql = "SELECT * FROM sitedescolor where siteDesId = '".$_POST["siteDesId"]."'";
$result = funcDB($link,$sql);

//フィールド数
$num_rows = mysql_num_fields($result);

//件数
$num = mysql_num_rows($result) ;


// hiddenに色はきだし
if($num > 0){		 // 結果が一件以上の場合。
	while ($row = mysql_fetch_row($result)) {
		$divName = $row[1];
		$divColor = $row[2];
		$hid.="<input type='hidden' name='".$divName."'  value='".$divColor."' />";
		$_SESSION[$divName]  = $divColor;
		
		echo $_SESSION[$divName];
	
	}
} else {			// 結果が０件の場合
	//結果保持用メモリを開放する
	mysql_free_result($result);
	$disp = "ないお1";
}


//デザインの情報取得
$sql = "SELECT siteId FROM sitedes where siteDesId = '".$_POST["siteDesId"]."'";
$result = funcDB($link,$sql);
while ($row = mysql_fetch_row($result)) {
	$disp = "<iframe src='site/".$row[0]."/disp.php' id='winDisp'></iframe>";

}




//サイト詳細

$sql = "SELECT * FROM sitedes where siteDesId = '".$_POST["siteDesId"]."'";
$result = funcDB($link,$sql);

//フィールド数
$num_rows = mysql_num_fields($result);

//件数
$num = mysql_num_rows($result) ;


// 内容の取得
if($num > 0){		 // 結果が一件以上の場合。
	while ($row = mysql_fetch_row($result)) {
		$siteNo = $row[4];
		$siteTitle = $row[1];
		$siteCap = $row[2];
		$siteDesId = $row[0];
		$userId =$row[3];


		
		//こっから表
		
		$siteInfo .=" <p>デザインタイトル：".$siteTitle."<br />";
		$siteInfo .= "製作者:".$userId."<br />説明：";
		$siteInfo .= $siteCap."</p>";
		
				
		//コメント詳細
		
		$sql = "SELECT * FROM sitecom where siteDesId = '".$_SESSION["siteDesId"]."' order by date desc";
		$result = funcDB($link,$sql);
		
		//フィールド数
		$num_rows = mysql_num_fields($result);
		
		//件数
		$num = mysql_num_rows($result) ;
		
		$siteCom ="コメント:<Br />";
		// 内容の取得
		if($num > 0){		 // 結果が一件以上の場合。
			while ($row = mysql_fetch_row($result)) {
				$siteDesId = $row[0];
				$userId =$row[1];
				$text = $row[2];
				$date = $row[3];
				
				//こっから表
				
				$siteCom .=" <p>・".$text;
				$siteCom .= "　by ".$userId." ";
				$siteCom .= "<br /></p>";
				
				
			}
		}

		
		
		//評価詳細
		//初期化
		for ($i = 1 ; $i <= 6 ; $i++){
		
			$valucnt[$i] = 	0;	
		
		}
		$valuDisp ="";
		
		$valuName =array('かわいい','クール','斬新','面白い','大人っぽい','ハイセンス');
		
		
		$sql = "SELECT * FROM sitevalu where siteDesId = '".$_SESSION["siteDesId"]."'";
		$result = funcDB($link,$sql);
		
		//フィールド数
		$num_rows = mysql_num_fields($result);
		
		//件数
		$num = mysql_num_rows($result) ;
		
				
		
		// 内容の取得
		if($num > 0){		 // 結果が一件以上の場合。
			while ($row = mysql_fetch_row($result)) {
				$valuId = $row[2];
				
				
				$valucnt[$valuId]++;
		
				
			}
		}
		
		//表示
		
		for ($i = 1 ; $i <= 6 ; $i++){
			$nameI = $i -1;
			$valuDisp .="<span name='v".$i."' onClick='valuPut(".$i.")' class='value' >".$valucnt[$i]."pt<br />".$valuName[$nameI]."</span>";
		
		
		}

		
				
		if( $siteNo != "2"){
			$disp = "<iframe src='site/".$siteNo."/disp.php' id='winDisp'></iframe>";
		}else{
			$disp = "<iframe src='valueColor.php?siteDesId=".$_SESSION["siteDesId"]."' id='winDisp'></iframe>";
		}


		
		
	}
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
<script type="text/javascript" src="js/value.js"></script>

</head>
<body>
	
	
	
	<!-- こっからメイン部分 -->
        <div id="content" class="snap-content">


		
		<ul id="value" class="clearfix">
			
			<li><? print $siteInfo ?><span id="disp2"><? print $siteCom ?></span></li>

			
			<li>	                    
				<h3>評価する！</h3>
				<span id="disp" onClick="value()"><? print $valuDisp ?></span>
				
				<input type="text" name="com" id="com" ></input>
				<input type="button" name="send" value="コメントする" onClick="comPut()" />      <br />


			
			</li>
		
		</ul>
		
		



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

