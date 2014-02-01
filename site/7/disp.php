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

$_SESSION["siteId"] = '7';
$disp= "";
if( isset($_SESSION["#header"])){
	$disp = "7";
}

if( isset($_GET["siteDesId"])){
	


	
	//処理部
	require '../../func/func.php';
	$link =  funcFirst();		// $linkにコネクション情報
	
	$disp= "";
	$result = "";		
	$no = "7";
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
	
	for( $i = 1 ; $i <=6 ; $i++)
	{
		$target= "back".$i;
		$hid.="<input type='hidden' name='".$target."' id='".$target."' value='".$_SESSION[$target]."' />";
		$hid.="<input type='hidden' name='color". $i ."' id='color". $i ."' value='".$_SESSION["color". $i ]."' />";
		
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
  $(function() {
	$("body").scroll(function () {
		var s = $(this).scrollTop();
		
		$("#back").css('top',s);
	});
});

</script>

<script type="text/javascript" src="../../js/jquery.min.js"></script>

<script type="text/javascript" src="../../js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="../../js/main.js"></script>



</head>
<body style="overflow-x:hidden;overflow-y:scroll;">
	<div id="ue" onClick="upDate('#ue')"></div>

	<div id="man" onClick="upDate('#man')"></div>
	<div id="sita" onClick="upDate('#sita')"></div>
		
			
<? print $hid?>			
            
        </div>
	<!-- js--><script type="text/javascript" src="js/main.js"></script>
	


</body>
</html>

