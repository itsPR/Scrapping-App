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
if(strlen($date)==0)
{
echo "Reply";
echo "<a href='/livegoal/gwt.php' class='txtweb-menu' accesskey='G' >  < space > < Group > to filter </a> "."<br/>(eg: Send G A to get teams in the Group A)<br/><br/>";	
}

if($date=="A" || strlen($date)=="0" ||$date=="a")
{
echo "Group - A <br/>";
echo "Brazil<br/>";

echo "Croatia<br/>";

echo "Mexico<br/>";

echo "Cameroon<br/><br/>";


}
if($date=="B" || strlen($date)=="0" ||$date=="b")
{
	echo "Group - B <br/>";
echo "Spain<br/>";

echo "Netherlands<br/>";

echo "Chile<br/>";


echo "Australia<br/><br/>";

}
if($date=="C" || strlen($date)=="0" ||$date=="c")
{
	echo "Group - C <br/>";
echo "Colombia<br/>";

echo "Greece<br/>";

echo "Cote d'lvoire<br/>";


echo "Japan<br/><br/>";

}
if($date=="D" || strlen($date)=="0" ||$date=="d")
{
	echo "Group - D <br/>";
echo "Uruguay<br/>";

echo "Costa Rica<br/>";

echo "England<br/>";


echo "Italy<br/><br/>";

}
if($date=="E" || strlen($date)=="0" ||$date=="e")
{
	echo "Group - E <br/>";
echo "Switzerland<br/>";

echo "Ecuador<br/>";

echo "Frnace<br/>";


echo "Honduras<br/><br/>";

}
if($date=="F" || strlen($date)=="0" ||$date=="f")
{
	echo "Group - F <br/>";
echo "Argentina<br/>";

echo "Bosinia<br/>";


echo "Iran<br/>";

echo "Nigeria<br/><br/>";

}
if($date=="G" || strlen($date)=="0" ||$date=="g")
{
	echo "Group - G <br/>";
echo "Germany<br/>";

echo "Portugal<br/>";

echo "Ghana<br/>";


echo "United States<br/><br/>";

}
if($date=="H" || strlen($date)=="0" ||$date=="h")
{
	echo "Group - H <br/>";
echo "Belgium<br/>";

echo "Algeria<br/>";

echo "Russia<br/>";


echo "Korea<br/>";

}





else{
	echo "<br/>No More Teams to show with this Team Name<br/>";
	echo "Reply";
echo "<a href='/livegoal/gwt.php' class='txtweb-menu' accesskey='G' >  < space > < Group > to filter </a> "."<br/>(eg: Send G A to get teams in the Group A)<br/><br/>";
}
echo "<br/><a href='/livegoal/indexu.php' class='txtweb-menu-for' >Live Score</a> "."<br/>";

?>
</body>


