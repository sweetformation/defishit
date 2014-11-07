<?php



// nom du répertoire qui contient les images
$dirname = './img/';

  if (is_dir($dirname)) {
    if ($dir = opendir($dirname)) {
        while (($file = readdir($dir)) !== false) {


		if ($file != "." && $file !="..") {

			//manipulation de l'image
			//avec SimpleImage
		require("vendor/abeautifulsite/simpleimage/src/abeautifulsite/SimpleImage.php");

		$img = new abeautifulsite\SimpleImage("img/" . $file);
		$img->thumbnail(111,191)->desaturate()->save("uploads/thumbs/" . $file);

		echo $file;

		?><div>
			<img src="uploads/thumbs/<?php echo $file?>" title="<?php echo $file; ?>">
		</div><?php

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
</head>

<body>




</body>
</html>

