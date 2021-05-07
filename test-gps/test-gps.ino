#include <SoftwareSerial.h>

#define rxPin 8
#define txPin 9
SoftwareSerial gpsSerial(rxPin,txPin); 

void setup()
{
  //Begin serial communication with Arduino and Arduino IDE (Serial Monitor)
  Serial.begin(115200);
  
  //Begin serial communication with Arduino and SIM800L
  gpsSerial.begin(9600);

  Serial.println("Initializing...");
  delay(1000);
}

void loop()
{
  while (gpsSerial.available() > 0)
    Serial.write(gpsSerial.read());
}
