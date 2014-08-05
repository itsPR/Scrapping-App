<?php
require_once('simple_html_dom.php');

?>
<html>
<head>
<meta name="txtweb-appkey" content=""/>
</head>
<body>
<?php
$date=$_GET["txtweb-message"];

$html= file_get_html('http://www.espnfc.com/fifa-world-cup/4/table'); 
if(strlen($date)==0)
{

echo "<a href='/livegoal/points.php' class='txtweb-menu-for' accesskey='P' > P < space > < Group > to filter </a> "."<br/>(eg: Send P A to get Points Table of Group A)<br/><br/>";	
}

if($date=="A" || strlen($date)=="0" ||$date=="a")
{
	echo "Group - A"."<br/>";
	 $groupa1= $html->find('table',0)->find('tr',2)->find('td',1)->plaintext."";
	$groupa2= $html->find('table',0)->find('tr',3)->find('td',1)->plaintext."";
	 $groupa3= $html->find('table',0)->find('tr',4)->find('td',1)->plaintext."";
	 $groupa4 =$html->find('table',0)->find('tr',5)->find('td',1)->plaintext."";
	
	 $groupa1po= $html->find('table',0)->find('tr',2)->find('td',3)->plaintext."";
	 $groupa2po= $html->find('table',0)->find('tr',3)->find('td',3)->plaintext."";
	 $groupa3po= $html->find('table',0)->find('tr',4)->find('td',3)->plaintext."";
	 $groupa4po= $html->find('table',0)->find('tr',5)->find('td',3)->plaintext."";
	
	 $groupa1pl= $html->find('table',0)->find('tr',2)->find('td',6)->plaintext."";
	 $groupa2pl= $html->find('table',0)->find('tr',3)->find('td',6)->plaintext."";
	 $groupa3pl= $html->find('table',0)->find('tr',4)->find('td',6)->plaintext."";
	 $groupa4pl= $html->find('table',0)->find('tr',5)->find('td',6)->plaintext."";
	
	 $groupa1wo= $html->find('table',0)->find('tr',2)->find('td',7)->plaintext."";
	 $groupa2wo= $html->find('table',0)->find('tr',3)->find('td',7)->plaintext."";
	 $groupa3wo= $html->find('table',0)->find('tr',4)->find('td',7)->plaintext."";
	$groupa4wo= $html->find('table',0)->find('tr',5)->find('td',7)->plaintext."";
	
	echo $groupa1."<br/>"."Played&nbsp;:&nbsp;".$groupa1pl."&nbsp;Points&nbsp;:&nbsp;".$groupa1po."&nbsp;Won&nbsp;:&nbsp;".$groupa1wo."<br/>";
	echo $groupa2."<br/>"."Played&nbsp;:&nbsp;".$groupa2pl."&nbsp;Points&nbsp;:&nbsp;".$groupa2po."&nbsp;Won&nbsp;:&nbsp;".$groupa2wo."<br/>";
	echo $groupa3."<br/>"."Played&nbsp;:&nbsp;".$groupa3pl."&nbsp;Points&nbsp;:&nbsp;".$groupa3po."&nbsp;Won&nbsp;:&nbsp;".$groupa3wo."<br/>";
	echo $groupa4."<br/>"."Played&nbsp;:&nbsp;".$groupa4pl."&nbsp;Points&nbsp;:&nbsp;".$groupa4po."&nbsp;Won&nbsp;:&nbsp;".$groupa4wo."<br/><br/>";

}
if($date=="B" || strlen($date)=="0" ||$date=="b")
{
	echo "Group - B"."<br/>";
	 $groupa1= $html->find('table',1)->find('tr',2)->find('td',1)->plaintext."";
	$groupa2= $html->find('table',1)->find('tr',3)->find('td',1)->plaintext."";
	 $groupa3= $html->find('table',1)->find('tr',4)->find('td',1)->plaintext."";
	 $groupa4 =$html->find('table',1)->find('tr',5)->find('td',1)->plaintext."";
	
	 $groupa1po= $html->find('table',1)->find('tr',2)->find('td',3)->plaintext."";
	 $groupa2po= $html->find('table',1)->find('tr',3)->find('td',3)->plaintext."";
	 $groupa3po= $html->find('table',1)->find('tr',4)->find('td',3)->plaintext."";
	 $groupa4po= $html->find('table',1)->find('tr',5)->find('td',3)->plaintext."";
	
	 $groupa1pl= $html->find('table',1)->find('tr',2)->find('td',6)->plaintext."";
	 $groupa2pl= $html->find('table',1)->find('tr',3)->find('td',6)->plaintext."";
	 $groupa3pl= $html->find('table',1)->find('tr',4)->find('td',6)->plaintext."";
	 $groupa4pl= $html->find('table',1)->find('tr',5)->find('td',6)->plaintext."";
	
	 $groupa1wo= $html->find('table',1)->find('tr',2)->find('td',7)->plaintext."";
	 $groupa2wo= $html->find('table',1)->find('tr',3)->find('td',7)->plaintext."";
	 $groupa3wo= $html->find('table',1)->find('tr',4)->find('td',7)->plaintext."";
	$groupa4wo= $html->find('table',1)->find('tr',5)->find('td',7)->plaintext."";
	
	echo $groupa1."<br/>"."Played&nbsp;:&nbsp;".$groupa1pl."&nbsp;Points&nbsp;:&nbsp;".$groupa1po."&nbsp;Won&nbsp;:&nbsp;".$groupa1wo."<br/>";
	echo $groupa2."<br/>"."Played&nbsp;:&nbsp;".$groupa2pl."&nbsp;Points&nbsp;:&nbsp;".$groupa2po."&nbsp;Won&nbsp;:&nbsp;".$groupa2wo."<br/>";
	echo $groupa3."<br/>"."Played&nbsp;:&nbsp;".$groupa3pl."&nbsp;Points&nbsp;:&nbsp;".$groupa3po."&nbsp;Won&nbsp;:&nbsp;".$groupa3wo."<br/>";
	echo $groupa4."<br/>"."Played&nbsp;:&nbsp;".$groupa4pl."&nbsp;Points&nbsp;:&nbsp;".$groupa4po."&nbsp;Won&nbsp;:&nbsp;".$groupa4wo."<br/><br/>";
}
if($date=="C" || strlen($date)=="0" ||$date=="c")
{
	echo "Group - C"."<br/>";
	 $groupa1= $html->find('table',2)->find('tr',2)->find('td',1)->plaintext."";
	$groupa2= $html->find('table',2)->find('tr',3)->find('td',1)->plaintext."";
	 $groupa3= $html->find('table',2)->find('tr',4)->find('td',1)->plaintext."";
	 $groupa4 =$html->find('table',2)->find('tr',5)->find('td',1)->plaintext."";
	
	 $groupa1po= $html->find('table',2)->find('tr',2)->find('td',3)->plaintext."";
	 $groupa2po= $html->find('table',2)->find('tr',3)->find('td',3)->plaintext."";
	 $groupa3po= $html->find('table',2)->find('tr',4)->find('td',3)->plaintext."";
	 $groupa4po= $html->find('table',2)->find('tr',5)->find('td',3)->plaintext."";
	
	 $groupa1pl= $html->find('table',2)->find('tr',2)->find('td',6)->plaintext."";
	 $groupa2pl= $html->find('table',2)->find('tr',3)->find('td',6)->plaintext."";
	 $groupa3pl= $html->find('table',2)->find('tr',4)->find('td',6)->plaintext."";
	 $groupa4pl= $html->find('table',2)->find('tr',5)->find('td',6)->plaintext."";
	
	 $groupa1wo= $html->find('table',2)->find('tr',2)->find('td',7)->plaintext."";
	 $groupa2wo= $html->find('table',2)->find('tr',3)->find('td',7)->plaintext."";
	 $groupa3wo= $html->find('table',2)->find('tr',4)->find('td',7)->plaintext."";
	$groupa4wo= $html->find('table',2)->find('tr',5)->find('td',7)->plaintext."";
	
	echo $groupa1."<br/>"."Played&nbsp;:&nbsp;".$groupa1pl."&nbsp;Points&nbsp;:&nbsp;".$groupa1po."&nbsp;Won&nbsp;:&nbsp;".$groupa1wo."<br/>";
	echo $groupa2."<br/>"."Played&nbsp;:&nbsp;".$groupa2pl."&nbsp;Points&nbsp;:&nbsp;".$groupa2po."&nbsp;Won&nbsp;:&nbsp;".$groupa2wo."<br/>";
	echo $groupa3."<br/>"."Played&nbsp;:&nbsp;".$groupa3pl."&nbsp;Points&nbsp;:&nbsp;".$groupa3po."&nbsp;Won&nbsp;:&nbsp;".$groupa3wo."<br/>";
	echo $groupa4."<br/>"."Played&nbsp;:&nbsp;".$groupa4pl."&nbsp;Points&nbsp;:&nbsp;".$groupa4po."&nbsp;Won&nbsp;:&nbsp;".$groupa4wo."<br/><br/>";
}
if($date=="D" || strlen($date)=="0" ||$date=="d")
{
	echo "Group - D"."<br/>";
	 $groupa1= $html->find('table',3)->find('tr',2)->find('td',1)->plaintext."";
	$groupa2= $html->find('table',3)->find('tr',3)->find('td',1)->plaintext."";
	 $groupa3= $html->find('table',3)->find('tr',4)->find('td',1)->plaintext."";
	 $groupa4 =$html->find('table',3)->find('tr',5)->find('td',1)->plaintext."";
	
	 $groupa1po= $html->find('table',3)->find('tr',2)->find('td',3)->plaintext."";
	 $groupa2po= $html->find('table',3)->find('tr',3)->find('td',3)->plaintext."";
	 $groupa3po= $html->find('table',3)->find('tr',4)->find('td',3)->plaintext."";
	 $groupa4po= $html->find('table',3)->find('tr',5)->find('td',3)->plaintext."";
	
	 $groupa1pl= $html->find('table',3)->find('tr',2)->find('td',6)->plaintext."";
	 $groupa2pl= $html->find('table',3)->find('tr',3)->find('td',6)->plaintext."";
	 $groupa3pl= $html->find('table',3)->find('tr',4)->find('td',6)->plaintext."";
	 $groupa4pl= $html->find('table',3)->find('tr',5)->find('td',6)->plaintext."";
	
	 $groupa1wo= $html->find('table',3)->find('tr',2)->find('td',7)->plaintext."";
	 $groupa2wo= $html->find('table',3)->find('tr',3)->find('td',7)->plaintext."";
	 $groupa3wo= $html->find('table',3)->find('tr',4)->find('td',7)->plaintext."";
	$groupa4wo= $html->find('table',3)->find('tr',5)->find('td',7)->plaintext."";
	
	echo $groupa1."<br/>"."Played&nbsp;:&nbsp;".$groupa1pl."&nbsp;Points&nbsp;:&nbsp;".$groupa1po."&nbsp;Won&nbsp;:&nbsp;".$groupa1wo."<br/>";
	echo $groupa2."<br/>"."Played&nbsp;:&nbsp;".$groupa2pl."&nbsp;Points&nbsp;:&nbsp;".$groupa2po."&nbsp;Won&nbsp;:&nbsp;".$groupa2wo."<br/>";
	echo $groupa3."<br/>"."Played&nbsp;:&nbsp;".$groupa3pl."&nbsp;Points&nbsp;:&nbsp;".$groupa3po."&nbsp;Won&nbsp;:&nbsp;".$groupa3wo."<br/>";
	echo $groupa4."<br/>"."Played&nbsp;:&nbsp;".$groupa4pl."&nbsp;Points&nbsp;:&nbsp;".$groupa4po."&nbsp;Won&nbsp;:&nbsp;".$groupa4wo."<br/><br/>";
}
if($date=="E" || strlen($date)=="0" ||$date=="e")
{
	echo "Group - E"."<br/>";
	 $groupa1= $html->find('table',4)->find('tr',2)->find('td',1)->plaintext."";
	$groupa2= $html->find('table',4)->find('tr',3)->find('td',1)->plaintext."";
	 $groupa3= $html->find('table',4)->find('tr',4)->find('td',1)->plaintext."";
	 $groupa4 =$html->find('table',4)->find('tr',5)->find('td',1)->plaintext."";
	
	 $groupa1po= $html->find('table',4)->find('tr',2)->find('td',3)->plaintext."";
	 $groupa2po= $html->find('table',4)->find('tr',3)->find('td',3)->plaintext."";
	 $groupa3po= $html->find('table',4)->find('tr',4)->find('td',3)->plaintext."";
	 $groupa4po= $html->find('table',4)->find('tr',5)->find('td',3)->plaintext."";
	
	 $groupa1pl= $html->find('table',4)->find('tr',2)->find('td',6)->plaintext."";
	 $groupa2pl= $html->find('table',4)->find('tr',3)->find('td',6)->plaintext."";
	 $groupa3pl= $html->find('table',4)->find('tr',4)->find('td',6)->plaintext."";
	 $groupa4pl= $html->find('table',4)->find('tr',5)->find('td',6)->plaintext."";
	
	 $groupa1wo= $html->find('table',4)->find('tr',2)->find('td',7)->plaintext."";
	 $groupa2wo= $html->find('table',4)->find('tr',3)->find('td',7)->plaintext."";
	 $groupa3wo= $html->find('table',4)->find('tr',4)->find('td',7)->plaintext."";
	$groupa4wo= $html->find('table',4)->find('tr',5)->find('td',7)->plaintext."";
	
	echo $groupa1."<br/>"."Played&nbsp;:&nbsp;".$groupa1pl."&nbsp;Points&nbsp;:&nbsp;".$groupa1po."&nbsp;Won&nbsp;:&nbsp;".$groupa1wo."<br/>";
	echo $groupa2."<br/>"."Played&nbsp;:&nbsp;".$groupa2pl."&nbsp;Points&nbsp;:&nbsp;".$groupa2po."&nbsp;Won&nbsp;:&nbsp;".$groupa2wo."<br/>";
	echo $groupa3."<br/>"."Played&nbsp;:&nbsp;".$groupa3pl."&nbsp;Points&nbsp;:&nbsp;".$groupa3po."&nbsp;Won&nbsp;:&nbsp;".$groupa3wo."<br/>";
	echo $groupa4."<br/>"."Played&nbsp;:&nbsp;".$groupa4pl."&nbsp;Points&nbsp;:&nbsp;".$groupa4po."&nbsp;Won&nbsp;:&nbsp;".$groupa4wo."<br/><br/>";
}
if($date=="F" || strlen($date)=="0" ||$date=="f")
{
echo "Group - F"."<br/>";
	 $groupa1= $html->find('table',5)->find('tr',2)->find('td',1)->plaintext."";
	$groupa2= $html->find('table',5)->find('tr',3)->find('td',1)->plaintext."";
	 $groupa3= $html->find('table',5)->find('tr',4)->find('td',1)->plaintext."";
	 $groupa4 =$html->find('table',5)->find('tr',5)->find('td',1)->plaintext."";
	
	 $groupa1po= $html->find('table',5)->find('tr',2)->find('td',3)->plaintext."";
	 $groupa2po= $html->find('table',5)->find('tr',3)->find('td',3)->plaintext."";
	 $groupa3po= $html->find('table',5)->find('tr',4)->find('td',3)->plaintext."";
	 $groupa4po= $html->find('table',5)->find('tr',5)->find('td',3)->plaintext."";
	
	 $groupa1pl= $html->find('table',5)->find('tr',2)->find('td',6)->plaintext."";
	 $groupa2pl= $html->find('table',5)->find('tr',3)->find('td',6)->plaintext."";
	 $groupa3pl= $html->find('table',5)->find('tr',4)->find('td',6)->plaintext."";
	 $groupa4pl= $html->find('table',5)->find('tr',5)->find('td',6)->plaintext."";
	
	 $groupa1wo= $html->find('table',5)->find('tr',2)->find('td',7)->plaintext."";
	 $groupa2wo= $html->find('table',5)->find('tr',3)->find('td',7)->plaintext."";
	 $groupa3wo= $html->find('table',5)->find('tr',4)->find('td',7)->plaintext."";
	$groupa4wo= $html->find('table',5)->find('tr',5)->find('td',7)->plaintext."";
	
	echo $groupa1."<br/>"."Played&nbsp;:&nbsp;".$groupa1pl."&nbsp;Points&nbsp;:&nbsp;".$groupa1po."&nbsp;Won&nbsp;:&nbsp;".$groupa1wo."<br/>";
	echo $groupa2."<br/>"."Played&nbsp;:&nbsp;".$groupa2pl."&nbsp;Points&nbsp;:&nbsp;".$groupa2po."&nbsp;Won&nbsp;:&nbsp;".$groupa2wo."<br/>";
	echo $groupa3."<br/>"."Played&nbsp;:&nbsp;".$groupa3pl."&nbsp;Points&nbsp;:&nbsp;".$groupa3po."&nbsp;Won&nbsp;:&nbsp;".$groupa3wo."<br/>";
	echo $groupa4."<br/>"."Played&nbsp;:&nbsp;".$groupa4pl."&nbsp;Points&nbsp;:&nbsp;".$groupa4po."&nbsp;Won&nbsp;:&nbsp;".$groupa4wo."<br/><br/>";
}
if($date=="G" || strlen($date)=="0" ||$date=="g")
{
	echo "Group - G"."<br/>";
	 $groupa1= $html->find('table',6)->find('tr',2)->find('td',1)->plaintext."";
	$groupa2= $html->find('table',6)->find('tr',3)->find('td',1)->plaintext."";
	 $groupa3= $html->find('table',6)->find('tr',4)->find('td',1)->plaintext."";
	 $groupa4 =$html->find('table',6)->find('tr',5)->find('td',1)->plaintext."";
	
	 $groupa1po= $html->find('table',6)->find('tr',2)->find('td',3)->plaintext."";
	 $groupa2po= $html->find('table',6)->find('tr',3)->find('td',3)->plaintext."";
	 $groupa3po= $html->find('table',6)->find('tr',4)->find('td',3)->plaintext."";
	 $groupa4po= $html->find('table',6)->find('tr',5)->find('td',3)->plaintext."";
	
	 $groupa1pl= $html->find('table',6)->find('tr',2)->find('td',6)->plaintext."";
	 $groupa2pl= $html->find('table',6)->find('tr',3)->find('td',6)->plaintext."";
	 $groupa3pl= $html->find('table',6)->find('tr',4)->find('td',6)->plaintext."";
	 $groupa4pl= $html->find('table',6)->find('tr',5)->find('td',6)->plaintext."";
	
	 $groupa1wo= $html->find('table',6)->find('tr',2)->find('td',7)->plaintext."";
	 $groupa2wo= $html->find('table',6)->find('tr',3)->find('td',7)->plaintext."";
	 $groupa3wo= $html->find('table',6)->find('tr',4)->find('td',7)->plaintext."";
	$groupa4wo= $html->find('table',6)->find('tr',5)->find('td',7)->plaintext."";
	
	echo $groupa1."<br/>"."Played&nbsp;:&nbsp;".$groupa1pl."&nbsp;Points&nbsp;:&nbsp;".$groupa1po."&nbsp;Won&nbsp;:&nbsp;".$groupa1wo."<br/>";
	echo $groupa2."<br/>"."Played&nbsp;:&nbsp;".$groupa2pl."&nbsp;Points&nbsp;:&nbsp;".$groupa2po."&nbsp;Won&nbsp;:&nbsp;".$groupa2wo."<br/>";
	echo $groupa3."<br/>"."Played&nbsp;:&nbsp;".$groupa3pl."&nbsp;Points&nbsp;:&nbsp;".$groupa3po."&nbsp;Won&nbsp;:&nbsp;".$groupa3wo."<br/>";
	echo $groupa4."<br/>"."Played&nbsp;:&nbsp;".$groupa4pl."&nbsp;Points&nbsp;:&nbsp;".$groupa4po."&nbsp;Won&nbsp;:&nbsp;".$groupa4wo."<br/><br/>";
}
if($date=="H" || strlen($date)=="0" ||$date=="h")
{
	echo "Group - H"."<br/>";
	 $groupa1= $html->find('table',7)->find('tr',2)->find('td',1)->plaintext."";
	$groupa2= $html->find('table',7)->find('tr',3)->find('td',1)->plaintext."";
	 $groupa3= $html->find('table',7)->find('tr',4)->find('td',1)->plaintext."";
	 $groupa4 =$html->find('table',7)->find('tr',5)->find('td',1)->plaintext."";
	
	 $groupa1po= $html->find('table',7)->find('tr',2)->find('td',3)->plaintext."";
	 $groupa2po= $html->find('table',7)->find('tr',3)->find('td',3)->plaintext."";
	 $groupa3po= $html->find('table',7)->find('tr',4)->find('td',3)->plaintext."";
	 $groupa4po= $html->find('table',7)->find('tr',5)->find('td',3)->plaintext."";
	
	 $groupa1pl= $html->find('table',7)->find('tr',2)->find('td',6)->plaintext."";
	 $groupa2pl= $html->find('table',7)->find('tr',3)->find('td',6)->plaintext."";
	 $groupa3pl= $html->find('table',7)->find('tr',4)->find('td',6)->plaintext."";
	 $groupa4pl= $html->find('table',7)->find('tr',5)->find('td',6)->plaintext."";
	
	 $groupa1wo= $html->find('table',7)->find('tr',2)->find('td',7)->plaintext."";
	 $groupa2wo= $html->find('table',7)->find('tr',3)->find('td',7)->plaintext."";
	 $groupa3wo= $html->find('table',7)->find('tr',4)->find('td',7)->plaintext."";
	$groupa4wo= $html->find('table',7)->find('tr',5)->find('td',7)->plaintext."";
	
	echo $groupa1."<br/>"."Played&nbsp;:&nbsp;".$groupa1pl."&nbsp;Points&nbsp;:&nbsp;".$groupa1po."&nbsp;Won&nbsp;:&nbsp;".$groupa1wo."<br/>";
	echo $groupa2."<br/>"."Played&nbsp;:&nbsp;".$groupa2pl."&nbsp;Points&nbsp;:&nbsp;".$groupa2po."&nbsp;Won&nbsp;:&nbsp;".$groupa2wo."<br/>";
	echo $groupa3."<br/>"."Played&nbsp;:&nbsp;".$groupa3pl."&nbsp;Points&nbsp;:&nbsp;".$groupa3po."&nbsp;Won&nbsp;:&nbsp;".$groupa3wo."<br/>";
	echo $groupa4."<br/>"."Played&nbsp;:&nbsp;".$groupa4pl."&nbsp;Points&nbsp;:&nbsp;".$groupa4po."&nbsp;Won&nbsp;:&nbsp;".$groupa4wo."<br/><br/>";
}





else{
	echo "<br/>No More Teams to show with this Team Name";
}


?>
</body>


