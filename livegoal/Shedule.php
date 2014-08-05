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
echo "<a href='/livegoal/Shedule.php' class='txtweb-menu' accesskey='D' >  < space > < Date > to filter </a> "."<br/>(eg: Send D 15 to get Matches on 15th June)<br/><br/>";	
}

if($date=="13" || strlen($date)=="0")
{
echo "13th Jun,1 : 30 am<br/>";
echo "Brazil Vs Croatia [Group A]<br/>";


echo "9 : 30 pm<br/>";
echo "Mexico Vs Cameroon [Group A]<br/><br/>";
}



if($date=="14" || strlen($date)=="0")
{
echo "14 Jun,12 : 30 am<br/>";
echo "Spain Vs Netherlands [Group B]<br/>";

echo "3 : 30 am<br/>";
echo "Chile Vs Australia [Group B]<br/>";


echo "9 : 30 pm<br/>";
echo "Colombia Vs Greece [Group C]<br/><br/>";
}



if($date=="15" || strlen($date)=="0")
{
echo "15 Jun,12 : 30 am<br/>";
echo "Uruguay Vs Costa Rica [Group D]<br/>";

echo "3 : 30 am<br/>";
echo "England Vs Italy [Group D]<br/>";


echo "6 : 30 am<br/>";
echo "Cote d'lvoire Vs Japan [Group C]<br/>";
echo "9 : 30 pm<br/>";
echo "Swizerland Vs Ecuador [Group E]<br/><br/>";
}



if($date=="16" || strlen($date)=="0")
{
echo "16 Jun,12 : 30 am<br/>";
echo "France Vs Honduras [Group E]<br/>";

echo "3 : 30 am<br/>";
echo "Argentina Vs Bosnia Herzgovina [Group F]<br/>";


echo "9 : 30 pm<br/>";
echo "Germany Vs Portugal [Group G]<br/><br/>";
}



if($date=="17" || strlen($date)=="0")
{
echo "17 Jun,12 : 30 am<br/>";
echo "Iran Vs Nigeria [Group F]<br/>";

echo "3 : 30 am<br/>";
echo "Ghana Vs United States [Group G]<br/>";


echo "9 : 30 pm<br/>";
echo "Belgium Vs Algeria [Group H]<br/><br/>";
}



if($date=="18" || strlen($date)=="0")
{
echo "18 Jun,12 : 30 am<br/>";
echo "Brazil Vs Mexico [Group A]<br/>";

echo "3 : 30 am<br/>";
echo "Russia Vs Korea [Group H]<br/>";


echo "9 : 30 pm<br/>";
echo "Australia Vs Netherlands [Group B]<br/><br/>";
}



if($date=="19" || strlen($date)=="0")
{
echo "19 Jun,12 : 30 am<br/>";
echo "Spain Vs Chile [Group B]<br/>";

echo "3 : 30 am<br/>";
echo "Cameroon Vs Croatia [Group A]<br/>";


echo "9 : 30 pm<br/>";
echo "Colombia Vs Cote d'lvoire [Group C]<br/><br/>";
}



if($date=="20" || strlen($date)=="0")
{
echo " 20 Jun,12 : 30 am<br/>";
echo "Uruguay Vs England [Group D]<br/>";

echo "3 : 30 am<br/>";
echo "Japan Vs Greece [Group C]<br/>";


echo "9 : 30 pm<br/>";
echo "Italy Vs Costa Rica [Group D]<br/><br/>";
}



if($date=="21" || strlen($date)=="0")
{
echo " 21 Jun,12 : 30 am<br/>";
echo "Switzerland Vs France [Group E]<br/>";

echo "3 : 30 am<br/>";
echo "Honduras Vs Ecuador [Group E]<br/>";


echo "9 : 30 pm<br/>";
echo "Argentina Vs Iran [Group F]<br/><br/>";
}



if($date=="22" || strlen($date)=="0")
{
echo " 22 Jun,12 : 30 am<br/>";
echo "Germany Vs Ghana [Group G]<br/>";

echo "3 : 30 am<br/>";
echo "Nigeria Vs Bosina and Horzegovina [Group F]<br/>";


echo "9 : 30 pm<br/>";
echo "Belgium Vs Russia [Group H]<br/><br/>";
}



if($date=="23" || strlen($date)=="0")
{
echo " 23 Jun,12 : 30 am<br/>";
echo "Korea Vs Algeria [Group H]<br/>";

echo "3 : 30 am<br/>";
echo "United States Vs Portugal [Group G]<br/>";



echo "9 : 30 pm<br/>";
echo "Netherlands Vs Chile [Group B]<br/>";
echo "9 : 30 pm<br/>";
echo "Australia Vs Spain [Group B]<br/><br/>";
}



