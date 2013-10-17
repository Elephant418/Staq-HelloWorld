<?php

require_once( '../../vendor/autoload.php' );

( new \Staq\Server )
	->launch( )
	->addController( '/(:path)', function($path=NULL) {
		return 'Hello '.$path;
	})
	->run( );
