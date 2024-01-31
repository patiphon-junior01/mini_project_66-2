<?php
// ลองเเล้วใช้งานไม่ได้
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
    $interval = 1;

    try {
      $conn = new db();
      $currentData = $conn::fetch_last_data();

      while (true) {
        $newData = $conn::fetch_last_data();

        if ($currentData['temp'] != $newData['temp']) {
          sendSseData(["tempdata" => $newData]);
          $currentData = $newData;
        }

        sleep($interval);
      }
    } catch (Exception $e) {
      sendSseData(["error" => $e->getMessage()]);
    }

    // Function to send SSE data
    function sendSseData($data)
    {
      echo "data:" . json_encode($data) . "\n\n";
      ob_flush();
      flush();
    }
  }
}
