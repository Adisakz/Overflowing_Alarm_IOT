#include <Wire.h>   
#include <time.h>
#include <Arduino.h>
#include <ESP8266WiFi.h>
#include <ESP8266WiFiMulti.h>
#include <ESP8266HTTPClient.h>
ESP8266WiFiMulti WiFiMulti;
int sensor1 = D0;
int sensor2 = D1;
int led = D7;
void setup() {
pinMode(sensor1,INPUT);
pinMode(sensor2,INPUT);
pinMode(led,OUTPUT);
 Wire.begin();
 Serial.begin(115200);
 for (uint8_t t = 4; t > 0; t--) {
 Serial.printf("[SETUP] WAIT %d...\n", t);
 Serial.flush();
 delay(1000);
 }
 WiFiMulti.addAP("IOT-RMUTI", "@1111111111111!"); // ssid , password

}
void loop() {
  
int s1 = digitalRead(sensor1);
int s2 = digitalRead(sensor2);
led1();
  if ((WiFiMulti.run() == WL_CONNECTED)) {
    HTTPClient http;
    String url = "http://status.pcnnas.page/Mini-project-iot/Update.php?";
           url += "id1=";
           url +=  s1;
           url += "&id2=";
           url +=  s2;
           
    Serial.println(url);
    http.begin(url); //HTTP
    int httpCode = http.GET();
    if (httpCode > 0) {
    Serial.printf("[HTTP] GET... code: %d\n", httpCode);
    if (httpCode == HTTP_CODE_OK) {
    String payload = http.getString();
    Serial.println(payload);
   } 
   } else {
     Serial.printf("[HTTP] GET... failed, error: %s\n", http.errorToString(httpCode).c_str());
   }
   http.end();
   }
   delay(500);
   
    
}
void led1(){

int s1 = digitalRead(sensor1);
int s2 = digitalRead(sensor2);
if((s1==0)&&(s2==0)){
      digitalWrite(led,HIGH);
      Serial.println("LED HIGH");
}
else {
      Serial.println("LED LOW");
      digitalWrite(led,LOW);
  }
}
