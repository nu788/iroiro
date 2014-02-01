<?php


/*-----------------
汎用
---------------------------------------------*/
// $linkに接続の情報を格納して返却。
function funcFirst(){
	$url = "localhost";
	$user = "root";
	$pass = "root";
	$db = "iroiro";
		
	// MySQLへ接続する
	$link = mysql_connect($url,$user,$pass) or die("MySQLへの接続に失敗しました。");
	
	// 文字化け防止
	mysql_set_charset("utf8",$link);
	
	// データベースを選択する
	$sdb = mysql_select_db($db,$link) or die("データベースの選択に失敗しました。");
	
	return $link;
}

// 接続を閉じる。
function funcFinal($link){
	// MySQLへの接続を閉じる
	mysql_close($link) or die("MySQL切断に失敗しました。");
}





/*--------------
ログイン(login.php)
----------------------------------------------*/
function funcRogin($link,$sql,$inputPass){
	
	$msg="";
	// SQLの作成
	$result = mysql_query($sql) or die("クエリの送信に失敗しました。<br />SQL:".$sql."<br />".mysql_error());
	
	// 内容の取得
	if(mysql_num_rows($result) > 0){		 // 結果が一件以上の場合。
		while ($row = mysql_fetch_assoc($result)) {
			$id = $row['userId'];
			$pass = $row['userPass'] ;
			
		}
	} else {			// 結果が０件の場合
		$msg = "<strong><font color='#f00'>ＩＤが間違っています。</font></strong>";
		//結果保持用メモリを開放する
		mysql_free_result($result);
		return $msg;
	}
	
	
	// IDとパスワードの検証
	if($pass == $inputPass){		// 合っているとき
		$msg = "OK";
		
		
	} else {			// 間違っているとき（テスト用メッセージ）
		$msg = "<strong><font color='#f00'>パスワードが間違っています。</font></strong>";
	}
	
	
	//結果保持用メモリを開放する
	mysql_free_result($result);
	return $msg;
}


function funcDB($link,$sql){
	
	// SQLの作成
	$result = mysql_query($sql) or die("クエリの送信に失敗しました。<br />SQL:".$sql."<br />".mysql_error());
	
	
	
	
	return $result;
}


function funcDisp($link,$sql){
	
	$result = funcDB($link,$sql);
	$num_rows = mysql_num_fields($result);
	$num = mysql_num_rows($result) ;
	$msg=$num."件<br/><table><tr>";
	
	for ( $i = 0 ; $i < $num_rows; $i++){
		$msg.="<td>".mysql_field_name($result, $i)."</td>";
	}
			$msg.="</tr>";
	// 内容の取得
	if($num > 0){		 // 結果が一件以上の場合。
		while ($row = mysql_fetch_row($result)) {
			$msg.= "<tr>";
			for( $i = 0 ; $i < $num_rows; $i++){
				$msg.= "<td>".$row[$i]."</td>";
			}
			$msg.="</tr>";
			
		}
	} else {			// 結果が０件の場合
		//結果保持用メモリを開放する
		mysql_free_result($result);
		return $msg;
	}
	
	$msg .= "</table>";
	
	return $msg;
}





/* ----------------
確認＆完了画面
 -------------------------------------*/

// セッションの作成（全）と遷移
function func_sessionAll($id,$name,$tel,$mail,$secretQ,$secretA,$what,$sex,$birth,$adrK,$adr,$pass){
	
	$_SESSION['NewRegist']
		 = array($id,$name,$tel,$mail,$secretQ,$secretA,$what,$sex,$birth,$adrK,$adr,$pass);
}

function func_regist(){		// 新規登録処理
	
}




/* ----------------
 色識別

function funcColor($colorName,$color) {
	$red = array('255','0','0'
	
	
	$r = substr($color , 1, 3)  ;
	
	
	
	return $r;
	



}
 -------------------------------------*/



function screen() {
$browser = new COM("InternetExplorer.Application");
$handle = $browser->HWND;

$browser->Visible = true;
$browser->FullScreen = true;
$browser->Navigate("http://www.doyouphp.jp/");

/* Is it completely loaded? (be aware of frames!)*/
while ($browser->Busy) {
    com_message_pump(4000);
}
$im = imagegrabwindow($handle, 0);
$browser->Quit();

$new_x = 320;
$new_y = imagesy($im) * $new_x / imagesx($im);
$newim = imagecreatetruecolor($new_x, $new_y);
imagecopyresized($newim, $im, 0, 0, 0, 0, $new_x, $new_y, imagesx($im), imagesy($im));
imagepng($newim, "test.png");
}

?>

