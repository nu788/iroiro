 /*
var tugCnt = 1;

function tugPlus() {
                     alert("aa");
	tugCnt++;
	
	var tugStr = $("#tug").val(); 
	
	tugStr += "<input type='text' name='tug"+ tugCnt +' />";
	
	$("#tug").html(tugStr);
	
}
*/
	
$(function() {
	$("#content").scroll(function () {
		var s = $(this).scrollTop();
		
		$("#openmenu").css('top',s+20);
		$("#login").css('top',s+90);
		
		$("#scrollTop").css('top',s+600);
	});

	inputCheck();
});


	
  function login(){
  
  

	$("#disp").html('Now Loading...');
	
	
	 var id=$("#id").val(); /* 入力された値を格納 */
	 var pass=$("#pass").val(); /* 入力された値を格納 */
	 
        $.post(
		"func/login_func.php", 
		{"id" : id, "pass" : pass}, 
		function(data){
	
		        if (data.length>0){
				var res = data.substr(0,2)
				$("#disp").html(data); /* 結果出力用のDIVにHTML文字列を設定する */
		        	
				 if( res == "OK")
				 {
				 	
					
					$.post(
						"func/session_func.php",
						{"id": id, "pass": pass},
						function(){
							window.location.href = 'myPage.php';
						}
					)
							
				 }
			}
		
		
	 	}
	)
}


function logout(){

	$.post(
		"func/logout_func.php",{},function(){ window.location.href='index.php'})	
	
}


function valueDisp(){
	
	 
        $.post(
		"func/valuDisp_func.php", 
		function(data){
	
		        if (data.length>0){
				$("#disp").html(data); /* 結果出力用のDIVにHTML文字列を設定する */
				
			}
		
		
	 	}
	)
	



}
function valuPut(value){
  

	 
        $.post(
		"func/valuPut_func.php", 
		{"value" : value}, 
		function(data){
	
		        if (data.length>0){
				var res = data.substr(0,0)
				
			}
		
		
	 	}
	)
	
	valueDisp();

}


function comDisp(){
	
	 
        $.post(
		"func/comDisp_func.php", 
		function(data){
	
		        if (data.length>0){
				$("#disp2").html(data); /* 結果出力用のDIVにHTML文字列を設定する */
				
			}
		
		
	 	}
	)
	



}


function comPut(){
  
	 var com=$("#com").val(); /* 入力された値を格納 */
	$("#disp2").html('Now Loading...');
	 
        $.post(
		"func/comPut_func.php", 
		{"com" : com}, 
		function(data){
	
		        if (data.length>0){
				var res = data.substr(0,0)
				$("#disp2").html('Thanks!'); /* 結果出力用のDIVにHTML文字列を設定する */
			}
		
		
	 	}
	)
	
	comDisp();
}




