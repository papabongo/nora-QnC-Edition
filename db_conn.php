<?
date_default_timezone_set  ( 'Europe/Berlin'   );
$database="nora";
$connect=mysql_pconnect("localhost","website","n0raR00t");
if (!$connect)
{
	echo("Unable to connect to the database!<BR><BR>");
	echo("Please contact the <A HREF='mailto:webmaster@nora'>Webmaster</A>.");
	exit;
}
mysql_select_db($database,$connect);
?>
