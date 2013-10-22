<?php

require_once( '../../vendor/autoload.php' );

( new \Staq\Server )
	->getCurrentApplication( )                               // We get the current application, it will returns an empty one
	->addController( '/(:path)', function($path='World') {
		return 'Hello '.$path;
	})                                                       // We add a controller that listen every routes
	->run( );                                                // Resolve the current route, call a controller and display the result