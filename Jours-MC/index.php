<!DOCTYPE HTML>
<html>

	<head>
		<meta charset="utf8" />
		<title>JOURS-MC</title>
		<meta name="description" content="">
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>

	<?php

		$debut = new DateTime( '2016-01-01' );
		$fin = new DateTime( '2016-12-31' );

		$interval = new DateInterval('P1D');
		$daterange = new DatePeriod($debut, $interval ,$fin);

		foreach($daterange as $date){
		    echo $date->format("d-m-Y") . "<br>";
		}
	?>

	</body>
</html>