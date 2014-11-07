<?php
	
	use \DateTime;

	$class_methods = get_class_methods(new DateTime());

	foreach ($class_methods as $method_name) {
	    echo '<h3>'.$method_name.'</h3>';
	}

?>
