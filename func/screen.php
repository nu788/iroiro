<?php
/*-----------------------------------------------------------------------------
  概要      : 
            : http://localhost:1024/IW31_eigazaseki/login.php
  作成者    : 
  作成日    : 
  更新履歴  : 
-----------------------------------------------------------------------------*/
//  HTTPヘッダーで文字コードを指定
//canvasデータがPOSTで送信されてきた場合
$canvas = $_POST["canvas_data"];
$imagepath = "../img/ss/" . $_POST["id"] . ".png";
 
//ヘッダに「data:image/png;base64,」が付いているので、それは外す
$canvas = preg_replace("/data:image\/png;base64,/i","",$canvas);

$canvas = preg_replace("/ /","+",$canvas);
$canvas = preg_replace("/\n/","",$canvas);
$canvas = base64_decode($canvas);

 
//まだ文字列の状態なので、画像リソース化
$image = imagecreatefromstring($canvas);
 
//画像として保存（ディレクトリは任意）
imagepng($image ,$imagepath);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
               "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HALシネマ</title>
</script>
</head>

<body>

</body>
</html>

