//������
var target = "none";
var elem ="background";


//�^�[�Q�b�g�iDIV���j�ύX
function upDate(strTar){
    target= strTar;
    
    //�J���[�p���b�g�ɕ\��
    $("#target").html(target);
    $("#elem").html(elem);
    
    //�J���[�p���b�g��\��    
    $("div#colorDiv").css("display","inline");
    
}

//�G�������g�i�ς���ꏊ�j��ύX
function upDateElem(strElem){
    elem= strElem;
    $("#elem").html(elem);
}
            
//�F�ύX
function updateBorders(color) {
    //�F�ύX
    $(target).css(elem, color.toHexString());
    
    //hidden�}��
    $(target+""+elem).val(color);
    $(target+"Hid").val(color);
    

}


function closeBtn(){
    $("div#colorDiv").css("display","none");
}



function colorWidth(){
	divCnt = 100/divNum;
	   $("div#colorS div").css("width",divCnt+"%");
   	 $("#divNum").val(divNum);
}
function divPlus(){
        if( divNum != 10){
	divNum++;
	colorWidth();
	}
		
}
function divMin(){
        if( divNum != 2){
		divNum--;
		colorWidth();
	}
		
}

function divColorRun(){
         for( i =1 ; i <= 10; i++){
	      var color = Math.floor(Math.random() * 0xFFFFFF).toString(16);	//#RRGGBB���擾
		for(count = color.length; count < 6; count++){
			color = "0" + color;     				//��ʂ�0��⊮����
		}
		color = "#" + color;      
		$("div#colorS div#color"+i).css("background",color);
		$("#color"+i+"Hid").val(color);
	}
}

function divColorPut(){
         for( i =1 ; i <= 10; i++){
	 	color = $("#color"+i+"HidPut").val();
		$("div#colorS div#color"+i).css("background",color);
	}
}

$(function() {

	divNum =   $("#divNum").val();

      colorWidth();
       
      if ($('#phpFlag').is('*'))  {
             divColorRun();
      }else{
     	divColorPut(); 
      }
      
      

$("#full").spectrum({                           
    color: "#fff",
    flat: true,
    showInput: true,
    className: "colorP",
    showInitial: true,
    showPalette: true,
    showSelectionPalette: true,
    showAlpha: true,
    maxPaletteSize: 100,
    maxSelectionSize: 5,
    chooseText: "change!",
    cancelText: "cancel",
    preferredFormat: "hex",
    localStorageKey: "spectrum.demo",
    move: function (color) {
        updateBorders(color);
    },
    show: function () {

    },
    beforeShow: function () {

    },
    hide: function (color) {
        updateBorders(color);
    },

    palette: [
        ["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)", /*"rgb(153, 153, 153)","rgb(183, 183, 183)",*/
        "rgb(204, 204, 204)", /*"rgb(239, 239, 239)", "rgb(243, 243, 243)",*/ "rgb(255, 255, 255)"],
        ["rgb(251,180,196)","rgb(253,205,183)","rgb(255,255,179)","rgb(204,235,197)","rgb(179,205,227)",
	"rgb(253,26,28)","rgb(255,127,0)","rgb(255,230,0)","rgb(51,162,6)","rgb(9,63,134)",
	"rgb(178,68,67)","rgb(178,89,56)","rgb(153,127,66)","rgb(90,128,75)","rgb(30,98,130)",	
        ]
    ]
});


prettyPrint();


});
