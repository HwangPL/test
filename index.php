<? require_once ('mysql_connect.php'); connection(); ?>
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
		
				
				<? 
					$result = mysql_query('SELECT id FROM produkt');
					$j =  mysql_num_rows($result);
						while ($produkt = mysql_fetch_array($result)) {
									echo "$('#produkt" . $produkt[0] . "').click(function(){
										";
									for ($i=1; $i<=$j; $i++) {
										if ($i == $produkt[0]) {
											echo "$('.produkt" . $produkt[0] . "').show();
											";
											}
										else {
									   		echo "$('.produkt" . $i . "').hide();";
											}
											}
											echo "});
										";
									}
							
				?>
	    	 });
		</script>
	</head>
	
	<body>
	<div id="content">
		<div id="top">
			<div id="top_left"> </div>
			<div id="top_right"> </div>
		</div>
		
		<div id="left">
			<div id="menu">
					<div id="menu_wtl"> </div>
					<div id="menu_wtm"> </div>
					<div id="menu_wtr"> </div>
					<div id="menu_wlm"> </div>
			<div id="menu_carousel">
				 			<ul id="mycarousel" class="jcarousel-skin-tango">
				 				<? 
									$i = 1;
									$result = mysql_query('SELECT id FROM produkt');
										while ($produkt = mysql_fetch_array($result)) {
											echo "<li id=\"produkt" . $produkt[0] . "\"><img src=\"images/produkt" . $produkt[0] . ".jpg\" /></li>";
										}
									$i++;
								?>
							</ul>
			</div>
					<div id="menu_wr"> 
						<div id="menu_wrt"> </div>
						<div id="menu_wrm"> </div>
						<div id="menu_wrb"> </div>
					</div>
					<div id="menu_wb"> 
						<div id="menu_wbl"> </div>
						<div id="menu_wbm"> </div>
						<div id="menu_wbr"> </div>
					</div>
				</div>
			</div>
		
				<div id="right">
			<div id="product">	
					<div id="produkt_wtl"> </div>
					<div id="produkt_wtm"> </div>
					<div id="produkt_wtr"> </div>
					<div id="produkt_wlm"> </div>
					<div id="produkt_window">
						<? 
							$i = 1;
							$result = mysql_query('SELECT id FROM produkt');
							while ($produkt_img = mysql_fetch_array($result)) {
								if ($i==1)
									echo "<img class='img_produkt produkt1' id='produkt1_big' src='images/produkt1_big.jpg' alt='Zdjecie produktu' />";
								else {
									echo "<img class='img_produkt produkt" . $produkt_img[0] . "' style='display: none' id='produkt" . $produkt_img[0] . "_big' src='images/produkt" . $produkt_img[0] . "_big.jpg' alt='Zdjecie produktu' />";
									}
								$i++;
							}
						?>
					</div>
					<div id="produkt_wr"> 
						<div id="produkt_wrt"> </div>
						<div id="produkt_wrm"> </div>
						<div id="produkt_wrb"> </div>
					</div>
					<div id="produkt_wbl"> </div>
					<div id="produkt_wbm"> </div>
					<div id="produkt_wbr"> </div>
				
			</div>
			<div id="product_info_box">
				<div id="add">
					<div id="add_wtl"> </div>
					<div id="add_wtm"> </div>
					<div id="add_wtr"> </div>
					<div id="add_wlm"> </div>
					<div id="add_koszyczek"><span>Dodaj do koszyka!</span></div>
					<div id="add_wr"> 
						<div id="add_wrt"> </div>
						<div id="add_wrm"> </div>
						<div id="add_wrb"> </div>
					</div>
					<div id="add_wbl"> </div>
					<div id="add_wbm"> </div>
					<div id="add_wbr"> </div>
				</div>
				
					<div id="info">
					<div id="info_wtl"> </div>
					<div id="info_wtm"> </div>
					<div id="info_wtr"> </div>
					<div id="info_wlm"> </div>
					<div id="info_produkt">
						<?
							$i = 1;
							$result = mysql_query('SELECT * from produkt');
							while ($produkt = mysql_fetch_array($result)) {
								if ($i==1)
									echo "<span class='produkt1'>" . $produkt[3] . "<br /><br /><b>CENA: </b>" . $produkt[2] ."PLN</span>";
								else {
									echo "<span class='produkt" . $i . "' style='display:none'>" . $produkt[3] . "<br /><br /><b>CENA: </b>	" . $produkt[2] ."PLN</span>";
								}
								$i++;
							}
						?>
					</div>
						
					<div id="info_wr"> 
						<div id="info_wrt"> </div>
						<div id="info_wrm"> </div>
						<div id="info_wrb"> </div>
					</div>
					<div id="info_wbl"> </div>
					<div id="info_wbm"> </div>
					<div id="info_wbr"> </div>
			
				</div>
			</div>
		</div>
				<div id="footer">
					<span>&copy;2013 by Izi&#38;Hwang</span>
				</div>
	
	</div>
		</body>	
</html>