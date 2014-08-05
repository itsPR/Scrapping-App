<html>
<head>
<meta name="txtweb-appkey" content=""/>
</head>
<body>
<?php
include('simple_html_dom.php');
?>
<?php
$url=$_GET['url'];
//echo $url;

$url2="http://www.goal.com/".$url;



$html = file_get_html("$url2");

foreach($html->find('p[class="leading"]') as $e)
    echo $e->plaintext . '<br/>';
	
if(strlen($e->plaintext)==0)
{
	echo "Sorry No more information available at this time(this article is from twitter) Please see another article <br/><br/>";
	echo "<a href='/livegoal/news.php' class='txtweb-menu-for' >News</a> "."<br/>";
	echo "<a href='/livegoal/Shedule.php' class='txtweb-menu-for' >Full Shedule</a> "."<br/>";
echo "<a href='/livegoal/indexu.php' class='txtweb-menu-for' >Live Score</a> "."<br/>";

}
else{
echo "<a href='/livegoal/newsm.php?url=$url' class='txtweb-menu-for' >More detail</a> "."<br/>";
	
	echo "<a href='/livegoal/news.php' class='txtweb-menu-for' >Next News</a> "."<br/>";
	echo "<a href='/livegoal/Shedule.php' class='txtweb-menu-for' >Full Shedule</a> "."<br/>";
echo "<br/><a href='/livegoal/indexu.php' class='txtweb-menu-for' >Live Score</a> "."<br/>";
}
?>