<?php

function etiket($stil,$icerik,$kfont,$bfont){

$icerik   =strip_tags($icerik);
$renk     = array(1=>'#46c8ca','#ec0f0b','#3c8092','#c61847','#e80744','#cbbb25','#65fa10','#060606' );
$font     = array(1=>'tahoma','arial','Maroon','impact','Times New Roman','Verdana','Georgia');
$parcala  =str_word_count($icerik,1);
foreach($parcala as $etiket){
	
	$etiket=strtolower($etiket);
	
	if($stil =="renkli" ){
	$rengi= $renk[rand(1,count($renk))];
$fontu= $font[rand(1,count($font))];
$size =rand($kfont,$bfont);

echo '<a href="#" title="'.$etiket.'" style="color:'.$rengi.'; font-size: '.$size.';font-family:'.$fontu.'"  >'.$etiket.'</a> ';
	
	
	}else{
		echo '<a href ="#">'.$etiket.'</a>';
	}
}
}
$icerik = "ben sadik kaplan YII FRAMEWORK ILE ETIKET SISTEMI programı yapıyorum";

etiket("renkli",$icerik,12,35)
	


?>