<?php

header("Access-Control-Allow-Origin: *");

$serverName = "localhost";
$userName = "root";
$password = "";
$dataBaseName = "alfa-events";


$conn = new mysqli($serverName, $userName, $password, $dataBaseName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $email = $_POST['email'];
    $eventID = $_POST['eventID'];
    $pname = $_POST['pname'];
    $date = $_POST['date']
    $sql = "INSERT INTO event (name,eventID,package,date) VALUES ('$email', '$eventID', '$pname','$date')";

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
