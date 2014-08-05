<?php

require_once("config.php");
?>
<html>
<head>
<meta name="txtweb-appkey" content=""/>
</head>
<body>
<?php
$id=$_GET["txtweb-message"];

$query="UPDATE  `trivarc`.`id` SET  `idm` =  '$id' WHERE  `id`.`id` =0;";

print_r($query);
	mysql_query($query) or die(mysql_error());
	
	echo "success fully voted to kds";


?>
</body>


