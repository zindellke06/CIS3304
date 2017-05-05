<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<title>Arrow Speed Calculator</title>
<style type="text/css">
body {
		background: #eeeeee;
		color: blue;
		font-family: Tahoma, Geneve, san-serriff;
		font-size: large;
		padding: 10px;
}
h1 {
		font-size: 24pt;
		font-style: normal;
		font-weight: bolder;
		font-variant: small-caps;
}
</style>
</head>

<body> 
<h1> Arrow Speed Calculator</h1>
<?php
$ibo_speed = $_GET['ibo'];
$draw_length = $_GET['dl'];
$draw_weight = $_GET['dw'];
$arrow_weight = $_GET['arrow'];
$string = $_GET['string'];
$arrow_speed = $ibo_speed - ((30 - $draw_length) * 10) - (($arrow_weight - $draw_weight * 5)/3) - $string/3;
echo "<p>IBO rating for the bow (FPS): $ibo_speed";
echo "<br>Actual draw length of the bow (inches): $draw_length";
echo "<br>Peak draw weight (pounds): $draw_weight</p>";
echo "<br>Total arrow weight (grains):  $arrow_weight</p>";
echo "<br>Additional weight on the string (grains): $string</p>";
echo "<br>Estimated arrow speed: $arrow_speed</p>";

?>
</body>
</html>