if($date=="24" || strlen($date)=="0")
{
echo " 24 Jun,1 : 30 am<br/>";
echo "Cameroon Vs Brazil [Group A]<br/>";

echo "1 : 30 am<br/>";
echo "Croatia Vs Mexico [Group A]<br/>";


echo "9 : 30 pm<br/>";
echo "Italy Vs Uruguay [Group D]<br/><br/>";
echo "9 : 30 pm<br/>";
echo "Costa Rica Vs England [Group D]<br/>";
}



if($date=="25" || strlen($date)=="0")
{
echo " 25 Jun,1 : 30 am<br/>";
echo "Japan Vs Colombia [Group C]<br/>";

echo "1 : 30 am<br/>";
echo "Greece Vs Cote d'lvoire [Group C]<br/>";


echo "9 : 30 pm<br/>";
echo "Nigeria Vs Argentina [Group F]<br/>";
echo "9 : 30 pm<br/>";
echo "Bosnia Vs Iran [Group F]<br/><br/>";
}



if($date=="26" || strlen($date)=="0")
{
echo " 26 Jun,1 : 30 am<br/>";
echo "Honduras Vs switzerland [Group E]<br/>";

echo "1 : 30 am<br/>";
echo "Ecuador Vs France [Group E]<br/>";


echo "9 : 30 pm<br/>";
echo "United States Vs Germany [Group G]<br/>";
echo "9 : 30 pm<br/>";
echo "Portugal Vs Ghana [Group G]<br/><br/>";
}



if($date=="27" || strlen($date)=="0")
{
echo " 27 Jun,1 : 30 am<br/>";
echo "Korea Vs Belgium [Group H]<br/>";

echo "1: 30 am<br/>";
echo "Algeria Vs Russia [Group B]<br/><br/>";



}



if($date=="28" || strlen($date)=="0")
{
echo " 28 Jun,9 : 30 pm<br/>";
echo "Round of 16<br/>";
echo "TBD Vs TBD <br/><br/>";


}



if($date=="29" || strlen($date)=="0")
{
echo "29 Jun,1 : 30 am<br/>";
echo "Round of 16<br/>";
echo "TBD Vs TBD<br/>";


echo "9 : 30 pm<br/>";
echo "TBD Vs TBD<br/><br/>";
}



if($date=="30" || strlen($date)=="0")
{
echo " 30 Jun,1 : 30 am<br/>";
echo "Round of 16<br/>";
echo "TBD Vs TBD<br/>";


echo "9 : 30 pm<br/>";
echo "TBD Vs TBD<br/><br/>";
}



if($date=="1" || strlen($date)=="0")
{
echo " 1 July,1 : 30 am<br/>";
echo "Round of 16<br/>";
echo "TBD Vs TBD<br/>";


echo "9 : 30 pm<br/>";
echo "TBD Vs TBD<br/><br/>";
}



if($date=="2" || strlen($date)=="0")
{
echo " 2 July,1 : 30 am<br/>";
echo "Round of 16<br/>";
echo "TBD Vs TBD<br/><br/>";



}





if($date=="4" || strlen($date)=="0")
{
echo " 4 July,9 : 30 am<br/>";
echo "Quarter-finals<br/>";
echo "TBD Vs TBD<br/><br/>";



}



if($date=="5" || strlen($date)=="0")
{
echo " 5 July,1 : 30 am<br/>";
echo "Quarter-finals<br/>";
echo "TBD Vs TBD<br/>";


echo "9 : 30 pm<br/>";
echo "TBD Vs TBD<br/><br/>";
}



if($date=="6" || strlen($date)=="0")
{
echo "6 July,1 : 30 am<br/>";
echo "Quarter-finals<br/>";
echo "TBD Vs TBD<br/><br/>";



}



if($date=="9" || strlen($date)=="0")
{
echo "9 July,1 : 30 am<br/>";
echo "Semi-finals<br/>";
echo "TBD Vs TBD<br/><br/>";



}



if($date=="10" || strlen($date)=="0")
{
echo "10 July,1 : 30 am<br/>";
echo "Semi-finals<br/>";
echo "TBD Vs TBD<br/><br/>";



}



if($date=="13" || strlen($date)=="0")
{
echo "13 July,1 : 30 am<br/>";
echo "Third Place<br/>";
echo "TBD Vs TBD<br/><br/>";



}



if($date=="14" || strlen($date)=="0")
{
echo " 14 July,12 : 30 am<br/>";
echo "Finals<br/>";
echo "TBD Vs TBD<br/><br/>";



}










else{
	echo "No More Matches found on this Date<br/><br/>";
	echo "Reply";
echo "<a href='/livegoal/Shedule.php' class='txtweb-menu' accesskey='D' >  < space > < Date > to filter </a> "."<br/>(eg: Send D 15 to get Matches on 15th June)<br/><br/>";	
}

echo "<br/><a href='/livegoal/indexu.php' class='txtweb-menu-for' >Live Score</a> "."<br/>";
?>
</body>


