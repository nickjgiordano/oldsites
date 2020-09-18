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

<p><form method="post" action="sendeail.php">

<?php
$ipi = getenv("REMOTE_ADDR");
$httprefi = getenv ("HTTP_REFERER");
$httpagenti = getenv ("HTTP_USER_AGENT");
?>

<input type="hidden" name="ip" value="<?php echo $ipi ?>" />
<input type="hidden" name="httpref" value="<?php echo $httprefi ?>" />
<input type="hidden" name="httpagent" value="<?php echo $httpagenti ?>" />

<p>Name:
<br><input type="text" name="visitor" size="35" />

<p>E-mail:
<br><input type="text" name="visitormail" size="35" />

<p>Subject:
<br><select name="attn" size="1">
<option value=" Question ">Question</option> 
<option value=" Suggestion ">Suggestion</option> 
<option value=" Affiliation ">Affiliation</option>
<option value=" GanGsta fansite request ">"GanGsta" fansite request</option>
<option value=" Job application ">Job application</option>
<option value=" Other ">Other</option>
</select>

<p>Message:
<br><textarea name="notes" rows="6" cols="30"></textarea>

<p><input type="submit" value="Submit" />

</form>

</font>

</body>

</html>