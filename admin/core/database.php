<?php


// session_start();
class Database{
  
  // specify your own database credentials
  private $db_host = "localhost";
  private $db_name = "cookfinderdb";
  private $db_user = "harrcfqo";
  private $db_pass = "SwvjuG0Zk4Nk";
  public $db_con;


  public function __construct(){
   // attempt pdo connection
    try{
        $this->db_con = new PDO("mysql:host=" . $this->db_host . ";dbname=" . $this->db_name, $this->db_user, $this->db_pass);
    }
    catch(PDOException $exception){
        echo "db_conection error: " . $exception->getMessage();
    }
    //echo 'Connect good';
    return $this->db_con;
}

} // end of database connection class