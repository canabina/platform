<?php

	define ( 'DOCUMENT_ROOT', __DIR__.'/' );

	header ( 'Content-Type: text/html; charset=utf-8' );

	ini_set ( 'display_errors', 1 );

	error_reporting( E_ERROR | E_WARNING | E_PARSE );

	session_start ();

	require ( DOCUMENT_ROOT . '/vendor/autoload.php' );

	require ( DOCUMENT_ROOT.'/vendor/simplelight/framework/framework.php' );

	new Sili;
