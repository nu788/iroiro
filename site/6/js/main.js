$(document).ready(function(){
	
	//DIV��ID��
	var num = 6;
	var idName = new Array('back','header','menuWrap','left','right','footer');
	
	//�w�肷��Ƃ����CSS��
	var elemNum = 2;
	var elem = new Array('background','color');
	
	var hidNameArray = new Array('back','color');
	
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

