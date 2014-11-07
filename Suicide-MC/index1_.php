<?php
	
	// 1.Méthode avec une création - écriture - fermeture - destruction
	// Récupère le chemin d'accès au répertoire
	$path = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$path = substr_replace($path, "C:/xampp2/htdocs/", 0, strlen("localhost/"));
	//$path = str_replace("/", "\\", $path);


	// Créer un fichier suicide.php
		// w= Ouvre en écriture seule 
		// Place le pointeur de fichier au début du fichier et réduit la taille du fichier à 0. 
		// Si le fichier n'existe pas, PHP tente de le créer.	
	$suicide = fopen($path."suicide.php", 'w'); 

	// Ecrit dans le fichier et le ferme
	fwrite($suicide, '<h1 style="padding: 50px; font-size: 10em">bye bye</h1>');
	fwrite($suicide, '<?php unlink("suicide.php"); ?>');
	fclose($suicide);
	include("suicide.php");

	// Détruit le fichier s'il existe d'ici ou sinon se détruit en écrivant inside unlink itself !
	if(file_exists($path."suicide.php")) { 
		//unlink($path."suicide.php");
	} 



	// 2.Méthode avec le fichier qui fonctionne qu'une seule fois
	/*echo '<h1 style="padding: 50px; font-size: 10em">bye bye</h1>';
	unlink("index.php");*/

?>
