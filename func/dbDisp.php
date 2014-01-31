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
require 'func.php';
$link =  funcFirst();		// $linkにコネクション情報




$im = imagegrabscreen();
imagepng($im, "myscreenshot.png");
imagedestroy($im);



$disp= "";		

$disp .=     $funcColor('red','#ff00000');


// 入力した内容の受け取りとプログラムの実行

$disp.="ユーザーテーブル<br/><br/>";
$sql = "SELECT * FROM user ";
$disp .= funcDisp($link,$sql);

$disp.="<br/><hr><br/>";

$disp.="サイトテーブル<br/><br/>";
$sql = "SELECT * FROM site ";
$disp .= funcDisp($link,$sql);

$disp.="<br/><hr><br/>";

$disp.="ジャンルテーブル<br/><br/>";
$sql = "SELECT * FROM genre ";
$disp .= funcDisp($link,$sql);

$disp.="<br/><hr><br/>";

$disp.="サイトジャンルテーブル<br/><br/>";
$sql = "SELECT * FROM siteg ";
$disp .= funcDisp($link,$sql);

$disp.="<br/><hr><br/>";

$disp.="サイトDIVテーブル<br/><br/>";
$sql = "SELECT * FROM sitediv ";
$disp .= funcDisp($link,$sql);

$disp.="<br/><hr><br/>";

$disp.="サイトデザテーブル<br/><br/>";
$sql = "SELECT * FROM sitedes ";
$disp .= funcDisp($link,$sql);

$disp.="<br/><hr><br/>";

$disp.="サイトデザ詳細テーブル<br/><br/>";
$sql = "SELECT * FROM sitedescolor ";
$disp .= funcDisp($link,$sql);

$disp.="<br/><hr><br/>";

$disp.="メッセテーブル<br/><br/>";
$sql = "SELECT * FROM mes";
$disp .= funcDisp($link,$sql);

$disp.="<br/><hr><br/>";

$disp.="サイトコメントテーブル<br/><br/>";
$sql = "SELECT * FROM sitecom ";
$disp .= funcDisp($link,$sql);

$disp.="<br/><hr><br/>";

$disp.="サイトジャンルテーブル<br/><br/>";
$sql = "SELECT * FROM siteg ";
$disp .= funcDisp($link,$sql);

$disp.="<br/><hr><br/>";

$disp.="評価テーブル<br/><br/>";
$sql = "SELECT * FROM valu ";
$disp .= funcDisp($link,$sql);

$disp.="<br/><hr><br/>";

$disp.="サイト評価テーブル<br/><br/>";
$sql = "SELECT * FROM sitevalu ";
$disp .= funcDisp($link,$sql);

$disp.="<br/><hr><br/>";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
               "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HALシネマ</title>
</head>

<body>

<? print $disp;?>

</body>
</html>

