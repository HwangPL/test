<? require_once ('mysql_connect.php'); connection(); ?>
<? include ('functions.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
		<link rel="stylesheet" type="text/css" href="skins/tango/skin.css" />
		<link rel="stylesheet" media="all" type="text/css" href="site.css" />
		<title>Workbench Shop</title>
		<script type="text/javascript">
			$(document).ready(function() {
			    $('#mycarousel').jcarousel({
			        vertical: true, scroll: 3, wrap: "last", animation: "slow"
			    });
				<? karuzela_click()?>
	    	 });
		</script>
	</head>
<body>
<div id="content">
	<div id="left">
		<div id="menu">
			<div id="menu_carousel">
			<ul id="mycarousel" class="jcarousel-skin-tango">
			<? karuzela_img_view(); ?>
			</ul>
			</div>
		</div>
	</div>
	<div id="right">
		<div id="product">	
			<div id="produkt_window">
			<? produkt_img_view(); ?>
			</div>
		</div>
		<div id="product_info_box">
			<div id="add">
				<div id="add_koszyczek"><span>Dodaj do koszyka!</span></div>
			</div>
			<div id="info">
		      	<div id="info_produkt">
	       		<? produkt_info() ?>
		      	</div>
	       	</div>
    	</div>
    </div>  
    <div id="footer">
    <span>&copy;2013 by Izi&#38;Hwang</span>
    </div>
</div>
</body>	
</html>