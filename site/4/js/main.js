$(document).ready(function(){
	
	//DIV‚ÌID–¼
	var num = 6;
	var idName = new Array('back','header','menuWrap','left','right','footer');
	
	//w’è‚·‚é‚Æ‚±‚ë‚ÌCSS–¼
	var elemNum = 2;
	var elem = new Array('background','color');
	
	var hidNameArray = new Array('back','color');
	
	//ID‚Ì”‚¾‚¯
	for( var i = 0; i< num ; i++) {
		//DIV–¼
		target = "#"+ idName[i];
		

		
		//w’è‚·‚é‚Æ‚±‚Ì‚©‚¸‚¾‚¯
		for( var l = 0; l < elemNum ; l++){ 
										
			//hid‚Ì’l‚ğŠi”[	
			hidNo = i + 1;
	
			hidName ="#"+hidNameArray[l] +hidNo;
							
			str = $(hidName).val(); /* “ü—Í‚³‚ê‚½’l‚ğŠi”[ */

			//F•Ï‚¦‚é‚æ
			$(target).css(elem[l], str);
		}
			
		
	
	}
});

