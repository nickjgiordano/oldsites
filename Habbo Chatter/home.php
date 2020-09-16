<html>

<head>

<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=788,height=524,left = 246,top = 138');");
}
// End -->
</script>

</head>

<body background="site/bg3.gif">

<style type=text/css>body{SCROLLBAR-FACE-COLOR: white; SCROLLBAR-HIGHLIGHT-COLOR: c0ea00; SCROLLBAR-SHADOW-COLOR: c0ea00; SCROLLBAR-3DLIGHT-COLOR: white; SCROLLBAR-ARROW-COLOR: black; SCROLLBAR-TRACK-COLOR: white; SCROLLBAR-DARKSHADOW-COLOR: white}</style>

<style type="text/css">
<!--
A:link { COLOR: black; TEXT-DECORATION: none; font-weight: normal }
A:visited { COLOR: black; TEXT-DECORATION: none; font-weight: normal }
A:active { COLOR: black; TEXT-DECORATION: none }
A:hover { COLOR: c0ea00; TEXT-DECORATION: none; font-weight: normal }
-->
</style>

<font face="verdana" size="1">

<center><b><u>Home</u></b></center>

<?PHP
 $template = "Chatter";
 include("cutenews/show_news.php");
?>

<p><a href="javascript:popUp('cutenews/index.php')">LOGIN</a>

</font>

</body>

</html>