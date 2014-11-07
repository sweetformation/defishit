<?php
	
	session_start();

	$polices = array('Comic', 'Verdana');
	//$rand = rand(0, 1);
	//$police = $polices[$rand];

	if (!isset($_SESSION['police'])) {
		$_SESSION['police'] = 0;
	}
	else {
		if ($_SESSION['police'] == 0) {
			$police = $polices[0];
			//echo $police;
			$_SESSION['police'] = 1;
		}
		elseif ($_SESSION['police'] == 1) {
			$police = $polices[1];
			//echo $police;
			$_SESSION['police'] = 0;
		}
	}

?>
 
<!DOCTYPE html>
<head>
	<meta charset="UTF-8" />
	<title>Police-Marcelo</title>
	<style type="text/css">p{font-family: <?php echo $police; ?>;}</style>
</head>
<body>
	<p><?php echo $police; ?></p>
	<p>Créer une page HTMl qui affiche une fois sur deux, par alternance, son contenu en police "Comic", une fois sur deux en "Verdana".</p>
</body>
</html>