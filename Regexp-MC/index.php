<?php
//^[a-z]{5}.[a-z]{3}$
//^[a-z]{6}-[0-9]{3}$
	if(!empty($_POST)) {
		$chaine = $_POST['chaine'];
		$regex = "/^[a-z]{5}\.[a-z]{3}|^[a-z]{6}-[0-9]{3}$/";
		if(preg_match($regex, $chaine)) {
			$result = "correct";
		} else {
			$result = "pas correct";
		}
	}
?>


<form method="post">
	<input type='text' name="chaine" placeholder="Valeur à tester">
	<input type='submit'>
</form>

<?php
	if(!empty($result)) {
		echo "<p>La chaine ".$chaine." est ".$result."</p>";
	}
?>