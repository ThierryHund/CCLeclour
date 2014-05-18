<?php
var_dump($post);

if (! empty ( $post )) {
	$csvData = file_get_contents ( $post['file'] );
	$lines = explode ( PHP_EOL, $csvData );
	$array = array ();
	foreach ( $lines as $line ) {
		$array [] = str_getcsv ( $line );
	}
	print_r ( $array );
}

?>