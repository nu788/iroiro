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


$_SESSION["siteId"] = '3';
$disp= "";
if( isset($_SESSION["#header"])){
	$disp = "3";
}

if( isset($_GET["siteDesId"])){
	

echo "aa";
	
	//処理部
	require '../../func/func.php';
	$link =  funcFirst();		// $linkにコネクション情報
	
	$disp= "";
	$result = "";		
	$no = "3";
	$hid ="";
	// 入力した内容の受け取りとプログラムの実行
	$sql = "select * from sitedescolor where siteDesId = '".$_GET["siteDesId"]."'";
	$result = funcDB($link,$sql);
	
	//フィールド数
	$num_rows = mysql_num_fields($result);
	
	//件数
	$num = mysql_num_rows($result) ;
		$disp = "ないよ";
	// 内容の取得
	if($num > 0){		 // 結果が一件以上の場合。
		while ($row = mysql_fetch_row($result)) {
			$divName = $row[1];
			$color = $row[2];
			
			$hid.="<input type='hidden' name='".$divName."' id='".$divName."'  value='".$color."' />";
			
		
		}
	} else {			// 結果が０件の場合
		//結果保持用メモリを開放する
		mysql_free_result($result);
		$disp = "ないよ";
	}



	
	
}else{
	

	$hid= "";
	$hid.="<input type='hidden' name='back1' id='back1' value='".$_SESSION["back1"]."' />";
	$hid.="<input type='hidden' name='back2' id='back2' value='".$_SESSION["back2"]."' />";
	$hid.="<input type='hidden' name='back3' id='back3' value='".$_SESSION["back3"]."' />";
	$hid.="<input type='hidden' name='back4' id='back4' value='".$_SESSION["back4"]."' />";
	$hid.="<input type='hidden' name='back5' id='back5' value='".$_SESSION["back5"]."' />";
	$hid.="<input type='hidden' name='back6' id='back6' value='".$_SESSION["back6"]."' />";
	$hid.="<input type='hidden' name='color1' id='color1' value='".$_SESSION["color1"]."' />";
	$hid.="<input type='hidden' name='color2' id='color2' value='".$_SESSION["color2"]."' />";
	$hid.="<input type='hidden' name='color3' id='color3' value='".$_SESSION["color3"]."' />";
	$hid.="<input type='hidden' name='color4' id='color4' value='".$_SESSION["color4"]."' />";
	$hid.="<input type='hidden' name='color5' id='color5' value='".$_SESSION["color5"]."' />";
	$hid.="<input type='hidden' name='color6' id='color6' value='".$_SESSION["color6"]."' />";
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
<script type="text/javascript" src="../../js/main.js"></script>



</head>
<body>
	
		
		<div id="header"><div class="wrap">
		
			ヘッダー<br/>   <? print $disp ?>
		
			
		</div></div>


		
		
		<div id="test1"><div class="wrap">
			
			せくしょん１
		</div></div>
		
			
		<div id="test2"><div class="wrap">
			せくしょん２<? print $disp ; ?>
			
			
		</div></div>
			
		
		<div id="footer"><div class="wrap">
			ふったー
		
		</div></div>
			
<? print $hid?>			
            
        </div>
	<!-- js--><script type="text/javascript" src="js/main.js"></script>
	
         <script type="text/javascript" src="../../js/html2canvas.js"></script>
    <script type="text/javascript">

	
	html2canvas(document.body,{
		onrendered: function(canvas) {
			dataURI = canvas.toDataURL('image/png');
			$('img').attr('src',dataURI);
 		 }  ,
		 timeout: 1000
	});

$(function(){
	
 	   $.post(
			"../../func/screen.php", 
			{"id" : "test", "canvas_data" : dataURI}, 
			function(data){
		        	
	 		}
		)
	
});


    </script>


</body>
</html>

