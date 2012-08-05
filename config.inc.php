<?
$conflines = file("/opt/nora/conf.d/conf.txt.php", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$conf=array();
foreach ($conflines as $line_num => $line) 
{
	$terms=explode("=",$line,2);
	$key=trim($terms[0]);
	$val=trim($terms[1]);
	$conf[$key]=$val;
}
?>
