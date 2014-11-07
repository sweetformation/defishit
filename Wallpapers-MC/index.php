<?php

	$mois = "august";

	$html = file_get_contents('http://ngm.nationalgeographic.com/wallpaper/2013/'.$mois.'-ngm-wallpaper');

	//preg_match_all("/<a href=\"\/wallpaper\/img\/(.*?)\"\starget=\"_blank\"/", $html, $matches);
	preg_match_all("/<a href=\"\/wallpaper\/img\/(.*?)\"\starget=\"_blank\"/", $html, $matches); //, PREG_SET_ORDER
	//echo '<pre>';
	//print_r($matches);
	//echo '</pre>';

	$images = $matches[1];
	//echo '<pre>';
	//print_r($images);
	//echo '</pre>';

	$path = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$path = substr_replace($path, "C:/xampp2/htdocs/", 0, strlen("localhost/"));
	$fichier = $path."nationalgeographic";
	$cpt = 0;

	foreach($images as $image) {
		$url = 'http://ngm.nationalgeographic.com/wallpaper/img/'.$image;
		//die($url);
		$image = file_get_contents($url);

		//header ("Content-type: image/png"); // 1 : on indique qu'on va envoyer une image PNG
		//$img = imagecreate(1600,1200); // 2 : on crée une nouvelle image de taille 1600 x 1200
		//imagepng($img, $fichier."image_".$cpt.".png"); // on enregistre l'image dans le dossier "images"

		file_put_contents($fichier."/image_".$cpt.".jpg", $image);
		$cpt++;
	}

	echo "Terminé !!";






















