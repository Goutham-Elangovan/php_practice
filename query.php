<?php
include 'dbconn.php';

$fname = $_POST['firstname'];
$sname = $POST['secondname'];
$age = $_POST['age'];
$email = $_POST['email'];
$cuisine = $_POST['cuisine'];

$query = "INSERT INTO users  (firstname, secondname, age, email, cuisine) 
VALUES ('$fname', '$sname', '$age', '$email', '$cuisine');";
mysqli_query($connect, $query);

header("Location: login.php?signup=success");
?>

    