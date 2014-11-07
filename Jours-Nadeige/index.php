<?php




?>




<!doctype html>
<html>
	<head>
		<meta charset="utf8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Jours</title>
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/bootstrap-theme.css">
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>


<?php


$start = new DateTime('2016-01-01');
$end = new DateTime('2016-12-31');
foreach (new DatePeriod($start, new DateInterval('P1D') /* pas d'un jour */, $end) as $dt) {

$unix = strtotime(date("Y-m-d"));
echo date("d-m-Y", $unix);
<?php <br> ?>
}
?>


		<script src="../js/jquery.js"></script>
		<script src="../js/app.js"></script>
	</body>
</html>