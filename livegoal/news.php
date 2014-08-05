<?php
require_once('simple_html_dom.php');

?>
<html>
<head>
<meta name="txtweb-appkey" content=""/>
</head>
<body>
<?php

$html= file_get_html('http://www.goal.com/en-india/news/3832/2014-world-cup'); 



foreach($html->find('h4[class="headline"]') as $article) {
    $item['title']     = $article->find('a',0 )->plaintext;
	
	 $item['titl']     = $article->find('a',0 )->href;
	//$item['tit']     = $article->find('div[class="line tinytext mt-row"]',0 )->plaintext;
   
    $articles[] = $item;
}

foreach($articles as $v) {
	if(substr($v['titl'],0,4)=="http" || preg_match("/\bslideshow\b/i", $v['titl'], $match) )
	{
	}
	else{
	echo"<a href='news1.php?url=$v[titl]'>$v[title]</a><br/>";
	echo "</br>";
	}
 //   echo "". $v['title'].'</br>';
	//echo "". ['title'].'</br>';
	//echo "". $v['tit'].'</br>';
   
   
}




?>
</body>


