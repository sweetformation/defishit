<?php

	function alternateBoldRegularWords($string) {

		// Récupère la phrase en un tableau de mots séparés par des espaces
		$words = explode(" ", $string);
		$newSentence = '';

		// Pour chaque mot, 1 sur 2 en strong avec la clé % 2 !
		foreach($words as $key => $word) {
			$i = $key % 2;
		    if ($i == 0) {
		        $newSentence .= '<strong>' . $word . '</strong> ';
		    } 
		    elseif ($i == 1) {
		        $newSentence .= $word . ' ';
		    }
		}

		return $newSentence;
	}