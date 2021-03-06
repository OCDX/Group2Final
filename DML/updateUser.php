<?php

//  sets $datum at $row for a $userid

$servername = "localhost";
$username = "root";
$dbname = "db";

// Create connection
$conn = new mysqli($servername, $username, "", $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("UPDATE user SET ?=? WHERE id=?");
$stmt->bind_param("ssi", $row, $datum, $userid);

//execute
$stmt->execute();


////update permission////
// prepare and bind
$stmt = $conn->prepare("UPDATE permissiongroup SET permissionid=usertypeid");
$stmt->bind_param("i", $permissionid);
//execute
$stmt->execute();



$stmt->close();
$conn->close();
?>
