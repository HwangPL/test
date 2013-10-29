<?php 
function karuzela_click() {
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
}

function karuzela_img_view() {
		$i = 1;
		$result = mysql_query('SELECT id FROM produkt');
			while ($produkt = mysql_fetch_array($result)) {
				echo "<li id=\"produkt" . $produkt[0] . "\"><img src=\"images/produkt" . $produkt[0] . ".jpg\" alt=\"produkt" . $produkt[0] . " \"/></li>";
			}
		$i++;
}

function produkt_img_view() {
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
}

function produkt_info() {
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
}
?> 