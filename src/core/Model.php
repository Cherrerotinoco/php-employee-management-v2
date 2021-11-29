<?php
defined('BASEPATH') or exit('No se permite acceso directo');
/**
 * Modelo base
 */
class Model
{
  /**
  * @var object
  */
  protected $db;

  /**
  * Inicializa conexion
  */
  public function __construct()
  {
    $this->db = conn();
  }

  /**
  * Finaliza conexion
  */
  public function __destruct()
  {
    $this->db->close();
  }
}

# Class to enable PDO connection
// Create connection
function conn()
{
    try {
        $connection = "mysql:host=" . HOST . ";"
            . "dbname=" . DB . ";"
            . "charset=" . CHARSET . ";";

        $options = [
            PDO::ATTR_ERRMODE           =>  PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES  => FALSE,
        ];

        $pdo = new PDO($connection, USER, PASSWORD, $options);

        return $pdo;
    } catch (PDOException $e) {
        //require_once(VIEWS . "/error/error.php");
    }
}