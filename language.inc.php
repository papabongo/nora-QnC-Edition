<?

session_start();

//load config
require_once("config.inc.php");
require_once("db_conn.php");

if ($_REQUEST["lang"])
{
	if ($_REQUEST["lang"]=="de")
	{
		$_SESSION["language"]="de";
	}
	elseif ($_REQUEST["lang"]=="fr")
	{
		$_SESSION["language"]="fr";
	}
	else
	{
		$_SESSION["language"]="en";
	}
}
if (!$_SESSION["language"]) 
{
	$browserlang = strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
   if ($browserlang =="fr" || $browserlang =="de" || $browserlang =="en" )
   {
		$_SESSION["language"]=$browserlang;
	}
	else
	{
		$_SESSION["language"]="en";
	}
}
$language=$_SESSION["language"];

//load $terms
$lang=array();
require_once("lang.".$language.".inc.php");



//constants



?>