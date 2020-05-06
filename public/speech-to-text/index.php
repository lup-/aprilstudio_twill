<?
if (!isset($_GET['text'])) $_GET['text']='A banana is an edible fruit produced by several kinds of large herbaceous flowering plants of the genus Musa. (In some countries, bananas used for cooking may be called plantains.) The fruit is variable in size, color and firmness, but is usually elongated and curved, with soft flesh rich in starch covered with a rind which may be green, yellow, red, purple, or brown when ripe.';

$origibal_text=(htmlspecialchars($_GET['text']));
$template=$origibal_text.' ';

//$template = str_replace("\n"," <br> ", $template);
$template=preg_replace('/\./', '. ', $template);
$template_lower=strtolower($template);

//$template_lower = str_replace("\n"," <br> ", $template_lower);
$template_lower=preg_replace('/\?/', '', $template_lower);
$template_lower=preg_replace('/\!/', '', $template_lower);
$template_lower=preg_replace('/\./', '', $template_lower);
$template_lower=preg_replace('/\,/', '', $template_lower);
$template_lower=preg_replace('/\;/', '', $template_lower);
$template_lower=preg_replace('/\:/', '', $template_lower);
$template_lower=preg_replace('/\'/', '', $template_lower);
$template_lower=preg_replace('/\"/', '', $template_lower);
$template_lower=preg_replace('/\"/', '', $template_lower);
$template_lower=preg_replace('/\"/', '', $template_lower);
$template_lower=preg_replace('/\(/', '', $template_lower);
$template_lower=preg_replace('/\)/', '', $template_lower);
$template_lower=preg_replace('/\[/', '', $template_lower);
$template_lower=preg_replace('/\]/', '', $template_lower);
$template_lower=preg_replace('/\-/', '', $template_lower);

$template_lower=preg_replace('/&quot/', '', $template_lower);
$template_lower=preg_replace('/&amp/', '', $template_lower);

$n1=preg_match_all('/(.*?) /',$template,$res);

  if ($n1!=0){
    $r=$res[1];

    for ($i=0;$i<$n1;$i++){
      $var[]=$r[$i];
        if (@$empty=="1"){
            $value[$r[$i]]="";
        }
        @$vars++;
    }
  }  
  
$n2=preg_match_all('/(.*?) /',$template_lower,$res2);

  if ($n2!=0){
    $r=$res2[1];

    for ($i=0;$i<$n2;$i++){
      $var2[]=$r[$i];
        if (@$empty=="1"){
            $value[$r[$i]]="";
        }
        @$vars++;
    }
  } 
  

// вывод
$word_list='<i class="playbtn" onClick="PlayAll(\''.$origibal_text.'\');"></i>';
	for ($irt=0;$irt<$vars;$irt++){
		  $word_list=$word_list.'<span href=#w onClick="W(\''.$var2[$irt].'\','.$irt.');"  id="s'.$irt.'">'.$var[$irt].'<em id="'.$irt.'"></em></span> ';
		  $wordArray=$wordArray.'"'.$var2[$irt].'",';
	}
	
	//$wordArray='"'.$origibal_text.'",';
	$wordArray="";
	$var2lenght = count($var2); 
	for ($irt=0;$irt<$var2lenght;$irt++){
		  if ($irt==0)$wordArray=$wordArray.'"'.$var2[$irt].'"';
		  else $wordArray=$wordArray.',"'.$var2[$irt].'"';
	}
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Speakenglish | Произношение и перевод английского текста</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/flash_detect.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script src="http://code.responsivevoice.org/responsivevoice.js"></script>
<script>
	PlayAllCheck=1;
	function PlayAll(word) {
		if (PlayAllCheck==1) { 
				if (lastid!=-1) $("span#s"+lastid).toggleClass("active");
				$(".playbtn").addClass("pause");
				PlayIt(word);
				PlayAllCheck=0; 
			}
		else { 
				$(".playbtn").removeClass("pause");
				PlayIt('');
				PlayAllCheck=1; 
			}
	}
	
	
	ShowFormCheck=1;
	function ShowForm() {	
		if (ShowFormCheck==1) { 
			$('.your-text').show('normal');
			ShowFormCheck=0;
		}
		else {
			$('.your-text').hide('normal');
			ShowFormCheck=1;
		}
	}
	
	ShowShareCheck=1;
	function ShowShare() {	
		if (ShowShareCheck==1) { 
			$('.share').show('normal');
			ShowShareCheck=0;
		}
		else {
			$('.share').hide('normal');
			ShowShareCheck=1;
		}
	}
	
	var wordArray = new Array (<?=$wordArray?>);
	//alert (wordArray[0]);
	
	var wordNumber=1;
	function WordPreload() {
		if (wordNumber<wordArray.length) {
			var wi=wordNumber;
			//alert (wordArray[wi]); 
			wordNumber=wordNumber+1;
			var audio = document.createElement("audio");
			audio.src = "http://tts-api.com/tts.mp3?q="+wordArray[wi];
			audio.addEventListener("canplaythrough", function () {
			WordPreload();
			}, false); 
		}
	}

