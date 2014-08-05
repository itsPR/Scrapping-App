<?php
require_once('simple_html_dom.php');
require_once('twitteroauth/twitteroauth.php');

?>
<html>
<head>
<meta name="txtweb-appkey" content=""/>
</head>
<body>
<?php




	$id=$_GET['id'];
	if($id=="12")
	{

 $html= file_get_html('http://www.espnfc.com/fifa-world-cup/4/scores'); 
	
	
	foreach($html->find('div[class=score live full]') as $article) {
    $item['team1']     = $article->find('div[class=team-name]',0)->plaintext;
    $item['team2']    = $article->find('div[class=team-name]',1)->plaintext;
    $item['score1'] = $article->find('div[class=team-score]',0)->plaintext;
    $item['score2'] = $article->find('div[class=team-score]',1)->plaintext;
	$item['link'] = $article->find('a[class=primary-link]',0)->href;
	
	$articles[] = $item;
	}
	if(strlen($articles==0))
	{
		
	}
	else{
		echo "Live Match :- "."<br/>";
	foreach($articles as $v) {
	
	echo "".$v['team1']."&nbsp;-&nbsp;".$v['score1']."<br/>";
	echo "".$v['team2']."&nbsp;-&nbsp;".$v['score2']."<br/>";
	
   
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
	
	echo "<a href='/livegoal/resultm.php' class='txtweb-menu-for' >Full Results</a> "."<br/>";
	}
	if($id=="10")
	{


echo "Previous Results<br/>";
	

echo '<div class="results">';
$html= file_get_html('http://www.goal.com/en-india/results/world-cup/72/'); 
;
	echo $html->find('th[class=comp-date]',0)->plaintext."<br/>";
	
	//echo $html->find('td[class=status]',0)->plaintext."<br/>";
	
	echo $html->find('div[class=module module-team simple home]',0)->plaintext."";
	   echo $html->find('td[class=vs]',0)->plaintext."";
	echo $html->find('div[class=module module-team simple away]',0)->plaintext."<br/>";
	//echo $html->find('td[class=status]',1)->plaintext."<br/>";
	
	echo $html->find('div[class=module module-team simple home]',1)->plaintext."";
	   echo $html->find('td[class=vs]',1)->plaintext."";
	echo $html->find('div[class=module module-team simple away]',1)->plaintext."<br/>";
	
 	echo "</div>";
	}
		  
if($id=="0")
	
	{
		echo "<a href='/livegoal/timer.php'   >1 days to go for FOOTBALL 2014</a> "."";
echo "<br/><br/>";
echo "Upcoming Match<br/>";
echo "Fri 13 Jun,1 : 30 am<br/>";
echo "Brazil Vs Croatia [Group A]<br/><br/>";
	}
if($id=="1")
	{
    $html= file_get_html('http://www.goal.com/en/match/australia-vs-netherlands/1220078/'); 
	
	
	
	
	
	foreach($html->find('div[data-omniture-icid=HDH]') as $element) 
	$home=$element->plaintext;
	
	foreach($html->find('div[class=home-score]') as $element) 
	$hscore=$element->plaintext;
	
	foreach($html->find('div[data-omniture-icid=HDA]') as $element) 
	$away=$element->plaintext;
	
	foreach($html->find('div[class=away-score]') as $element) 
    $ascore=$element->plaintext . '<br/>';
	
	
		echo "Live Match : Australia Vs Netherlands<br/>";
	echo $home."&nbsp;-&nbsp;";	echo $hscore."<br/>";
	echo $away."&nbsp;-&nbsp;"; echo $ascore."<br/>";
	
	
	$twitter_un = "GoalFlash";
$num_tweets = 1;
$consumerkey = "MRlwLQ5gNQWCeoIQOpfg";
$consumersecret = "fPWuOOz0XDg7cTexPiBSQH67stuwPHDGWmQ9hd3e8";
$accesstoken = "150157856-ZdUeQAfwxMkzaLXn8rwe13VPmwrwD3xkILW1ZWNy";
$accesstokensecret = "AzMq5MgnLLQBUqNKLhTztZ7AEEzgydrvseAovKIcSM";
$connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);



$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitter_un."&count=".$num_tweets);
foreach($tweets as $tweet) {
	echo "<p>".$tweet->text."</p><br/>";
}
	echo "<br/>Upcoming Match<br/>";
echo "19 Jun,12 : 30 am<br/>";
echo "Spain   Vs   Chile <br/><br/>";


	}
	
	if($id=="2")
	{
	$html= file_get_html('http://www.goal.com/en/match/belgium-vs-algeria/1220114/'); 
	
	
	
	
	
	foreach($html->find('div[data-omniture-icid=HDH]') as $element) 
	$home=$element->plaintext;
	
	foreach($html->find('div[class=home-score]') as $element) 
	$hscore=$element->plaintext;
	
	foreach($html->find('div[data-omniture-icid=HDA]') as $element) 
	$away=$element->plaintext;
	
	foreach($html->find('div[class=away-score]') as $element) 
    $ascore=$element->plaintext . '<br/>';
	
	
		echo "Live Match : Belgium Vs Algeria<br/>";
	echo $home."&nbsp;-&nbsp;";	echo $hscore."<br/>";
	echo $away."&nbsp;-&nbsp;"; echo $ascore."<br/>";
	
	
	$twitter_un = "GoalFlash";
$num_tweets = 1;
$consumerkey = "MRlwLQ5gNQWCeoIQOpfg";
$consumersecret = "fPWuOOz0XDg7cTexPiBSQH67stuwPHDGWmQ9hd3e8";
$accesstoken = "150157856-ZdUeQAfwxMkzaLXn8rwe13VPmwrwD3xkILW1ZWNy";
$accesstokensecret = "AzMq5MgnLLQBUqNKLhTztZ7AEEzgydrvseAovKIcSM";
$connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);



