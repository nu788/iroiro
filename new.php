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
<link rel="stylesheet" type="text/css" href="css/marsonry.css" />
<link rel="stylesheet" type="text/css" href="css/typicons.min.css" />

<link rel="stylesheet" type="text/css" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css" />



<!-- js -->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="js/tinybox.js"></script>

<script type="text/javascript" src="js/main.js"></script>


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
	

		<article id="myPage">
		
			<section id="info">
				<h2>新規登録</h2>
					<form action="newPut.php" method="POST">			
				<p class="wrap">
				
						
						<table id="userInput" class="wrap">
	                                        	<tr>
								<td width="200">ユーザＩＤ（必須）</td>
								<td><input type="text" name="userId" id="userId"/><span id="idCheck"></span></td>
							</tr>
	                                        	<tr>
								<td>パスワード（必須）</td>
								<td><input type="text" name="pass1" id="pass1" /><span id="pass1Check"></span><br /><input type="text" name="pass2" id="pass2" />（確認）<span id="pass2Check"></span></td>
							</tr>
	                                        	<tr>
								<td>ユーザ名（必須）</td>
								<td><input type="text" name="userName" id="userName" /><span id="nameCheck"></span></td>
							</tr>
	                                        	<tr>
								<td>メールアドレス（必須）</td>
								<td><input type="text" name="add1" id="add1" /><span id="add1Check"></span><br /><input type="text" name="add2" id="add2" />（確認）<span id="add2Check"></span></td>
							</tr>
						
	                                        	<tr>
								<td>自己紹介</td>
								<td><textarea name="text" id="com"></textarea></td>
							</tr>
						
						                                                                                
						</table>
						
						<span id="userCheck" class="wrap">
						
						
						
						</span>
												
						<input type="button" name="check" id="btnCheck" onClick="userCheck()" value="確認する" />
						
						<input type="button" name="back" id="btnBack" onClick ="userBack()" value="修正する" />
						<input type="submit" name="send" id="btnSend" value="登録する" />
						
				</p>
			
					</form>
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

