<?php

include 'picmatch.php';
//foreach($images as $img){
	$file = 'images/1.jpg';
	$file2 = 'images/2.jpg';
	$color1 = getColor($file);
	$color2 = getColor($file2);
	$colornum = match($color1,$color2);
	echo '<img src="'.$file.'" />';
	echo '<img src="'.$file2.'" /><br>相似度：';
	echo $colornum;
	echo '<br><hr>';
//}
