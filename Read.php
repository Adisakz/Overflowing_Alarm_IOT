<?php
require_once 'dbcon.php';
    $id1=$_GET["id1"];
    $id2=$_GET["id2"];
    $sql="SELECT * FROM water_status WHERE ID=$id1";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    
    $data = array("id"=> $row['ID'],"Status"=> $row['Status']);
    echo json_encode($data);

    $sql2="SELECT * FROM water_status  WHERE ID=$id2";
    $result2=mysqli_query($con,$sql2);
    $row2=mysqli_fetch_array($result2);
    
    $data2 = array("id"=> $row2['ID'],"Status"=> $row2['Status']);
    echo json_encode($data2);
    ?>