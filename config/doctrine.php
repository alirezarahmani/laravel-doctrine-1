<?php return [

	'metadata' => [
		'driver' => 'config',
		[
			'driver' => 'config'
		],
		[
			'driver' => 'annotation',
		]
	'connection' => [

		'driver' => 'mysqli',
		'host'      => env('DB_HOST', 'localhost'),
		'dbname'  => env('DB_DATABASE', 'forge'),
		'user'  => env('DB_USERNAME', 'forge'),
		'password'  => env('DB_PASSWORD', ''),
		'prefix' => ''
	],

	/*
	|--------------------------------------------------------------------------
	| Sets the directory where Doctrine generates any proxy classes, including
	| with which namespace.
	|--------------------------------------------------------------------------
	|
	| http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/configuration.html
	|
	'proxy_classes' => [
		'auto_generate' => false,
		'directory' => null,
		'namespace' => null,
	],
	*/
	'migrations' => [
		'directory' => '/database/doctrine-migrations',
		'namespace'  => 'DoctrineMigrations',
		'table_name' => 'doctrine_migration_versions'
	],

 	/*
	|--------------------------------------------------------------------------
	| Use to specify the SQL Logger
	| To use with \Doctrine\DBAL\Logging\EchoSQLLogger, do:
	| 'sqlLogger' => new \Doctrine\DBAL\Logging\EchoSQLLogger();
	|
	| http://doctrine-orm.readthedocs.org/en/latest/reference/advanced-configuration.html#sql-logger-optional
	|--------------------------------------------------------------------------
	*/

];
