<?php

	include("db.php");

	$sql = "SELECT * FROM city
			WHERE population > 2200000
			ORDER BY population";


	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	$cities = $stmt->fetchAll();


	require('fpdf.php');

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(40,10,'Les pays de plus de 2 200 000 ',0,1);
	foreach ($cities as $city) {
		/*print_r($city);
		die();*/
	$pdf->Cell(40,10,$city['name'],0,2,'C');
	}
	$pdf->Output();

?>

<!DOCTYPE html>
<html lang="fr">
 <head>
    <meta charset="utf-8">
	<title>PDF</title>
</head>
<body>
<h1>Les pays de plus de 2 200 000 d'habitants</h1>
	<?php
	foreach($cities as $city){ ?>

			<?php echo $city['name'];?>

			</table>
	<?php	}
	?>


</body>
</html>