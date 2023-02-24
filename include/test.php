<?php 
include './include/configuration.php';

if(isset($_POST['request'])){
    $name = $_POST['name'];
    $hospital = $_POST['hospital'];
    $phone = $_POST['phone'];
    $unit = $_POST['unit'];
    $blood = $_POST['blood'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $area = $_POST['area'];
    $address = $_POST['address'];

    $send_request = "INSERT INTO `request`(name, hospital, phone, unit, blood_group, date, `time`, area, address) VALUES ('$name','$hospital','$phone','$unit','$blood','$date','$time','$area','$address')";
}
?>