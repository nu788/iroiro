$(document).ready(function(){
	
	//DIVのID名
	var num = 6;
	var idName = new Array('back','header','menuWrap','left','right','footer');
	
	//指定するところのCSS名
	var elemNum = 2;
	var elem = new Array('background','color');
	
	var hidNameArray = new Array('back','color');
	
	//IDの数だけ
	for( var i = 0; i< num ; i++) {
		//DIV名
		target = "#"+ idName[i];
		

		
		//指定するとこのかずだけ
		for( var l = 0; l < elemNum ; l++){ 
										
			//hidの値を格納	
			hidNo = i + 1;
	
			hidName ="#"+hidNameArray[l] +hidNo;
							
			str = $(hidName).val(); /* 入力された値を格納 */

			//色変えるよ
			$(target).css(elem[l], str);
		}
			
		
	
	}
});

