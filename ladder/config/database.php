<?php

$config['default'] = array(
	// Just the hostname. IP address or DNS name is ok.
	'hostname'	=> 'localhost',

	// Specify a port number as a string, or FALSE for default.
	'port'		=> '3306',

	// Username and password to connect as.
	'username'	=> 'root',
	'password'	=> '',

	// A database, or array of databases to apply migrations to.
	'database'	=> 'hunnydolist',

	// Optional. Use a compressed connection?
	// 'compress' => TRUE,

	// Optional. You can change the name of the migrations table.
	// 'migrations_table' => 'migrations',

	// Optional. You can change the name of the key-value data table.
	// 'kvdata_table' => 'migrations_kvdata',
);

// You can specify more than one connection, and switch using --config=live
$config['live'] = array(
	'hostname'	=> 'server2.myreal.host.name',
	'port'		=> 3306,
	'username'	=> 'root',
	'password'	=> '',
	'database'	=> array(
		'multiple',
		'databases',
		'here',
	),
);