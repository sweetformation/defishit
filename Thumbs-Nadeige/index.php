<?php
require("vendor/abeautifulsite/simpleimage/src/abeautifulsite/SimpleImage.php");
// nom du répertoire qui contient les images
$dirname = './img/';

  if (is_dir($dirname)) {
    if ($dir = opendir($dirname)) {
        while (($file = readdir($dir)) !== false) {


		if ($file != "." && $file !="..") {

			//manipulation de l'image
			//avec SimpleImage


		$img = new abeautifulsite\SimpleImage("img/" . $file);
		//$img->thumbnail(111,191)->desaturate()->overlay('uploads/WF3.png', 'bottom right', .5, -10, -10)->save("uploads/thumbs/" . $file);
		$img->thumbnail(191,111)->desaturate()->text('WF3', 'Roboto/Roboto-Black.ttf', 24, '#fff', 'bottom', 20, 0)->save("uploads/thumbs/" . $file);

		?>
			<img src="uploads/thumbs/<?php echo $file?>" title="<?php echo $file; ?>">
		<?php

           }


        }

        closedir($dir);
    }
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>SimpleImage</title>
	<meta name="description" content="">
	<link href="css/style.css" type="text/css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>

<body>




</body>
</html>