$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitter_un."&count=".$num_tweets);
foreach($tweets as $tweet) {
	echo "<p>".$tweet->text."</p><br/>";
}
	echo "Upcoming Match<br/>";
	

echo "18 Jun,12 : 30 am<br/>";
echo "Brazil Vs Mexico [Group A]<br/>";
	}
	if($id=="3")
	{
	$html= file_get_html('http://www.goal.com/en/match/spain-vs-netherlands/1220077/'); 
	
	
	
	
	
	foreach($html->find('div[data-omniture-icid=HDH]') as $element) 
	$home=$element->plaintext;
	
	foreach($html->find('div[class=home-score]') as $element) 
	$hscore=$element->plaintext;
	
	foreach($html->find('div[data-omniture-icid=HDA]') as $element) 
	$away=$element->plaintext;
	
	foreach($html->find('div[class=away-score]') as $element) 
    $ascore=$element->plaintext . '<br/>';
	
	
		echo "Live Match Spain Vs Netherlands<br/>";
	echo $home."&nbsp;-&nbsp;";	echo $hscore."<br/>";
	echo $away."&nbsp;-&nbsp;"; echo $ascore."<br/>";
	
	
	$twitter_un = "GoalFlash";
$num_tweets = 1;
$consumerkey = "MRlwLQ5gNQWCeoIQOpfg";
$consumersecret = "fPWuOOz0XDg7cTexPiBSQH67stuwPHDGWmQ9hd3e8";
$accesstoken = "150157856-ZdUeQAfwxMkzaLXn8rwe13VPmwrwD3xkILW1ZWNy";
$accesstokensecret = "AzMq5MgnLLQBUqNKLhTztZ7AEEzgydrvseAovKIcSM";
$connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);



$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitter_un."&count=".$num_tweets);
foreach($tweets as $tweet) {
	echo "<p>".$tweet->text."</p><br/>";
}
	echo "Upcoming Match<br/>";
echo "3 : 30 am<br/>";
echo "Chile Vs Australia [Group B]<br/>";
	}
	if($id=="4")
	{
	$html= file_get_html('http://www.goal.com/en/match/chile-vs-australia/1220076/'); 
	
	
	
	
	
	foreach($html->find('div[data-omniture-icid=HDH]') as $element) 
	$home=$element->plaintext;
	
	foreach($html->find('div[class=home-score]') as $element) 
	$hscore=$element->plaintext;
	
	foreach($html->find('div[data-omniture-icid=HDA]') as $element) 
	$away=$element->plaintext;
	
	foreach($html->find('div[class=away-score]') as $element) 
    $ascore=$element->plaintext . '<br/>';
	
	
		echo "Live Match : Chile Vs Australia<br/>";
	echo $home."&nbsp;-&nbsp;";	echo $hscore."<br/>";
	echo $away."&nbsp;-&nbsp;"; echo $ascore."<br/>";
	
	
	$twitter_un = "GoalFlash";
$num_tweets = 1;
$consumerkey = "MRlwLQ5gNQWCeoIQOpfg";
$consumersecret = "fPWuOOz0XDg7cTexPiBSQH67stuwPHDGWmQ9hd3e8";
$accesstoken = "150157856-ZdUeQAfwxMkzaLXn8rwe13VPmwrwD3xkILW1ZWNy";
$accesstokensecret = "AzMq5MgnLLQBUqNKLhTztZ7AEEzgydrvseAovKIcSM";
$connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);



$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitter_un."&count=".$num_tweets);
foreach($tweets as $tweet) {
	echo "<p>".$tweet->text."</p><br/>";
}
	echo "Upcoming Match<br/>";
