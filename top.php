<?php
/*-----------------------------------------------------------------------------
  概要      : 
            : http://localhost:1024/IW31_eigazaseki/login.php
  作成者    : 
  作成日    : 
  更新履歴  : 
-----------------------------------------------------------------------------*/

//  HTTPヘッダーで文字コードを指定
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
<link rel="stylesheet" type="text/css" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/snap.css" />
<link rel="stylesheet" type="text/css" href="css/marsonry.css" />


<!-- js -->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>

<script type="text/javascript" src="js/main.js"></script>

<!--

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="js/jquery.infinitescroll.min.js"></script>
-->
    <style type="text/css">
      /* last modified: 1 Dec 98 */

      html {
        font: 10px/1 Verdana, sans-serif;
        background-color: blue;
        color: white;
      }

      body {
        margin: 1.5em;
        border: .5em solid black;
        padding: 0;
        width: 48em;
        background-color: white;
      }

      dl {
        margin: 0;
        border: 0;
        padding: .5em;
      }

      dt {
        background-color: rgb(204,0,0);
        margin: 0;
        padding: 1em;
        width: 10.638%; /* refers to parent element's width of 47em. = 5em or 50px */
        height: 28em;
        border: .5em solid black;
        float: left;
      }

      dd {
        float: right;
        margin: 0 0 0 1em;
        border: 1em solid black;
        padding: 1em;
        width: 34em;
        height: 27em;
      }

      ul {
        margin: 0;
        border: 0;
        padding: 0;
      }

      li {
        display: block; /* i.e., suppress marker */
        color: black;
        height: 9em;
        width: 5em;
        margin: 0;
        border: .5em solid black;
        padding: 1em;
        float: left;
        background-color: #FC0;
      }

      #bar {
        background-color: black;
        color: white;
        width: 41.17%; /* = 14em */
        border: 0;
        margin: 0 1em;
      }

      #baz {
        margin: 1em 0;
        border: 0;
        padding: 1em;
        width: 10em;
        height: 10em;
        background-color: black;
        color: white;
      }

      form {
        margin: 0;
        display: inline;
      }

      p {
        margin: 0;
      }

      form p {
        line-height: 1.9;
      }

      blockquote {
        margin: 1em 1em 1em 2em;
        border-width: 1em 1.5em 2em .5em;
        border-style: solid;
        border-color: black;
        padding: 1em 0;
        width: 5em;
        height: 9em;
        float: left;
        background-color: #FC0;
        color: black;
      }

      address {
        font-style: normal;
      }

      h1 {
        background-color: black;
        color: white;
        float: left;
        margin: 1em 0;
        border: 0;
        padding: 1em;
        width: 10em;
        height: 10em;
        font-weight: normal;
        font-size: 1em;
      }
    </style>
  </head>
  <body>
        <a class="btn btn-primary" id="startBtn">screenshot jpeg</a>
      <span class="label">ここにキャプチャが表示される</span>
    <img src="" id="area" />

    <script type="text/javascript" src="js/html2canvas.js"></script>
    <script type="text/javascript">
    
    $(function(){
	
       setTimeout( html2canvas(document.body,{
		onrendered: function(canvas) {
			dataURI = canvas.toDataURL('image/png');
			$('img').attr('src',dataURI);
 		 }
	});
	        
	$(function() {
 	   $.post(
			"func/screen.php", 
			{"id" : "test2", "canvas_data" : dataURI}, 
			function(data){
		        	
	 		}
		)
	});
	
    </script>
  

</body>
</html>

