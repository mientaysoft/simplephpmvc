<?php

namespace App\Core;

class Db extends \PDO {

	private static $instance = NULL;

	public static function getInstance() {

		$dsn = '';
		$pdo_options = array();

		if (!isset(self::$instance)) {
			$supported_dbtypes = [ "mysql", "pgsql" ];

			global $dbconfig;

			if ( in_array($dbconfig['dbtype'], $supported_dbtypes) ) {

				// Chu thich hoac xoa dong nay khi dua ung dung len online
				$pdo_options[\PDO::ATTR_ERRMODE] = \PDO::ERRMODE_EXCEPTION;

				if ( $dbconfig['dbtype'] === 'mysql' ) {
					$dsn = 'mysql:host=' . $dbconfig['dbhost'];
					empty( $dbconfig['dbname'] ) OR $dsn .= ';dbname=' . ltrim( $dbconfig['dbname'], '/' ) . ';charset=utf8';

				}
				else {
					$dsn = 'pgsql:host=' . $dbconfig['dbhost'];

					empty( $dbconfig['dbport'] ) OR $dsn .= ';port=' . $dbconfig['dbport'];
					empty( $dbconfig['dbname'] ) OR $dsn .= ';dbname=' . ltrim( $dbconfig['dbname']);

					if ( !empty( $dbconfig['dbuser'] ) ) {
						$dsn .= ';user=' . $dbconfig['dbuser'];
						empty( $dbconfig['dbpass'] ) OR $dsn .= ';password=' . $dbconfig['dbpass'];
					}
				}

				try {
					self::$instance = new Db( $dsn , $dbconfig['dbuser'],  $dbconfig['dbpass'], $pdo_options);
				} catch(\Exception $e) {
					die($e->getMessage());
				}


			}
			else {
				exit('Unsuported DB Type ['. $dbconfig['dbtype'] .']');
			}
		}

		return self::$instance;
	}

	public static function freeInstance() {
		self::$instance = NULL;
	}

}