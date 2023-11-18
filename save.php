<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"]; 

$conn = mysqli_connect("localhost", "root", "", "new") or die("Connection failed");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO new_table (Name, Email, Message) VALUES ('$name', '$email', '$message')";


if (mysqli_query($conn, $sql)) {
    echo "Data saved successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>
