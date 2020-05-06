jQuery(document).ready(function(){
/* ------------- freeze tools menu ---------------------------- */
    var offset = $('.tools').offset();	
    $(window).scroll(function() {
        if ($(window).scrollTop() > offset.top) {
		   $('.tools').addClass('freeze');
        } else {
           $('.tools').removeClass('freeze');
        };
    });

});


//////////
var lastid=-1;
	function W(word,id) {
		  PlayIt (word);
		  if (lastid!=-1) $("span#s"+lastid).toggleClass("active");
		  $("span#s"+id).toggleClass("active");
		  $("em#"+id).text('...'); 
		  jQuery.getJSON('https://translate.yandex.net/api/v1.5/tr.json/translate', {lang: "en-ru", key: "trnsl.1.1.20130722T145627Z.d8b0ebf2d77e708f.10322b0cf4d1ff37c1ace4c9f1037c36a9a247f1", text: word}, function(json){
			$("em#"+id).text(json.text[0]);  
		 });
		  lastid=id;
	}
	
	function PlayIt(word) {
	playHTML5(word,1); 
	/*	
	if(FlashDetect.installed){
				 //alert("Flash is insalled on your Web browser."); 
				  playFlash(word); 
			}else{
				//alert("Flash is required to enjoy this site."); 
				playHTML5(word,1);  
			}	*/
	}

	function playFlash(word){
		var movie = (navigator.appName.indexOf("Microsoft")!=-1 ? window : document)["BridgeMovie"]    
   		movie.sendFromJS(word);       
	}
	
	function playHTML5(word,volume){
			var audio = document.createElement("audio");
			audio.src = "http://tts-api.com/tts.mp3?q="+word;
			audio.addEventListener("ended", function () {
				document.removeChild(this);
			}, false);
			audio.volume=volume;
			audio.play();   
			
			//alert (audio.volume);
		}