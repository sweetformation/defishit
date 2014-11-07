<?php

	$methods = get_class_methods('DateTime');

	foreach ($methods as $method) {
	    echo '<h3>$method</h3>';
	}

?>
