<?php
var_dump($post);

if (! empty ( $post )) {
	$csvData = file_get_contents ( $files['file']['tmp_name'] );
	$lines = explode ( PHP_EOL, $csvData );
	$array = array ();
	foreach ( $lines as $line ) {
		$array [] = str_getcsv ( $line );
	}
	var_dump( $array );
}

?>