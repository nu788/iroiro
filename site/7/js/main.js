$(document).ready(function(){
	
	//DIVのID名
	var num = 3;
	var idName = new Array('ue','man','sita');
	
	//指定するところのCSS名
	var elemNum = 1;
	var elem = new Array('background');
	
	var hidNameArray = new Array('back');
	
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

