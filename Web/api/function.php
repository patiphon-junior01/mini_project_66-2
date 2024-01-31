<?php
require_once("connect.php");

class Db extends Connect
{

  public function fetchAll($table, array $columns)
  {
    $sql = "SELECT " . implode(", ", $columns) . " FROM  " . $table;
    $select =  self::$conn->prepare($sql);
    $select->execute();
    $result = $select->fetchAll();
    return $result;
  }


  public function fetchAll_where($table, array $columns, array $where, array $value)
  {
    $sql = "SELECT " . implode(", ", $columns) . " FROM  " . $table . " WHERE " . implode(" = ? AND ", $where) . " = ?";
    $select =  self::$conn->prepare($sql);
    $select->execute($value);
    $result = $select->fetchAll();
    return $result;
  }

  public static function fetch_last_data()
  {
    $sql = "SELECT * from temp_moisture order by id DESC";
    $select =  self::$conn->prepare($sql);
    $select->execute();
    $result = $select->fetch();
    return $result == false ? [
      "temp" => "0",
      "humi" => "0",
    ] : $result;
  }

  public static function fetch_last_data_limit20()
  {
    $sql = "SELECT * from temp_moisture order by id DESC Limit 20";
    $select =  self::$conn->prepare($sql);
    $select->execute();
    $result = $select->fetchAll();
    return $result;
  }

  public function insert($table, array $columns, array $values)
  {
    $sql_values = "";
    $check_count =   count($columns) - 1;
    for ($i = 0; $i < count($columns); $i++) {
      if ($check_count == $i) {
        $sql_values .= "?";
        continue;
      }
      $sql_values .= "?, ";
    }
    $sql = "INSERT INTO " . $table .  "(" . implode(",", $columns) . ")" . " VALUE (" . $sql_values  . ")";
    $insert = self::$conn->prepare($sql);
    return  $insert->execute($values);
  }
}
