<?php
include_once('DataBase.php');

// Define configuration
define("DB_HOST", "ec2-54-204-43-7.compute-1.amazonaws.com");
define("DB_USER", "zyclawriguuzwb");
define("DB_PASS", "a7c8f3179e9aecde0d5a3170a0998fc4717d5920caab862b25c194258de51935");
define("DB_NAME", "d30ihbksii07go");

class Collector extends DataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }
}

?>
