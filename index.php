<?php
    require_once 'dbcon.php';    
    $sql="SELECT * FROM water_status";
    $result=mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result)){
        if(($row["ID"])==1){
            if(($row["Status"])=='1'){
            $s1=0;
            }else {
            $s1=1;
            }
          }
          //อ.จักรกริช 
          if(($row["ID"])==2){
            if(($row["Status"])=='1'){
            $s2=0;
            }else {
              $s2=1;
            }
          }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
<?php 
if(($s1)==1&&($s2)==0){
    $s='น้อย';
    echo "<style>.water2{
        width: 100%;
        height: 65%;
        background-color:white;
        border-top-left-radius: 13%;
        border-top-right-radius: 13%;
    }
    .water1{
        width: 100%;
        height: 35%;
        background-color:Red;
    }</style>";
}
if(($s1)==1 && ($s2)==1){
    $s='ปกติ';
    echo "<style>.water2{
        width: 100%;
        height: 65%;
        background-color:blue;
        border-top-left-radius: 13%;
        border-top-right-radius: 13%;
    }
    .water1{
        width: 100%;
        height: 35%;
        background-color:blue;
    }</style>";
}

if(($s1)==0 && ($s2)==0){
    $s='ไม่มี';
    echo "<style>.water2{
        width: 100%;
        height: 65%;
        background-color:white;
        border-top-left-radius: 13%;
        border-top-right-radius: 13%;
    }
    .water1{
        width: 100%;
        height: 35%;
        background-color:white;
    }</style>";
}

?>
<div class="h">IOT MINIPROJECT</div>
<div class="body-water">
    <div class="water2"></div>
    <div class="water1"></div>
</div>
<div class="status">
    <h1>ระดับน้ำ : <?php echo $s ?></h1>
</div>
<div class="status">
    <h4>64332210197-0 นายอดิศักดิ์ เอี่ยมสอาด</h4>
    <h4>64332210306-7 นายโกเมนทร์ บุญเพิ่ม</h4>
</div>





</body>
</html>
<style>
body{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.h{
font-size:50px;
margin: 10px;
}
.body-water{
    width: 200px;
    height: 300px;
    border : 4px solid Blue;
    border-top-left-radius: 13%;
    border-top-right-radius: 13%;
    margin: 10px;
}

</>