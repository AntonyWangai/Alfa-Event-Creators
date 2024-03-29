<?php
header("Access-Control-Allow-Origin: *");
$serverName = "localhost";
$userName = "root";
$password = "";
$dataBaseName = "alfa-events";


$conn = new mysqli($serverName, $userName, $password, $dataBaseName);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM signUp WHERE Email = ?");


$stmt->bind_param("s", $email);

$stmt->execute();


$result = $stmt->get_result();

if ($result->num_rows > 0) {
    
    $row = $result->fetch_assoc();
    if ($password == $row['Password']) {
    
        $response = array("status" => "success", "fullname" => $row["FullName"]);
        echo json_encode($response);
    } else {
        $response = array("status" => "error", "message" => "Invalid password");
        echo json_encode($response);
    }
} else {
    $response = array("status" => "error", "message" => "User not found");
    echo json_encode($response);
}

$stmt->close();

$conn->close();
?>
