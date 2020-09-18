
<html>

<head>

<body bgcolor="e9e6f4">
	<font color="navyblue"><?php
// Shoutcast Server Stats
// Parses shoutcasts xml to make an effective stats thing for any website
// Coded by Daniel Brown. Edited by Nick Coates [SharpeHosting.com] [SharpeNews] KEEP THIS INTACT!!!
// Please refer to the readme file for use.
include('config_radio.php');  //you may edit this path to fit your server environment otherwise leave it alone
$scfp = fsockopen("$scip", $scport, &$errno, &$errstr, 10);
 if(!$scfp) {
  $scsuccs=1;
echo''.$scdef.' Habbo Hotel Radio Is Currently Offline';
 }
if($scsuccs!=1){
 fputs($scfp,"GET /admin.cgi?pass=$scpass&mode=viewxml HTTP/1.0\r\nUser-Agent: SHOUTcast Song Status (Mozilla Compatible)\r\n\r\n");
 while(!feof($scfp)) {
  $page .= fgets($scfp, 1000);
 }
######################################################################################################################
/////////////////////////part 1 \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
//define  xml elements
 $loop = array("STREAMSTATUS", "BITRATE", "SERVERTITLE", "CURRENTLISTENERS");
 $y=0;
 while($loop[$y]!=''){
  $pageed = ereg_replace(".*<$loop[$y]>", "", $page);
  $scphp = strtolower($loop[$y]);
  $$scphp = ereg_replace("</$loop[$y]>.*", "", $pageed);
  if($loop[$y]==SERVERGENRE || $loop[$y]==SERVERTITLE || $loop[$y]==SONGTITLE || $loop[$y]==SERVERTITLE)
   $$scphp = urldecode($$scphp);

// uncomment the next line to see all variables
//echo'$'.$scphp.' = '.$$scphp.'<br>';
  $y++;
 }
//end intro xml elements
######################################################################################################################
######################################################################################################################
/////////////////////////part 2\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
//get song info and history
 $pageed = ereg_replace(".*<SONGHISTORY>", "", $page);
 $pageed = ereg_replace("<SONGHISTORY>.*", "", $pageed);
 $songatime = explode("<SONG>", $pageed);
 $r=1;
 while($songatime[$r]!=""){
  $t=$r-1;
  $playedat[$t] = ereg_replace(".*<PLAYEDAT>", "", $songatime[$r]);
  $playedat[$t] = ereg_replace("</PLAYEDAT>.*", "", $playedat[$t]);
  $song[$t] = ereg_replace(".*<TITLE>", "", $songatime[$r]);
  $song[$t] = ereg_replace("</TITLE>.*", "", $song[$t]);
  $song[$t] = urldecode($song[$t]);
  $dj[$t] = ereg_replace(".*<SERVERTITLE>", "", $page);
  $dj[$t] = ereg_replace("</SERVERTITLE>.*", "", $pageed);
$r++;
 }
//end song info

fclose($scfp);
}

//display stats
if($streamstatus == "1"){
//you may edit the html below, make sure to keep variable intact
echo'
<html>

<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<META HTTP-EQUIV="REFRESH" CONTENT="30">
<link rel=stylesheet href="" type="text/css">
<title>'.$scdef.'</title>
</head>

<body text="" bgcolor="e9e6f4">




<p>

<font color="black"><font face="verdana" size="1"><b>DJ Name:</b>&nbsp;'.$servertitle.'</font></p>
<font color="black"><font face="verdana" size="1"><b>Listeners:</b>&nbsp;'.$currentlisteners.' / 200</font></p>

<font face="verdana" size="1" color="black"><b>

    Current Song:</b> '.$song[0].'</font></p>
    <b>
 

	<font face="verdana" size="1">
    Last Song:</font></b>
<font color="black"><font face="verdana" size="1">
 '.$song[1].'
</font>
</body>

</html>';
}
if($streamstatus == "0")
{
//you may edit the html below, make sure to keep variable intact
echo'
<html>

<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<META HTTP-EQUIV="REFRESH" CONTENT="30;URL=radio_stats.php">
<link rel=stylesheet href="" type="text/css">
<title>Habbo Hotel Radio Is Curently Offline</title>
</head>

<body text="" bgcolor=""><STYLE type=text/css>
UNKNOWN {
	FONT-SIZE: 10px; COLOR: #black; FONT-FAMILY: verdana
}
BODY {
	BACKGROUND-COLOR: e9e6f4
}
A:link {
	COLOR: ; TEXT-DECORATION: none
}
A:visited {
	COLOR: #363636; TEXT-DECORATION: none
}
A:hover {
	COLOR: #363636; TEXT-DECORATION: underline
}
A:active {
	TEXT-DECORATION: none
}
BODY {
	FONT-SIZE: 10px; COLOR: e9e6f4; FONT-FAMILY: verdana
}
TD {
	FONT-SIZE: 10px; COLOR: e9e6f4; FONT-FAMILY: verdana
}
TH {
	FONT-SIZE: 10px; COLOR: e9e6f4; FONT-FAMILY: verdana
}
.style5 {font-size: 14px}
</STYLE>
<div><center><img src="offline.gif"></img></center></div>
</body>

</html>';
}
?></font>
</body>
