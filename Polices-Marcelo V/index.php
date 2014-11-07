<?php
$polices = array('Comic', 'Verdana');
$rand = rand(0, 1);
$police = $polices[$rand]; ?>
 
<!DOCTYPE html>
<head>
	<meta charset="UTF-8" />
	<title>Police-Marcelo</title>
	<style type="text/css">p{font-family: <?php echo $police; ?>;}</style>
</head>
<body>
	<p>Créer une page HTMl qui affiche une fois sur deux, par alternance, son contenu en police "Comic", une fois sur deux en "Verdana".</p>
</body>
</html>