อุปกรณ์แจ้งเตือนน้ำล้น (IOT)

อุปกรณ์ที่ใช้
1. Rain Sensor
2. ESP8266
3. มอเตอร์วาล์วน้ำ

หลักการทำงาน
1. Sensor ตรวจจับระดับน้ำ
2. Node MCU รับค่าจาก Sensor และทำหน้าที่ส่งค่าไปบันทึกที่ฐานข้อมูล
3. ตรวจสอบระดับน้ำได้ผ่าน Web 
4. หากน้ำล้นถึงระดับที่ตั้งค่าไว้จะแจ้งเตือนผ่าน Line Notify พร้อมกับปิดววาร์วน้ำ
5. หากน้ำล้นไม่ถึงถึงระดับที่ตั้งค่าไว้จจะเปิดววาร์วน้ำ
   ![Screenshot 2024-06-02 225059](https://github.com/Adisakz/Overflowing_Alarm_IOT/assets/118262988/8c2f174b-b7a3-4a10-9f06-d7f2962fe5ee)
   ![Screenshot 2024-06-02 225544](https://github.com/Adisakz/Overflowing_Alarm_IOT/assets/118262988/8de8debb-8ddd-4e82-9aae-c3c3222397ee)


