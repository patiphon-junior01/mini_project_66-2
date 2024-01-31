<?php
require_once('../function.php');
$conn = new db;
date_default_timezone_set("Asia/bangkok");
$date_now = date("Y-m-d H:i:s");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  try {
    $temp = isset($_GET['temp']) ? $_GET['temp'] : null;
    $humi = isset($_GET['humi']) ? $_GET['humi'] : null;
    if ($temp == null || $humi == null) {
      http_response_code(400);
      echo json_encode(["message" => "Please Sent Temp & Humi.."]);
      return;
    }

    // fetch last data for check different data
    $data_last =  $conn::fetch_last_data();
    // echo json_encode(["message" => $data_last]); // for debug

    if ($data_last['temp'] != $temp || $data_last['humi'] != $humi) {
      $insert_temp_h =  $conn->insert("temp_moisture", ["temp", "humi", "created_date"], [$temp, $humi, $date_now]);
      if ($insert_temp_h != false) {
        http_response_code(200);
        echo json_encode(["message" => "Insert Data Finish"]);
        return;
      } else {
        http_response_code(500);
        echo json_encode(["message" => "Server Error"]);
        return;
      }
    } else {
      http_response_code(400);
      echo json_encode(["message" => "Not different Data"]);
      return;
    }
  } catch (Exception $e) {
    echo json_encode(["message" => "error exception" . $e->getMessage()]);
  }
} else {
  http_response_code(400);
  echo json_encode(["message" => "Not Allow Method"]);
  return;
}
