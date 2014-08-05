<html>
<head>
<meta name="txtweb-appkey" content=""/>
</head>
<body>
<?php
include('simple_html_dom.php');
?>
<?php
$html = file_get_html('https://twitter.com/IBL_Official/');

// Find all article blocks
foreach($html->find('p[class="js-tweet-text tweet-text"]') as $article) {
    $item['title']     = $article->plaintext;
	
	 //$item['titl']     = $article->find('a',1 )->href;
	//$item['tit']     = $article->find('div[class="line tinytext mt-row"]',0 )->plaintext;
   
    $articles[] = $item;
}

foreach($articles as $v) {
	//echo"<a href='news1.php?url=$v[titl]'>$v[title]</a>";
	
    echo "". $v['title'].'<br></br>';
	//echo "". ['title'].'</br>';
	//echo "". $v['tit'].'</br>';
   
   
}

echo "<br/><a href='/livegoal/index.php' class='txtweb-menu-for' >Live Score</a> "."<br/>";   
   


 //foreach($html->find('div[class="line mt-theatrename"]') as $e)
   // echo $e->plaintext . '<br>';

?>