<?php
/*-----------------------------------------------------------------------------
  概要      : 
            : http://localhost:1024/IW31_eigazaseki/login.php
  作成者    : 
  作成日    : 
  更新履歴  : 
-----------------------------------------------------------------------------*/
//処理部
session_start();


//処理部
require 'func.php';
$link =  funcFirst();		// $linkにコネクション情報



$disp= "";
$result = "";		
$no = "1";

//色オプション
$colorSel ="<selector id='colorSel' >";

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
			
			
						
			//色
			
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
						
						
						

						$colorDisp .="<div class='colorDisp' style='background-color : ".$siteDesColor.";width:".$divWidth."%'></div>";
						
						$colorClass .= " ".$siteDesColor;
	
					}
					$colorDisp.= "</div>";
				} else {			// 結果が０件の場合
					//結果保持用メモリを開放する
					mysql_free_result($result2);
					$disp = "ないよ";
				}
				$type="site";
				$typeName="Ｗｅｂデザイン";
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
				$type="color";
				$typeName="配色デザイン";
			}
			
			
			//こっから表

			$disp .=" <li class='mix ".$type." ".$siteNo." ".$userId."".$colorClass."'><a href='#' onclick=\"TINY.box.show({url:'value.php',post:'siteDesId=".$siteDesId."',width:1300,height:600,opacity:20,topsplit:3})\">";
			$disp .=" <p>".$typeName."<br />".$siteTitle."<br />";
			$disp .= "製作者:".$userId."<br />";
			$disp .= $siteCap."</p>";
			
			$disp .= $colorDisp;
			
			
			
			
			
			
			
			$disp.="</a>	</li>";
			
					
					
	}
} else {			// 結果が０件の場合
	//結果保持用メモリを開放する
	mysql_free_result($result);
	$disp = "ありませんでした。";
}



echo $disp;









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



</head>
<body>

</body>
</html>

