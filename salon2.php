<?php

include "db.php";

$data = json_decode(file_get_contents("php://input"), true);

$name = $data["name"];
$email = $data["email"];
$service = $data["service"];
$date = $data["date"];
$time = $data["time"];

$stmt = $conn->prepare("INSERT INTO appointments(fullname,email,service,appointment_date,appointment_time) VALUES(?,?,?,?,?)");

$stmt->bind_param(
    "sssss",
    $name,
    $email,
    $service,
    $date,
    $time
);

if($stmt->execute()){

    echo json_encode([
        "success"=>true,
        "message"=>"Appointment Booked!"
    ]);

}else{

    echo json_encode([
        "success"=>false,
        "message"=>"Booking Failed"
    ]);

}

$stmt->close();
$conn->close();

?>