function WordPreloadStarter() {
  if (wordNumber<wordArray.length) {
	  WordPreload();
  	 setTimeout(WordPreloadStarter, 1000); 
	 }
}
//WordPreloadStarter();
	
</script>

</head>

<body>

<!-- ******** inner ******** -->
<div class="inner">
	<h1>&nbsp;</h1>
	<div class="tools"><div class="shadow">
		<div class="wordblock fl"><img src="img/logo.png" height="56" width="225" alt=""></div>
		<div class="hearblock fr"><a href="#newtext" class="button" onClick="ShowForm();">ввести свой текст</a> <a href="#share" onClick="ShowShare();" class="button btngrey"><i class="icon-share-grey"></i></a> <!--<a href="#" class="button btngrey"><i class="icon-share-grey"></i></a>--></div>
		
		<div class="clear"></div>
	</div></div>
	
    
    <div class="share">
            Ссылка для друга:            
			<p><textarea name="text"><? echo 'http://eapril.ru/area51/speakenglish/?text='.$origibal_text?></textarea></p>
			<!--<p><button type="submit" onclick="javascript:window.location='new/'">скопировать в буфер</button></p>-->
	</div>
	<div class="your-text">
			<form action="" method="get" class="totrans"> 
			<div class="chooselang">
				<span class="button btngrey btnsmall active">английский</span>
                <a href="language/">другой язык...</a>
				<!--<a href="#">китайский</a>
				<a href="#">испанский</a>
				-->
			</div>
            
			<p><textarea name="text"><?=$origibal_text?></textarea></p>
			<p><button type="submit" onclick="javascript:window.location='new/'">озвучить</button></p>
            </form>
	</div>
	
	<div class="content">
		<div class="translate-text">
			<p><?=$word_list?></p>
		</div>
	
		<div class="ques fl"><a href="advice.html">Вопросы и предложения</a></div>
		<div class="yandex grey fr"><em>Переведено сервисом &laquo;<a href="http://translate.yandex.ru/" class="grey">Яндекс.Перевод</a>&raquo;</em></div>
		<div class="clear"></div>
	</div>
</div>

<!-- ******** footer ******** -->
<div class="footer">
</div>









<!-- ******** embed ******** -->
<style rel="stylesheet" type="text/css">
@import url(http://fonts.googleapis.com/css?family=PT+Serif&subset=latin,cyrillic);
</style>

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="BridgeMovie" width="0" height="0"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab">
    <param name="movie" value="img/play.swf" />
    <param name="allowScriptAccess" value="sameDomain" />
    <embed
        src="img/play.swf" name="BridgeMovie" align="middle" play="true" loop="false" quality="high" allowScriptAccess="sameDomain" width="0" height="0" scale="exactfit" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
    
</object>

<!-- ******** counters ******** -->
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(22307591, "init", {
        id:22307591,
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        trackHash:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/22307591" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>
