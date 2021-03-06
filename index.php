<? require_once("language.inc.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><? echo($conf["fromname"]." | ".$lang["navi_sendfile"]) ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<link href="style.css" rel="stylesheet" type="text/css"/>
<script language="JavaScript">
</script>
<? require_once("header.inc.php"); ?>
	<script type="text/javascript" src="assets/js/prototype/1.6.1/prototype.js"></script>
		<script type="text/javascript" src="assets/js/scriptaculous.js"></script>
		<script type="text/javascript" src="assets/js/portal.js"></script>
		
		<? require_once 'get_blocks.php'; ?>
		
		<script type="text/javascript">
			var settings 	= {<?=getBlocks()?>};
			
			var options 	= { portal 			: 'columns', 
								editorEnabled 	: true, 
								saveurl 		: 'save.php' };
			var data 		= {};
						
			var portal;
					
			Event.observe(window, 'load', function() {
				portal = new Portal(settings, options, data);
			});
		</script>
		
		<link rel="stylesheet" href="assets/css/style.css"  type="text/css" media="screen" />
		<link rel="stylesheet" href="assets/css/portal.css"  type="text/css" media="screen" />
</head>
<body id="mainbody">
<div class="navdiv" id="navidiv">
<a href="#"><? echo($lang["navi_sendfile"]) ?></a>
<br /><a href="pickupform.php"><? echo($lang["navi_pickupfile"]) ?></a>
<br />
<? if ((bool)$conf["showadminlink"]) { ?>
<br /><a href="admin.php"><? echo($lang["navi_admin"]) ?></a>
<? } ?>
<br />
<br />
<? 
if ($language!="de") echo("<a href='?lang=de'>DE</a>");
if ($language!="fr") echo("<a href='?lang=fr'>FR</a>"); 
if ($language!="en") echo("<a href='?lang=en'>EN</a>");  
?>
</div>

<div class="big-div">

<div class="textdiv1" id="textdiv">

	<div id="plwrapper">

			
			<div id="columns">
				
				<div id="column-1" class="column sidebar"></div>
				
				<div id="column-2" class="column blocks"></div>
				

				
				<div class="portal-column" id="portal-column-block-list" style="display: none;">
					<div class="block" id="block-1">
						<? include("blockdata/block.toptalkers.php"); ?>
					</div>
					
					<div class="block" id="block-2">
						<h1 class="draghandle">Block 2</h1>
						<p>Block 2 data</p>
					</div>
					
					<div class="block" id="block-3">
						<h1 class="draghandle">Block 3</h1>
						<p>Block 3 data</p>
					</div>
					
					<div class="block" id="block-4">
						<h1 class="draghandle">Block 4</h1>
						<p>Block 4 data</p>
					</div>
				</div>
				
			</div>
			
			<div style="clear:both;"></div>
			

			
			<div id="debug">			
				<p style="margin:0px;" id="data"></p>
				
			</div>
			
			<div style="clear:both;"></div>
			

			

			

			
	
			
			
			
			
		</div>







</div>

</div>

<div class="copyrightdiv">This view was loaded <?php echo(date("r")) ?>
</div>
</body>
</html>
