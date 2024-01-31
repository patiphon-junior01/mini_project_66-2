<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header('Connection: keep-alive');
require_once('../function.php');
date_default_timezone_set("Asia/Bangkok"); // Corrected timezone

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

  if ($_GET['get_detail']) {
    if ($_GET['token'] !== 'dknfdnjfngbjkfgnbjfngbjknfgbjnjkdnbnfgbnfgbkj') {
      echo json_encode(['message' => "please Send Token"]);
      http_response_code(405);
      return;
    }
    $conn = new db();
    $currentData = $conn::fetch_last_data();
    $currentDataAll = $conn::fetch_last_data_limit20();
    $data_all = $conn->fetchAll("temp_moisture", ['*']);
    echo json_encode(['tmp_now' => $currentData, 'data_all' => $currentDataAll, "count" => count($data_all)]);
  }
}
