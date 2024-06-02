<?php
// เชื่อมต่อฐานข้อมูล
require('dbcon.php');

// รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
$id1=$_GET["id1"];
$id2=$_GET["id2"];

// บันทึกข้อมูล
$sql = "UPDATE water_status SET Status='$id1'WHERE ID='1' ";
$sql1 = "UPDATE water_status SET Status='$id2'WHERE ID='2' ";
    $result=mysqli_query($con,$sql); // สั่งรันคำสั่ง sql
    $result1=mysqli_query($con,$sql1);
    if($result){
    }else{
        echo myqli_errors($con);
    }
    if($result1){
    }else{
        echo myqli_errors($con);
    }
?>