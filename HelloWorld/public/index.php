<?php

require_once( '../../vendor/autoload.php' );

( new \Staq\Server )
	->getCurrentApplication( )
	->addController( '/(:path)', function($path='World') {
		return 'Hello '.$path;
	})
	->run( );
