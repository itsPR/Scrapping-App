<?php

?>
<html>
<head>
<meta name="txtweb-appkey" content=""/>
</head>
<body>

<?php
//$html = file_get_html('http://www.indianbadmintonleague.co/');

	require_once('twitteroauth/twitteroauth.php');
$twitter_un = "FIFAWorldCup";
$num_tweets = 100;
$consumerkey = "MRlwLQ5gNQWCeoIQOpfg";
$consumersecret = "fPWuOOz0XDg7cTexPiBSQH67stuwPHDGWmQ9hd3e8";
$accesstoken = "150157856-ZdUeQAfwxMkzaLXn8rwe13VPmwrwD3xkILW1ZWNy";
$accesstokensecret = "AzMq5MgnLLQBUqNKLhTztZ7AEEzgydrvseAovKIcSM";
$connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);


echo "Recent tweets from @WorldCup2014 : <br/>";
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitter_un."&count=".$num_tweets);
foreach($tweets as $tweet) {
	echo "<p>".$tweet->text."</p><br/>";
}

?>