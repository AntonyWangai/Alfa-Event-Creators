<?php

header("Access-Control-Allow-Origin: *");

$serverName = "sql109.infinityfree.com";
$userName = "if0_36103335";
$password = "2PhSWsD8cc7HA";
$dataBaseName = "if0_36103335_Events";


$conn = new mysqli($serverName, $userName, $password, $dataBaseName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $name = $_POST['name'];
    $eventID = $_POST['eventID'];
    $package = $_POST['package'];
    $date = $_POST['date']
    $sql = "INSERT INTO event (name,eventID,package,date) VALUES ('$name', '$eventID', '$package','$date')";

    $res = $conn->query($sql);
    if ($res) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$sql = "SELECT * FROM event";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo "0 results";
}

$conn->close();
