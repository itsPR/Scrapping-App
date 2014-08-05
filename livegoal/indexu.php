<?php
require_once('simple_html_dom.php');
require_once('twitteroauth/twitteroauth.php');

?>
<?php set_time_limit(0); ?>
<html>
<head>
<meta name="txtweb-appkey" content=""/>
</head>
<body>
<?php




 $html= file_get_html('http://www.espnfc.com/fifa-world-cup/4/scores'); 
	
	
	foreach($html->find('div[class=score live full]') as $article) {
    $item['team1']     = $article->find('div[class=team-name]',0)->plaintext;
    $item['team2']    = $article->find('div[class=team-name]',1)->plaintext;
    $item['score1'] = $article->find('div[class=team-score]',0)->plaintext;
    $item['score2'] = $article->find('div[class=team-score]',1)->plaintext;
	$item['link'] = $article->find('a[class=primary-link]',0)->href;
	$item['time'] = $article->find('span[class=time]',0)->plaintext;
	
	$articles[] = $item;
	}
	if(strlen($articles==0))
	{
		$html= file_get_html('http://www.goal.com/en-india/fixtures/world-cup/72/'); 
	echo "Upcoming Match<br/>";
	echo $html->find('th[class=comp-date]',0)->plaintext.",";
	
	echo $html->find('td[class=status]',0)->plaintext."<br/>";
	
	echo $html->find('div[class=module module-team simple home]',0)->plaintext."&nbsp; Vs &nbsp;";
	   
	echo $html->find('div[class=module module-team simple away]',0)->plaintext."<br/><br/>";
	
	
	$html= file_get_html('http://www.goal.com/en-india/results/world-cup/72/'); 
	echo "Previous Result<br/>";
	echo $html->find('th[class=comp-date]',0)->plaintext.",";
	
	echo $html->find('td[class=status]',0)->plaintext."<br/>";
	
	echo $html->find('div[class=module module-team simple home]',0)->plaintext."";
	   echo $html->find('td[class=vs]',0)->plaintext."";
	echo $html->find('div[class=module module-team simple away]',0)->plaintext."<br/><br/>";
	
	
	}
	else{
		echo "Live Match :- "."<br/>";
	foreach($articles as $v) {
	
	echo "".$v['team1']."&nbsp;-&nbsp;".$v['score1']."<br/>";
	echo "".$v['team2']."&nbsp;-&nbsp;".$v['score2']."<br/>";
	echo "".$v['time']."<br/>";
   
}


$link= 'http://www.espnfc.com'.$v['link'];

	 $html= file_get_html($link);
	 foreach($html->find('ul[id=convo-list]') as $article) {
    $item['comment1']     = $article->find('div[class=comment]',0)->plaintext;
	
	 }
	 $articles[] = $item;
		foreach($articles as $v) {
	
	echo "".$v['comment1']."<br/><br/>";
		}
	}




 
	


	
	
	echo "<a href='/livegoal/resultm.php' class='txtweb-menu-for' >Full Results</a> "."<br/>";	
echo "<a href='/livegoal/Shedule.php' class='txtweb-menu-for' >Full Shedule</a> "."<br/>";

echo "<a href='/livegoal/points.php' class='txtweb-menu-for'  >Points Table</a> "."<br/>";

echo "<a href='/livegoal/gwt.php' class='txtweb-menu-for'  >Groupwise Teams</a> "."<br/>";

echo "<a href='/livegoal/news.php' class='txtweb-menu-for'  >News</a> "."<br/>";
echo "<a href='/livegoal/twitter/index.php' class='txtweb-menu-for' accesskey='A' >Tweets from FIFA2014</a> "."<br/>";

echo "<a href='/livegoal/more.php' class='txtweb-menu-for'  >More</a> "."<br/>";


error_reporting(E_ALL);
?>
</body>


