<?php

define('DIR', realpath("../") . DIRECTORY_SEPARATOR );

define('ENVIRONMENT', 'production');

define('BASEURL', 'https://abcxyz.herokuapp.com');

define('BASEPATH', TRUE);

session_start();

/**
 * Database config
 */

$dbconfig = array();


if ( ENVIRONMENT === 'production' ) {

	// Heroku setup dbconfig
	$dbopts = parse_url(getenv('DATABASE_URL'));
	$dbconfig = [
		"dbtype" => "pgsql",
		"dbhost" => $dbopts["host"],
		"dbuser" => $dbopts["user"],
		"dbpass" => $dbopts["pass"],
		"dbname" => ltrim($dbopts["path"], '/'),
		"dbport" => $dbopts["port"]
	];

}
else {
	/**
	 * ## localhost DB Config
	 */
	$dbconfig = [
		"dbtype" => "pgsql",
		"dbhost" => "localhost",
		"dbuser" => "store",
		"dbpass" => "store",
		"dbname" => "storemanager",
		"dbport" => "5432"
	];
}

require_once( DIR .  "vendor/autoload.php");

use NoahBuscher\Macaw\Macaw as Routes;

Routes::get("/", "App\Controllers\Welcome@index");

try {
	Routes::dispatch();
} catch (\Exception $e) {
	echo $e->getMessage();
}