<?php
$servername = "localhost";
$username = "root";
$password = "@root123";
$dbname = "passcollector";

$firstname= $_POST['FirstName'];
$lastname= $_POST['LastName'];
$email= $_POST['Email'];
$pasword = $_POST['Pasword'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $pasword = md5($pasword);
    $sql = "INSERT INTO userinfo (firstName,lastName, email, passwd)
    VALUES ('$firstname','$lastname','$email','$pasword')";
if ($conn->query($sql) === TRUE) {
    echo "Congratulation! You have successfully created an account";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  
?>