function userCheck() {

	

	var userId = $("#userId").val();
	var idCheck = $("#idCheck").text();
	
	var pass1  = $("#pass1").val();
	var pass2  = $("#pass2").val();
	var pass2Check = $("#pass2Check").text();
	
	var userName  = $("#userName").val();
	
	var add1  = $("#add1").val();
	var add2  = $("#add2").val();
	var add2Check = $("#add2Check").text();
	
	var com  = $("#com").val();
	
	
	//入力チェック
	var inputFlg = 0;
	
	if ( userId == "") { $("#idCheck").html("入力してください"); inputFlg = 1; }
	if( idCheck == "重複しています。") { $("#idCheck").html("重複しています"); inputFlg = 1; }
	
	if(( pass2Check != "")||( add2Check != "")) { inputFlg = 1; }
	
	
	if ( pass1 == "") { $("#pass1Check").html("入力してください"); inputFlg = 1; }
	if ( pass2 =="") { $("#pass2Check").html("入力してください"); inputFlg = 1; }
	
	if ( userName == "") { $("#nameCheck").html("入力してください"); inputFlg = 1; }
	
	if ( add1 == "") { $("#add1Check").html("入力してください"); inputFlg = 1; }
	if ( add2 == "") { $("#add2Check").html("入力してください"); inputFlg = 1; }
	
	if ( com == "" ) { com = "未入力"; }
	
	//全部入力されていたら
	if ( inputFlg == 0) {
		$("#userInput").css("display","none");
		$("#btnCheck").css("display","none");
		$("#btnBack").css("display","inline");
		$("#btnSend").css("display","inline");
		$("#userCheck").css("display","inline");
	
	
		var str ="<table>";
		str += "<tr><td>ユーザＩＤ（必須）</td><td>"+ userId +"</td></tr>";
		str += "<tr><td>パスワード（必須）</td><td>非表示</td></tr>";
		str += "<tr><td>ユーザ名（必須）</td><td>"+ userName +"</td></tr>";
		str += "<tr><td>メールアドレス（必須）</td><td>"+ add1 +"</td></tr>";
		str += "<tr><td>自己紹介</td><td>"+ com +"</td></tr>";
		str += "</table>";
		
		
		$("#userCheck").html(str);
	
	
	}



}

function userBack() {

		$("#userInput").css("display","inline");
		$("#btnCheck").css("display","inline");
		$("#btnBack").css("display","none");
		$("#btnSend").css("display","none");
		$("#userCheck").css("display","none");


}



function inputCheck() {
	
	$("#userId").each(function(){
		$(this).bind('keyup', hoge1(this));
	});
	function hoge1(elm){
		var v, old = elm.value;
		return function(){
			if(old != (v=elm.value)){
				old = v;
				var id = $(this).val();
	
			
			
			 
		        	$.post(
					"func/idCheck_func.php", 
					{"id" : id}, 
					function(data){
			
					        if (data.length>0){
							var res = data.substr(0,8)
	
							$("#idCheck").html(res); /* 結果出力用のDIVにHTML文字列を設定する */
				        	
						
						
						}
				 	}
				)
			}	
		}
	}
		
	$("#pass1").each(function(){
		$(this).bind('keyup', hoge2(this));
	});
	function hoge2(elm){
		var v, old = elm.value;
		return function(){
			if(old != (v=elm.value)){
				old = v;
				var pass2  = $("#pass2").val();
				var pass1 = $(this).val();
				
				if ( pass1 != pass2 ){ $("#pass2Check").html("一致していません。");
				}else {$("#pass2Check").html("");}		

			}	
		}
	}
	
	$("#pass2").each(function(){
		$(this).bind('keyup', hoge3(this));
	});
	function hoge3(elm){
		var v, old = elm.value;
		return function(){
			if(old != (v=elm.value)){
				old = v;
				var pass1  = $("#pass1").val();
				var pass2 = $(this).val();
				
				if ( pass1 != pass2 ){ $("#pass2Check").html("一致していません。");
				}else {$("#pass2Check").html("");}		


			}	
		}
	}
	
	$("#add1").each(function(){
		$(this).bind('keyup', hoge4(this));
	});
	function hoge4(elm){
		var v, old = elm.value;
		return function(){
			if(old != (v=elm.value)){
				old = v;
				var add2  = $("#add2").val();
				var add1 = $(this).val();
				
				if ( add1 != add2 ){ $("#add2Check").html("一致していません。");
				}else {$("#add2Check").html("");}		

			}	
		}
	}
	
	$("#add2").each(function(){
		$(this).bind('keyup', hoge5(this));
	});
	function hoge5(elm){
		var v, old = elm.value;
		return function(){
			if(old != (v=elm.value)){
				old = v;
				var add1  = $("#add1").val();
				var add2 = $(this).val();
				
				if ( add1 != add2 ){ $("#add2Check").html("一致していません。");
				}else {$("#add2Check").html("");}		


			}	
		}
	}
	
	
}