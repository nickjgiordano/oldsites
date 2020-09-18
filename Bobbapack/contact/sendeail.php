<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body background="table.gif">

<style type="text/css">
<!--
A:link { COLOR: black; TEXT-DECORATION: none; font-weight: normal }
A:visited { COLOR: black; TEXT-DECORATION: none; font-weight: normal }
A:active { COLOR: black; TEXT-DECORATION: none }
A:hover { COLOR: 3c82b8; TEXT-DECORATION: none; font-weight: normal }
-->
</style>

<font face="verdana" size="1">

<center><b>Contact Us</b></center>
<hr size="1" color="3c82b8">

<p><?php
if(!$visitormail == "" && (!strstr($visitormail,"@") || !strstr($visitormail,"."))) 
{
echo "You need to enter a valid e-mail address! \n"; 
$badinput = "Your information will not be submitted until you do so.\n";
}
if(empty($visitor) || empty($visitormail) || empty($notes )) {
echo "You need to fill in all of the fields!\n";
}
echo $badinput;

$todayis = date("j/F/y") ;

$attn = $attn ; 
$subject = $attn; 

$notes = stripcslashes($notes); 

$message = " $todayis [EST] \n
Subject: $attn \n
Message: $notes \n 
From: $visitor ($visitormail)\n
IP: $ip \n
Browser Information: $httpagent \n
";

$from = "From: $visitormail\r\n";

mail("contact@bobbapack.com", $subject, $message, $from);

?>

<p>Thanks! Click <a href="contact.php"><b>here</b></a> to go back.

</font>

</body>

</html>