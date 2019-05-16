<?php
require_once 'connection_details.php';
$conn = new mysqli($hostname, $username, $password, $dbname);
if ($conn->connect_error) die($conn->connect_error);
$user = mysqli_real_escape_string($conn, $_POST['username']);
$pass = mysqli_real_escape_string($conn, $_POST['password']);
$select = "select * from staff where fname='$user' and lname='$pass'";
$result = mysqli_query($conn, $select);
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION['userid'] = $row['lname'];
            header('location:http://localhost/Hospital/Dashboard.php');

        }
    } else {
        header('location:http://localhost/Hospital/signup.php');

    }

} else {
    header('location:http://localhost/Hospital/signup.php');

}


