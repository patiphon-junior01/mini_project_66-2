#include <DHT.h>
#include <WiFi.h>
#include <WiFiClient.h>
#include <LiquidCrystal_I2C.h>
#include <HTTPClient.h>

#define WIFI_SSID "POCO X3 Pro"
#define WIFI_PASSWORD "1234567890"
#define DHTPIN 4
#define DHTTYPE DHT11

//local network
//String serverName = "http://192.168.116.62/api/insert/index.php";

//server
String serverName = "https://it66.iot-cm.com/it66g6/Web/api/insert/index.php";

LiquidCrystal_I2C lcd(0x27, 16, 2);
DHT dht(DHTPIN, DHTTYPE);
// FirebaseData fbdo;

void setup()
{

  Serial.begin(9600);

  delay(1000);
  WiFi.begin(WIFI_SSID, WIFI_PASSWORD);
  Serial.print("wait connect wifi");
  while (WiFi.status() != WL_CONNECTED)
  {
    Serial.print(".");
    delay(500);
  }

  lcd.init(); // initialize the lcd
  lcd.backlight();
  dht.begin();
  Serial.println("");
  Serial.println("Da ket noi WiFi!");
  Serial.println(WiFi.localIP());
}

void loop()
{

  float h = dht.readHumidity();
  float t = dht.readTemperature(); // Đọc nhiệt độ theo độ C

  if (isnan(h) || isnan(t))
  {
    Serial.println("Failed to read from DHT sensor!");
    return;
  }

//  Serial.println("Temp = " + String(t, 1) + " C"); // แสดงค่าอุณหภูมิ
//  Serial.println("Humi = " + String(h, 1) + " %"); // แสดงค่าความซื้น

  // get json
  if (WiFi.status() == WL_CONNECTED)
  {
    HTTPClient http;

    String serverPath = serverName + "?temp="+ t + "&humi=" + h;

    // Your Domain name with URL path or IP address with path
    http.begin(serverPath.c_str());

    // If you need Node-RED/server authentication, insert user and password below
    // http.setAuthorization("REPLACE_WITH_SERVER_USERNAME", "REPLACE_WITH_SERVER_PASSWORD");

    // Send HTTP GET request
    int httpResponseCode = http.GET();

    if (httpResponseCode > 0)
    {
      Serial.print("HTTP Response code: ");
      Serial.println(httpResponseCode);
      String payload = http.getString();
      Serial.println(payload);
    }
    else
    { 
      Serial.print("Error code: ");
      Serial.println(httpResponseCode);
    }
    // Free resources
    http.end();
  }

  lcd.setCursor(0, 0);
  lcd.print("Temp = " + String(t, 1) + " C"); // แสดงค่าอุณหภูมิ
  lcd.setCursor(0, 1);
  lcd.print("Humi = " + String(h, 1) + " %"); // แสดงค่าความซื้น
  delay(200);
  lcd.clear();


  delay(100);
}
