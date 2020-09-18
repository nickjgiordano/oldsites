<body bgcolor="e9e6f4">
<font face="verdana" size="1">

<?php
$habbo = $_POST["habbo"];
$type = $_POST["type"];
$msg = $_POST["msg"];
$time = $_POST["time"];
$ip1 = $_SERVER["HTTP_X_FORWARDED_FOR"];
$ip2 = $_SERVER["REMOTE_ADDR"];

if($habbo == "" OR $msg == ""){
	echo "Your jabba or message was blank! Please go back and fix this!";
	die();
} else {}
if($habbo == "shit, cock, fuck, fuk, whore, cunt, nigger, nigg, nigga, fukker, motherfuka, motherfucker" OR $msg == "shit, cock, fuck, fuk, whore, cunt, nigger, nigg, nigga, motherfuka, motherfucker"){
	echo "Please do not enter inappropriate material!";
	die();
} else {}
if($type == "1" OR $type == "2"){
	echo "Thank you for sending in your shoutout/request, $habbo! ";
	include "dj/sql.php";

mysql_query("INSERT INTO `dj` ( `habbo` , `type` , `msg` , `time` , `ip1` , `ip2` ) VALUES ( '$habbo' , '$type' , '$msg' , '$time' , '$ip1' , '$ip2')")
or die ("Could not insert into database.");

} else {}
if($type == "3"){
	echo "Thank you for reporting this DJ, $habbo.  We will look into your complaint.";
	include "dj/sql.php";

mysql_query("INSERT INTO `dj` ( `habbo` , `type` , `msg` , `time` , `ip1` , `ip2` ) VALUES ( '$habbo' , '$type' , '$msg' , '$time' , '$ip1' , '$ip2')")
or die ("Could not insert into database.");

} else {}
if($type == "4"){
	echo "Thanks for sending in your competition entry!  Good luck!";
	include "dj/sql.php";

mysql_query("INSERT INTO `dj` ( `habbo` , `type` , `msg` , `time` , `ip1` , `ip2` ) VALUES ( '$habbo' , '$type' , '$msg' , '$time' , '$ip1' , '$ip2')")
or die ("Could not insert into database.");

} else {}
if($type == "5"){
	echo "Thanks for sending in your 'other' entry $habbo!";
	include "dj/sql.php";

mysql_query("INSERT INTO `dj` ( `habbo` , `type` , `msg` , `time` , `ip1` , `ip2` ) VALUES ( '$habbo' , '$type' , '$msg' , '$time' , '$ip1' , '$ip2')")
or die ("Could not insert into database.");

} else {}

?>

</font>