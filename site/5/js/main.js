$(document).ready(function(){
	
	//DIV��ID��
	var num = 2;
	var idName = new Array('back','maru');
	
	//�w�肷��Ƃ����CSS��
	var elemNum = 1;
	var elem = new Array('background');
	
	var hidNameArray = new Array('back');
	
	//ID�̐�����
	for( var i = 0; i< num ; i++) {
		//DIV��
		target = "#"+ idName[i];
		
		
		//�w�肷��Ƃ��̂�������
		for( var l = 0; l < elemNum ; l++){ 
										
			//hid�̒l���i�[	
			hidNo = i + 1;
	
			hidName ="#"+hidNameArray[l] +hidNo;
							
			str = $(hidName).val(); /* ���͂��ꂽ�l���i�[ */

			//�F�ς����
			$(target).css(elem[l], str);
			
		}
			
		
	
	}
});

