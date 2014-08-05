<?php
require_once('simple_html_dom.php');

?>
<html>
<head>
<meta name="txtweb-appkey" content=""/>
</head>
<body>
<?php

 
	
	
	$html= file_get_html('http://www.goal.com/en-india/results/world-cup/72/'); 
	echo "Full Results<br/>";
	
	
	foreach($html->find('table[class="match-table"]') as $article) {
    $item['date']     = $article->find('th[class=comp-date]',0)->plaintext;
     $item['time']     = $article->find('td[class=status]',0)->plaintext;
	$item['home']     = $article->find('div[class=module module-team simple home]',0)->plaintext;
	$item['score']     = $article->find('td[class=vs]',0)->plaintext;
	$item['away']     = $article->find('div[class=module module-team simple away]',0)->plaintext;
	$item['date1']     = $article->find('th[class=comp-date]',0)->plaintext;
     $item['time1']     = $article->find('td[class=status]',1)->plaintext;
	$item['home1']     = $article->find('div[class=module module-team simple home]',1)->plaintext;
	$item['score1']     = $article->find('td[class=vs]',1)->plaintext;
	$item['away1']     = $article->find('div[class=module module-team simple away]',2)->plaintext;
	$item['time2']     = $article->find('td[class=status]',2)->plaintext;
	$item['home2']     = $article->find('div[class=module module-team simple home]',2)->plaintext;
	$item['score2']     = $article->find('td[class=vs]',2)->plaintext;
	$item['away2']     = $article->find('div[class=module module-team simple away]',2)->plaintext;
	$articles[] = $item;
	}
	
		
	foreach($articles as $v) {
	
	
	
	echo "<br/>".$v['date']."<br/>".$v['home']."&nbsp;".$v['score']."&nbsp;".$v['away']."(".$v['time'].")"."<br/>";
	echo $v['home1']."&nbsp;".$v['score1']."&nbsp;".$v['away1']."(".$v['time1'].")"."<br/>";
	if(strlen($v['home2'])!=0)
	{
	echo $v['home2']."&nbsp;".$v['score2']."&nbsp;".$v['away2']."(".$v['time2'].")"."<br/>";
	}
    
}
	
	
	
	
	
		  //echo $date."<br/>".$time."<br/>".$time."<br/>".$home."<br/>".$score."<br/>",$away;
		
		  
		  ?>
          
          



</body>


