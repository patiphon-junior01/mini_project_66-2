<?php

class Connect
{
  // for test on docker
  // private const HOST = "tem-db";
  // private const USER = "root";
  // private const PASS = "123456789pong";
  // private const DB = "PPD";

  // on server
  private const HOST = "localhost";
  private const USER = "it66g6";
  private const PASS = "it66g6";
  private const DB = "it66g6";

  private $dns = null;
  public static $conn = null;

  public function __construct()
  {
    try {
      $this->dns = "mysql:host=" . self::HOST . ";dbname=" . self::DB . "";
      self::$conn = new PDO($this->dns, self::USER, self::PASS);
      self::$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      // echo "<script>console.log('Connected');</script>";
      // echo "Connecting";
    } catch (PDOException $e) {
      echo "Connect Failed, Please Wait A Minute";
      die("Connect Failed, Please Wait A Minute" . $e->getMessage());
    }

    return self::$conn;
  }


  // function validate input
  public function testinput($data)
  {
    $data = strip_tags($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);

    return $data;
  }

  public function message($context, $status)
  {
    return  json_encode(["massage" => $context, "status" => $status]);
  }
}