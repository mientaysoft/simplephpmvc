<?php

define('DIR', realpath("../") . DIRECTORY_SEPARATOR );


require_once( DIR .  "vendor/autoload.php");

use NoahBuscher\Macaw\Macaw as Routes;

session_start();

Routes::get("/", "App\Controllers\HelloWorld@index");

Routes::dispatch();