echo "9 : 30 pm<br/>";
echo "Colombia Vs Greece [Group C]<br/><br/>";
	}
	
	if($id=="5")
	{
	$html= file_get_html('http://www.goal.com/en/match/colombia-vs-greece/1220082/'); 
	
	
	
	
	
	foreach($html->find('div[data-omniture-icid=HDH]') as $element) 
	$home=$element->plaintext;
	
	foreach($html->find('div[class=home-score]') as $element) 
	$hscore=$element->plaintext;
	
	foreach($html->find('div[data-omniture-icid=HDA]') as $element) 
	$away=$element->plaintext;
	
	foreach($html->find('div[class=away-score]') as $element) 
    $ascore=$element->plaintext . '<br/>';
	
	
		echo "Live Match : Colombia Vs Greece <br/>";
	echo $home."&nbsp;-&nbsp;";	echo $hscore."<br/>";
	echo $away."&nbsp;-&nbsp;"; echo $ascore."<br/>";
	
	
	$twitter_un = "GoalFlash";
$num_tweets = 1;
$consumerkey = "MRlwLQ5gNQWCeoIQOpfg";
$consumersecret = "fPWuOOz0XDg7cTexPiBSQH67stuwPHDGWmQ9hd3e8";
$accesstoken = "150157856-ZdUeQAfwxMkzaLXn8rwe13VPmwrwD3xkILW1ZWNy";
$accesstokensecret = "AzMq5MgnLLQBUqNKLhTztZ7AEEzgydrvseAovKIcSM";
$connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);



$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitter_un."&count=".$num_tweets);
foreach($tweets as $tweet) {
	echo "<p>".$tweet->text."</p><br/>";
}
	echo "Upcoming Match<br/>";
echo "15 Jun,12 : 30 am<br/>";
echo "Uruguay Vs Costa Rica [Group D]<br/>";
	}
	
	if($id=="6")
	{
	$html= file_get_html('http://www.goal.com/en/match/uruguay-vs-costa-rica/1220088/'); 
	
	
	
	
	
	foreach($html->find('div[data-omniture-icid=HDH]') as $element) 
	$home=$element->plaintext;
	
	foreach($html->find('div[class=home-score]') as $element) 
	$hscore=$element->plaintext;
	
	foreach($html->find('div[data-omniture-icid=HDA]') as $element) 
	$away=$element->plaintext;
	
	foreach($html->find('div[class=away-score]') as $element) 
    $ascore=$element->plaintext . '<br/>';
	
	
		echo "Live Match : Uruguay Vs Costarica<br/>";
	echo $home."&nbsp;-&nbsp;";	echo $hscore."<br/>";
	echo $away."&nbsp;-&nbsp;"; echo $ascore."<br/>";
	
	
	$twitter_un = "GoalFlash";
$num_tweets = 1;
$consumerkey = "MRlwLQ5gNQWCeoIQOpfg";
$consumersecret = "fPWuOOz0XDg7cTexPiBSQH67stuwPHDGWmQ9hd3e8";
$accesstoken = "150157856-ZdUeQAfwxMkzaLXn8rwe13VPmwrwD3xkILW1ZWNy";
$accesstokensecret = "AzMq5MgnLLQBUqNKLhTztZ7AEEzgydrvseAovKIcSM";
$connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);



$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitter_un."&count=".$num_tweets);
foreach($tweets as $tweet) {
	echo "<p>".$tweet->text."</p><br/>";
}
	echo "Upcoming Match<br/>";
echo "3 : 30 am<br/>";
echo "England Vs Italy [Group D]<br/>";
	}
	if($id=="7")
	{

	$html= file_get_html('http://www.goal.com/en/match/england-vs-italy/1220089/'); 
	
	
	
	
	
	foreach($html->find('div[data-omniture-icid=HDH]') as $element) 
	$home=$element->plaintext;
	
	foreach($html->find('div[class=home-score]') as $element) 
	$hscore=$element->plaintext;
	
	foreach($html->find('div[data-omniture-icid=HDA]') as $element) 
	$away=$element->plaintext;
	
	foreach($html->find('div[class=away-score]') as $element) 
    $ascore=$element->plaintext . '<br/>';
	
			echo "Live Match : England Vs Italy<br/>";
	echo $home."&nbsp;-&nbsp;";	echo $hscore."<br/>";
	echo $away."&nbsp;-&nbsp;"; echo $ascore."<br/>";
	
	
	$twitter_un = "GoalFlash";
$num_tweets = 1;
$consumerkey = "MRlwLQ5gNQWCeoIQOpfg";
$consumersecret = "fPWuOOz0XDg7cTexPiBSQH67stuwPHDGWmQ9hd3e8";
$accesstoken = "150157856-ZdUeQAfwxMkzaLXn8rwe13VPmwrwD3xkILW1ZWNy";
$accesstokensecret = "AzMq5MgnLLQBUqNKLhTztZ7AEEzgydrvseAovKIcSM";
$connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);



