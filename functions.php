<?php

$includes = [
	'logic/assets.php',
	'logic/setup.php',
	'logic/titles.php',
	'logic/excerpt.php'
];

foreach ($includes as $file) {
	if ( ! $filepath = locate_template( $file ) ) {
		trigger_error( sprintf( __( 'Error locating %s for inclusion', 'thss' ) , $file ), E_USER_ERROR );
	}

	require $filepath;
}

unset( $file, $filepath );