<?php


$title = "";
if (!empty($_POST['t'])){
    $title = $_POST['t'];
}

$json_url = "http://www.imdbapi.com/?t=$title";
$json = file_get_contents($json_url);
$recherche = json_decode($json, TRUE);

?>


<!doctype html>
<html>
	<head>
		<meta charset="utf8">
		<title>defishit - Movie</title>
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>
<div id="wrapper">
		<header>
			<div class="container">
				<h1>OMDb-API</h1>
			</div>
		</header>

	<form method="POST" action=""
		<div class="fieldset">
                        <label for="recherche">ENTREZ LE TITRE DU FILM</label>
                        <input type="text" id="recherche" name="t" size="50" placeholder="Recherche" value="">
                    </div>

        <input type="submit" value="Rechercher" alt="Lancer la recherche!">
    </form>

<?php /*echo "<pre>";
print_r($recherche);
echo "</pre>";*/

?>

<div class="fieldset">
	<label>TITRE DU FILM : <?php echo $recherche['Title']; ?>
	</div>
<div class="fieldset">
	<label>ANNEE : </label><?php echo $recherche['Year']; ?>
</div>
<div class="fieldset">
	<label>RATING : </label><?php echo $recherche['Rated']; ?>
</div>
<div class="fieldset">
	<label>DATE DE SORTIE : <?php echo $recherche['Released']; ?>
	</div>
<div class="fieldset">
	<label>DUREE : <?php echo $recherche['Runtime']; ?>
	</div>
<div class="fieldset">
	<label>GENRE : <?php echo $recherche['Genre']; ?>
	</div>
<div class="fieldset">
	<label>REALISATEUR : <?php echo $recherche['Director']; ?>
	</div>
<div class="fieldset">
	<label>SCENARISTE : <?php echo $recherche['Writer']; ?>
	</div>
<div class="fieldset">
	<label>ACTEURS : <?php echo $recherche['Actors']; ?>
	</div>
<div class="fieldset">
	<label>RESUME : <?php echo $recherche['Plot']; ?>
	</div>
<div class="fieldset">
	<label>PAYS : <?php echo $recherche['Country']; ?>
	</div>


</div>

		<script src="../js/jquery.js"></script>
		<script src="../js/app.js"></script>
	</body>
</html>