$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitter_un."&count=".$num_tweets);
foreach($tweets as $tweet) {
	echo "<p>".$tweet->text."</p><br/>";
}
	echo "Upcoming Match<br/>";
echo "6 : 30 am<br/>";
echo "Cote d'lvoire Vs Japan [Group C]<br/>";
	}
	if($id=="8")
	{
	$html= file_get_html('http://www.goal.com/en/match/c%C3%B4te-divoire-vs-japan/1220083/'); 
	
	
	
	
	
	foreach($html->find('div[data-omniture-icid=HDH]') as $element) 
	$home=$element->plaintext;
	
	foreach($html->find('div[class=home-score]') as $element) 
	$hscore=$element->plaintext;
	
	foreach($html->find('div[data-omniture-icid=HDA]') as $element) 
	$away=$element->plaintext;
	
	foreach($html->find('div[class=away-score]') as $element) 
    $ascore=$element->plaintext . '<br/>';
	
	
		echo "Live Match : Cote d'lvoire Vs Japan<br/>";
	echo $home."&nbsp;-&nbsp;";	echo $hscore."<br/>";
	echo $away."&nbsp;-&nbsp;"; echo $ascore."<br/>";
	
	
	$twitter_un = "GoalFlash";
$num_tweets = 1;
$consumerkey = "MRlwLQ5gNQWCeoIQOpfg";
$consumersecret = "fPWuOOz0XDg7cTexPiBSQH67stuwPHDGWmQ9hd3e8";
$accesstoken = "150157856-ZdUeQAfwxMkzaLXn8rwe13VPmwrwD3xkILW1ZWNy";
$accesstokensecret = "AzMq5MgnLLQBUqNKLhTztZ7AEEzgydrvseAovKIcSM";
$connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);



$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitter_un."&count=".$num_tweets);
foreach($tweets as $tweet) {
	echo "<p>".$tweet->text."</p><br/>";
}
	echo "Upcoming Match<br/>";
echo "9 : 30 pm<br/>";
echo "Swizerland Vs Ecuador [Group E]<br/><br/>";
	}
	
	
	if($id=="9")
	{
	$html= file_get_html('http://www.goal.com/en/match/switzerland-vs-ecuador/1220094/'); 
	
	
	
	
	
	foreach($html->find('div[data-omniture-icid=HDH]') as $element) 
	$home=$element->plaintext;
	
	foreach($html->find('div[class=home-score]') as $element) 
	$hscore=$element->plaintext;
	
	foreach($html->find('div[data-omniture-icid=HDA]') as $element) 
	$away=$element->plaintext;
	
	foreach($html->find('div[class=away-score]') as $element) 
    $ascore=$element->plaintext . '<br/>';
	
	
		echo "Live Match : Switzerland Vs Ecuador<br/>";
	echo $home."&nbsp;-&nbsp;";	echo $hscore."<br/>";
	echo $away."&nbsp;-&nbsp;"; echo $ascore."<br/>";
	
	
	$twitter_un = "GoalFlash";
$num_tweets = 1;
$consumerkey = "MRlwLQ5gNQWCeoIQOpfg";
$consumersecret = "fPWuOOz0XDg7cTexPiBSQH67stuwPHDGWmQ9hd3e8";
$accesstoken = "150157856-ZdUeQAfwxMkzaLXn8rwe13VPmwrwD3xkILW1ZWNy";
$accesstokensecret = "AzMq5MgnLLQBUqNKLhTztZ7AEEzgydrvseAovKIcSM";
$connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);



$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitter_un."&count=".$num_tweets);
foreach($tweets as $tweet) {
	echo "<p>".$tweet->text."</p><br/>";
}
	echo "Upcoming Match<br/>";
echo "16 Jun,12 : 30 am<br/>";
echo "France Vs Honduras [Group E]<br/>";
	}

	
	
	
echo "<a href='/livegoal/Shedule.php' class='txtweb-menu-for' >Full Shedule</a> "."<br/>";

echo "<a href='/livegoal/points.php' class='txtweb-menu-for'  >Points Table</a> "."<br/>";

echo "<a href='/livegoal/gwt.php' class='txtweb-menu-for'  >Groupwise Teams</a> "."<br/>";

echo "<a href='/livegoal/news.php' class='txtweb-menu-for'  >News</a> "."<br/>";
echo "<a href='/livegoal/twitter/index.php' class='txtweb-menu-for' accesskey='A' >Tweets from FIFA2014</a> "."<br/>";

echo "<a href='/livegoal/more.php' class='txtweb-menu-for'  >More</a> "."<br/>";


error_reporting(E_ALL);
?>
</body>


