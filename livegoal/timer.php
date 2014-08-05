<?php
require_once('simple_html_dom.php');

?>
<html>
<head>
<meta name="txtweb-appkey" content=""/>
</head>
<body>
<?php
$html= file_get_html('http://www.fifa.com/worldcup/news/y=2014/m=6/news=4-days-to-go-2355898.html'); 
foreach($html->find('div[class=article-body]') as $element) 
       echo $element->plaintext . '<br/><br/>';
	   
	   echo "<br/><a href='/livegoal/indexu.php' class='txtweb-menu-for' >Live Score</a> "."<br/>";
?>
</body>


