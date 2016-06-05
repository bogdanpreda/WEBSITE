<?php 
class Database
{
	private static $connection;

	private function __construct() {
		echo "Conn created \n";
	}
	public static function Connection() {
		if(!isset(self::$connection))
			self::$connection = new Database;

		return self::$connection;
	}
		
}

$db = Database::Connection();
$db2 =  Database::Connection();

?>