<?php

class Connect {

  public function init() {
    $servername = "localhost";
    $username = "root";
    $password = "123456789";
    $dbname = "adsi_2104630";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";

      return $conn;
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }
}

?>